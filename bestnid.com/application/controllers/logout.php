<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	function index($user){
		$this->session->unset_userdata($user);
		$this->session->sess_destroy();
		redirect('index');
	}
}
?>