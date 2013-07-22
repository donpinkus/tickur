<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * An ajax used to register a new user via e-mail.
 */
class LogOutController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('User_auth_model');
	}

	public function index() {
		$this->User_auth_model->log_out();
		header('Location: /index.php');
	}
}