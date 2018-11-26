<div class="row">
    <div class="col mb-2">
        <b>Uptime :</b><br>
        <span class="text-success"><?= $this->secondstotime->generate($device->device_uptime); ?></span>
    </div>
    <div class="col mb-2">
        <b>Downtime :</b><br>
        <span class="text-danger"><?= $this->secondstotime->generate($device->device_downtime); ?></span>
    </div>

</div>
<div class="row">
    <div class="col mb-2">
        <b>Last up at :</b> <br>
        <?= $device->device_last_up; ?>
    </div>
    <div class="col mb-2">
        <b>Last down at :</b> <br>
        <?= $device->device_last_down; ?>
    </div>

</div>
<div class="row">
    <div class="col mb-2">
        <b>Last checked at :</b><br>
        <?= $device->device_last_checked; ?>
    </div>
    <div class="col mb-2">
        <b>Next run at :</b><br>
        <?= $device->device_next_run; ?>
    </div>
</div>