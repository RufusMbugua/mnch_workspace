<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->module('template_m');
        $data['title']='Home';
        $data['content_view']='home/index';
        $this->template_m->render($data);
    }

    public function get_git_data($parameter=''){
        $url = 'https://api.github.com/repos/rufusmbugua/mnh/'.$parameter.'?sha=develop';
        $ch = curl_init();
        $agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36';
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSLVERSION, 3);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        $json_data = curl_exec($ch);
        //$data = json_decode($json_data);
        //echo '<pre>';print_r($data);echo '</pre>';die;
        if (empty($json_data)) {
            echo "cURL Error: " . curl_error($ch);
        }
        curl_close($ch);
        echo $json_data;

    }
    public function get_files(){
        $files = get_filenames('assets/files');
        var_dump($files);
    }


}
