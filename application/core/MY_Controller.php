<?php
(defined('BASEPATH')) OR exit('No direct script access allowed');
ini_set('memory_limit',-1);
error_reporting(1);
/* The MX_Controller class is autoloaded as required */

class MY_Controller extends MX_Controller
{
    var $sub_program_list, $activity_table, $hcmp;
    function __construct() {
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }


}
