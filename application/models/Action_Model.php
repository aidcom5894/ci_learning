<?php 

defined('BASEPATH') OR exit('no direct script access allowed');

/**
 * 
 */
class Action_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function userRegistration()
	{
		$username = $_POST['email'];
		$password = $_POST['password'];

		if(isset($_POST['submit']))
		{
			$data = array(
		        'email' => $username,
		        'password' => $password
			);

			$this->db->insert('dummy_table', $data);
			$this->load->view('newpage');
		}
	}
}


?>