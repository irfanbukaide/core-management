<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TagsCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load page css and js
        $this->page_css_js();

        // load model
        $this->load->model('Tags_model', 'tags');
    }

    public function index()
    {
        $this->master_css_js();

        // title segment
        $this->title('Tags');

        // load data
        $this->page['tags'] = $this->tags->get_all();

        // render
        $this->render('Master_tags', $this->page);
    }

    public function save()
    {
        $data_tag = array(
            'tag_id' => $this->input->post('tag_id'),
            'tag_name' => $this->input->post('tag_name')
        );

        try {
            $tag = $this->tags->where('tag_id', $data_tag['tag_id'])->get();

            if ($tag) {
                $this->tags->update($data_tag, 'tag_id');
                $this->pesan->berhasil('Data successfully changed');
            } else {
                $this->tags->insert($data_tag);
                $this->pesan->berhasil('Data successfully created');
            }

        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/tag');
    }

    public function delete($id)
    {
        try {
            $this->tags->where('tag_id', $id)->delete();
            $this->pesan->berhasil('Data successfully deleted');
        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/tag');
    }


}

/* End of file DashboardCtrl.php */