#!/usr/bin/env python
# ping a list of host with threads for increase speed
# use standard linux /usr/bin/ping | /bin/ping utility

from threading import Thread
import os
import subprocess
import Queue
import re
import pymysql.cursors

# some global vars
num_threads = 30
ips_q = Queue.Queue()
out_q = Queue.Queue()

# connection to the database
connection = pymysql.connect(
        host = 'localhost',
        user = 'core',
        password = 'core',
        db = 'core',
        cursorclass = pymysql.cursors.DictCursor)

# build IP array
ips = []

with connection.cursor() as cursor:
    sql = "SELECT devices.device_id, devices.device_ipaddr, device_setting.* FROM devices lEFT JOIN device_setting ON devices.device_id = device_setting.device_id where device_setting.device_running =1;"
    cursor.execute(sql)
    result = cursor.fetchall()

for i in result:
    ips.append((i['device_ipaddr']))

# thread code : wraps system ping command
def thread_pinger(i, q):
  """Pings hosts in queue"""
  while True:
    # get an IP item form queue
    ip = q.get()

    if os.path.isfile('/etc/solus-release'):
        args=['/usr/bin/ping', '-c', '10', '-W', '1', str(ip)]
    else:
        args=['/bin/ping', '-c', '10', '-W', '1', str(ip)]

    p_ping = subprocess.Popen(args,
                              shell=False,
                              stdout=subprocess.PIPE)
    # save ping stdout
    p_ping_out = p_ping.communicate()[0]

    # put output msg
    out_q.put(p_ping_out)

    # proses output msg to database
    msg = out_q.get_nowait()
    pingdata = re.findall(r'from (.*): icmp_seq=(.*) ttl=(.*) time=(.*) ms', msg, re.M)
    for item in pingdata:
        # print(item)
        with connection.cursor() as cursor:
            #sql insert data from collected items
            sql = "INSERT INTO `device_result` (`destination`, `icmp_seq`, `icmp_ttl`, `icmp_time`) VALUES " + str(item)
            cursor.execute(sql)
            connection.commit()

    # print raw msg
    print(msg)

    # update queue : this ip is processed
    q.task_done()

# start the thread pool
for i in range(num_threads):
  worker = Thread(target=thread_pinger, args=(i, ips_q))
  worker.setDaemon(True)
  worker.start()

# fill queue
for ip in ips:
  ips_q.put(ip)

  # wait until worker threads are done to exit
  ips_q.join()

# end of program
