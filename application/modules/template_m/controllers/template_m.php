<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Template_M extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index($data) {


    }

    public function check_session() {

    }
    public function render($data){
          $this -> parser->parse('template', $data);
    }

}
