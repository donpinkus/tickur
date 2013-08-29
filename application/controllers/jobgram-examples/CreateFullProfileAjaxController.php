<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * An ajax used to register a new user via e-mail.
 */
class CreateFullProfileAjaxController extends CI_Controller {

	private
		$profile; // Profile fields as an assoc array. 

	public function __construct() {
		parent::__construct();

		$this->load->library('firephp'); $this->firephp->log('ding');
		$this->load->library('session');

		$this->load->model('Full_profile_model');
		$this->profile = $_POST;
	}

	public function index() {
		$this->createProfile();
		$this->redirect();
	}

	private function createProfile() {
		$result = 
			$this->Full_profile_model->setFullProfile($_POST);	

		return $result;
	}

	private function redirect() {
		header('Location: /index.php/user-create-anon-profile');
	}
}