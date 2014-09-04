<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Database extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->module('template_m');
        $data['title']='Database';
        $data['content_view']='database/index';
        //$data['active_link']='Database';
        $this->template_m->render($data);
    }

    public function get_tables($total=0){
        switch($total){
            case 0:
            $query = 'SELECT COUNT(*) as total  FROM information_schema.tables WHERE table_schema = "mnh_rest";';
            $result=$this->db->query($query);
            $result = $result->result_array();
            echo (int)$result[0]['total'];
            break;

            case 1:
            $query = 'SELECT *  FROM information_schema.tables WHERE table_schema = "mnh_rest";';
            $result=$this->db->query($query);
            $result = $result->result_array();
            echo json_encode($result[0]);

            break;
        }


    }


}
