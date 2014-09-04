<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class File extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

    }

    public function upload_file(){
        //var_dump($_FILES);die;
        //$file  = $_FILES;
        $config['upload_path'] = 'assets/files/';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());

            var_dump($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            var_dump($data);
        }

    }
    public function load_files($latest=0){
        $parent_folder = 'assets/files/';
        $data = get_dir_file_info($parent_folder);
        foreach($data as $key => $folder){
            $file_list = get_filenames($parent_folder.$key);
            if($latest==1){
                $last_key = end($file_list);
                //echo $last_key;die;
                $file_data = get_file_info($parent_folder.$key.'/'.$last_key);
                foreach($file_data as $ac=>$actual_data){
                    if($ac=='date'){
                        $new_data[$key][$file][$ac]=date('d-M-Y H:i:s',$actual_data);
                    }
                    else{
                        $new_data[$key][$file][$ac]=$actual_data;
                    }
                    $new_data[$key][$file]['div']='#'.str_replace(' ','_',strtolower($key));
                }
            }
            else{
                foreach($file_list as $k => $file){
                    $file_data = get_file_info($parent_folder.$key.'/'.$file);
                    foreach($file_data as $ac=>$actual_data){
                        if($ac=='date'){
                            $new_data[$key][$file][$ac]=date('d-M-Y H:i:s',$actual_data);
                        }
                        else{
                            $new_data[$key][$file][$ac]=$actual_data;
                        }
                        $new_data[$key][$file]['div']='#'.str_replace(' ','_',strtolower($key)).'_list';
                    }


                }
            }


        }
        echo json_encode($new_data);

    }
}
