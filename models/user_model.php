<?php

class User_Model extends Model {

	public function __construct() {
		parent::__construct();
	
	}
	
	public function userList() {
	
		$sth = $this->db->prepare('SELECT id, username, role FROM user_login');
		$sth->execute();
		// returns the results in an array to the controller so that it can be displayed on the view
		return $sth->fetchAll();
		
	}
	
	public function usersinglelist($id) {
	
		$sth = $this->db->prepare('SELECT id, username, role FROM user_login WHERE id = :id');
		$sth->execute(array(':id' => $id));
		return $sth->fetch();
	
	}
	
	public function create($data) {
	  $sth = $this->db->prepare('INSERT INTO user_login (username, password, role) VALUES (:username, :password, :role)');
		$sth->execute(array(
			':username' => $data['username'],
			':password' => Hash::create('md5', $data['password'], HASH_KEY),
			':role' => $data['role']
		));
		
		header('location: ' . URL . 'user');
	}
	
	public function delete($id) {
	
		$sth = $this->db->prepare('DELETE FROM user_login WHERE id = :id');
		$sth->execute(array(
			':id' => $id
			));
	}
	
	public function editSave($data) {
		
	
		$sth = $this->db->prepare('UPDATE user_login SET username = :username, password = :password, role = :role WHERE id = :id');
		$sth->execute(array(
			':username' => $data['username'],
			':password' => Hash::create('md5', $data['password'], HASH_KEY),
			':role' => $data['role'],
			':id' => $data['id']
		));
	
		header('location: ' . URL . 'user');
	}
	
}	