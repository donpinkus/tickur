<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * An ajax used to register a new user via e-mail.
 */
class UserLogInViaEmailAjaxController extends CI_Controller {

	private 
		$email,
		$password;

	public function __construct() {
		parent::__construct();

		$this->load->library('session');

		$this->load->model('User_auth_model');

		$this->email = $_POST['email'];
		$this->password = $_POST['password'];
	}

	public function index() {
		// Returns "true" if successful. Returns "username exists" if exists.
		$result = 
			$this->User_auth_model->authenticate_user_via_email($this->email, $this->password);	

		echo $result;
	}
}