<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Backup extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

    }

    public function routine_backup(){
        $prefs = array('format'=>'zip');
        $this->load->dbutil();
        $backup =& $this->dbutil->backup($prefs);
        //echo $backup;die;
        $db_name='mnch'.time().'.zip';
        $save='assets/files/database/'.$db_name;
        write_file($save,$backup);
        force_download($db_name,$backup);
    }

}
