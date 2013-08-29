<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeFeedController extends CI_Controller {

	private $data;

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function index() {
		$this->data['pageTitle'] = 'Tickur';
		$this->data['pageID'] = 'homeFeed';

		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['user_id'] = $this->session->userdata('user_id');
		$this->data['user_email'] = $this->session->userdata('user_email');

		$this->load->view('global_elements/head', $this->data);
		$this->load->view('global_elements/top-nav', $this->data);
		$this->load->view('pages/HomeFeedView', $this->data);
		$this->load->view('global_elements/footer', $this->data);
	}
}