<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Feed extends MX_Controller
{
    //============ CONSTRUCTOR
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_feed');
    }

    public function index() {
     
            $data['title'] = 'Masterlist';
            $data['content'] = 'cdrrmd/v_feeds';
            $this->load->view('layouts/v_master', $data);

    }

    public function savefeed(){

        if($_POST){

            $data['a_id'] = $this->session->userdata('accountId');
            $data['f_title'] = $this->input->post('f_title');
            $data['f_brgy'] = $this->input->post('f_brgy');
            $data['f_date'] = $this->input->post('f_date');
            $data['f_time'] = $this->input->post('f_time');
            $data['f_level'] = $this->input->post('f_level');
            $data['f_content'] = $this->input->post('f_content');

            if($this->mdl_cdrrmd->m_savefeed($data)){

                $arrContextOptions=array(
                    "ssl"=>array(
                        "verify_peer"=>false,
                        "verify_peer_name"=>false,
                    ),
                );  
                
                $contents = file_get_contents(base_url()."cdrrmd/get_feeds", false, stream_context_create($arrContextOptions));
                
                file_put_contents(basename("/feeds.txt"), $contents);


                $result = array('status' => 'yes','content'=> 'Successfully save!');
                echo json_encode($result);
                exit();
            }else{
                $result = array('status' => 'no','content'=> 'Failed to save!');
                echo json_encode($result);
                exit();
            }

        }

    }

    public function get_feeds(){
        $result = $this->mdl_cdrrmd->m_get_feeds();
        echo json_encode($result);

        
    }

}
