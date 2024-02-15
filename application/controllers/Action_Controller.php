<?php 

defined('BASEPATH') OR exit ('no direct script access allowed');

/**
 * 
 */
class Action_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function register()
	{
		$this->load->model('Action_Model');
		$this->Action_Model->userRegistration();
	}

	public function loadNewPage()
	{
		$this->load->view('newpage');
	}
}


?>