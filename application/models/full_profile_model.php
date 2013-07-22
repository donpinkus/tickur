<?php
	
class Full_profile_model extends CI_Model {

	private $user_id, $profile;

	public function __construct() {
		parent::__construct();

		$this->load->database();
		$this->load->library('session');
		$this->load->library('firephp'); $this->firephp->log('ding');
		$this->user_id = $this->session->userdata('user_id');
	}	


/*******************************************************************************
 * Set full profile
 ******************************************************************************/
	public function setFullProfile($profile) {
		$this->profile = $profile;
		$this->setFullProfileGeneral();
		$this->setFullProfileEducation();
		$this->setFullProfileExperience();
		$this->setFullProfileSkills();
	}

	private function setFullProfileGeneral() {
		$profile = array(
			"user_id" => $this->user_id,
			"first_name" => $this->profile['first-name'],
			"last_name" => $this->profile['last-name'],
			"country" => $this->profile['country'],
			"region" => $this->profile['region']
		);

		// Check if user exists.
		$query = $this->db->get_where(
			'full_profile_general', 
			array('user_id' => $this->user_id)
		);
		if ($query->num_rows() == 0) { 
			$query = $this->db->insert('full_profile_general', $profile);
		} else {
			$this->db->where('user_id', $this->user_id);
			$query = $this->db->update('full_profile_general', $profile);
		}
	}

	// TODO: only adds one education. deal with multiple.
	private function setFullProfileEducation() {
		$profile = array(
			"user_id" => $this->user_id,
			"school_name" => $this->profile['school-name'],
			"grad_year" => $this->profile['grad-year'],
			"field_of_study" => $this->profile['field-of-study'],
			"degree" => $this->profile['degree']
		);

		// Check if user exists.
		$query = $this->db->get_where(
			'full_profile_education', 
			array('user_id' => $this->user_id)
		);
		if ($query->num_rows() == 0) { 
			$query = $this->db->insert('full_profile_education', $profile);
		} else {
			$this->db->where('user_id', $this->user_id);
			$query = $this->db->update('full_profile_education', $profile);
		}
	}

	// TODO: only adds one job. deal with multiple.
	private function setFullProfileExperience() {
		$profile = array(
			"user_id" => $this->user_id,
			"company" => $this->profile['company'],
			"position" => $this->profile['position'],
			"industry" => $this->profile['industry'],
			"start_date" => $this->profile['start-date'],
			"end_date" => $this->profile['end-date'],
		);

		// Check if user exists.
		$query = $this->db->get_where(
			'full_profile_experience', 
			array('user_id' => $this->user_id)
		);
		if ($query->num_rows() == 0) { 
			$query = $this->db->insert('full_profile_experience', $profile);
		} else {
			$this->db->where('user_id', $this->user_id);
			$query = $this->db->update('full_profile_experience', $profile);
		}
	}

	private function setFullProfileSkills() {
		$skills = explode(", ", $this->profile['skills']);

		$profile = array();
		foreach ($skills as $skill) {
			array_push(
				$profile, 
				array("user_id" => $this->user_id, "skill" => $skill)
			);
		}

		// TODO: Delete all, create all, everytime. it's bad but not breaking this.
		// Check if user exists.
		$this->db->delete('full_profile_skills', array('user_id' => $this->user_id));
		$this->db->insert_batch('full_profile_skills', $profile);
	}

/*******************************************************************************
 * Get full profile
 ******************************************************************************/
  public function getFullProfile($user_id) {
  	$general = $this->db->get_where(
  		'full_profile_general', array("user_id" => $user_id));
  	$experience = $this->db->get_where(
  		'full_profile_experience', array("user_id" => $user_id));
  	$education = $this->db->get_where(
  		'full_profile_education', array("user_id" => $user_id));
  	$skills = $this->db->get_where(
  		'full_profile_skills', array("user_id" => $user_id));

  	$full_profile = array(
  		"general" => $general,
  		"experience" => $experience,
  		"education" => $education,
  		"skills" => $skills,
  	);

  	return $full_profile;
  }
}



