<?php
	
class User_auth_model extends CI_Model {

	private
		$user_id,
		$user_email,
		$user_logged_in = false;

	public function __construct() {
		parent::__construct();

		$this->load->database();
		$this->load->library('session');
		$this->user_logged_in = $this->session->userdata('logged_in');
	}	

/********************************************************
 * Getters and Setters
 ********************************************************/

	private function set_logged_in() {
		if ($this->user_logged_in == 1) {
			$this->user_logged_in = true;
		} else {
			$this->user_logged_in = false;
		}
	}

	public function get_logged_in() {
		return $this->user_logged_in;
	}

	public function get_id() {
		return $this->user_id;
	}

/********************************************************
 * Register and login 
 ********************************************************/

	// Called from new user via email form.
	public function new_user_via_email($email, $password) {
		$new_user_data = array(
			"user_email" => $email,
			"user_password" => $password
		);

		// Check if a user exists.
		$query = $this->get_user_by_email($email);
		if ($query->num_rows() > 0) { return "username exists"; }

		// Register new user.
		$query = $this->db->insert('user_login', $new_user_data);
		$query = $this->get_user_by_email($email);
		$user = $query->row();
		$this->createAuthorizedSession($user->user_id, $user->user_email);

		return "true";
	}

	public function authenticate_user_via_email($email, $password) {
		// Check if user exists.
		$query = $this->get_user_by_email_password($email, $password);
		if ($query->num_rows() == 0) { return 'false'; }

		// Log in the user.
		$user = $query->row();
		$this->createAuthorizedSession($user->user_id, $user->user_email);
		return "true";
	}

	private function new_user_via_linkedin() {}

	private function createAuthorizedSession($user_id, $user_email) {
		// Set session data for the new user.
		$this->session->set_userdata('logged_in', 1);
		$this->session->set_userdata('user_id', $user_id);
		$this->session->set_userdata('user_email', $user_email);
	}

	public function log_out() {
		$this->session->sess_destroy();
	}

/********************************************************
 * User data utilities
 ********************************************************/

	private function get_user_by_email($email) {
		$this->db
			->from('user_login')
			->where('user_email', $email);
		$query = $this->db->get();
		return $query;
	}

	private function get_user_by_email_password($email, $password) {
		$this->db
			->from('user_login')
			->where('user_email', $email)
			->where('user_password', $password);
		$query = $this->db->get();
		return $query;
	}

}




