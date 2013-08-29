<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserSignUpController extends CI_Controller {

	private $data;

	public function __construct() {
		parent::__construct();

		$this->load->library('session');
	}

	public function index() {
		$this->data['pageTitle'] = 'Jobgram';
		$this->data['pageID'] = 'userSignUp';

		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['user_id'] = $this->session->userdata('user_id');
		$this->data['user_email'] = $this->session->userdata('user_email');

		$this->load->view('global_elements/head', $this->data);
		$this->load->view('global_elements/top-nav', $this->data);
		$this->load->view('pages/UserSignUpView');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */