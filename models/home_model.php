<?php

class Home_Model extends Model {

	public function __construct() {
		parent::__construct();
	
	}
	
	public function homeList() {
		$sth = $this->db->prepare('SELECT id, role, photo FROM user_login WHERE username = :username');
		$sth->execute(array(':username' => $_SESSION['username']));
		// returns the results in an array to the controller so that it can be displayed on the view
		return $sth->fetchAll();
		
	}
	
}	