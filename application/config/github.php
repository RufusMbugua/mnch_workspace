<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['client_id'] = '0c8605efd6e50eebf660';
$config['client_secret'] = '08d6d379c43655b7f62bfccad1a76e054e2d3eab ';
$config['redirect_uri'] = 'http://server.dev/authorize/github';
//user,user:email,user:follow,public_repo,repo,repo:status,delete_repo,notifications,gist
$config['scope'] = 'user,user:email,notifications,repo,gist';


/* End of file github.php */
/* Location: ./application/config/github.php */
