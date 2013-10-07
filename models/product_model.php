<?php

class Product_Model extends Model {

	public function __construct() {
		parent::__construct();
	
	}
	
	public function productList() {
	
		$sth = $this->db->prepare('SELECT id, username, role, status FROM user_login');
		$sth->execute();
		// returns the results in an array to the controller so that it can be displayed on the view
		return $sth->fetchAll();
		
	}
	public function activate($id) {

		$sth = $this->db->prepare('UPDATE user_login SET status=0 where id=:id');
		$sth->execute(array(
			':id' => $id
		));
		echo $id;
		header('location: ' . URL . 'product');
	}
		
	public function deactivate($id) {		
		$sth = $this->db->prepare('UPDATE user_login SET status=1 where id=:id');
		$sth->execute(array(
			':id' => $id
		));
		echo $id;
		header('location: ' . URL . 'product');
		
		}
	
}	