<?php
class Dashboard_Model extends Model {

	public function __construct() {
		parent::__construct();
	
	}
	public function xhrInsert() {
		/*
		/ This is an ajax call to the database
		/
		/ Sanatize $text
		*/
		$product_name = $_POST['product_name'];
		
		$sth = $this->db->prepare('INSERT INTO dag (product_name) VALUES (:product_name)');
		$sth->execute(array(':product_name' => $product_name));
		
		$data = array('product_name' => $product_name, 'id' => $this->db->lastInsertId());
		echo json_encode($data);
	
	}
		public function xhrGetListings() {
		// Gets the entries from the ajax call from the database
		$sth = $this->db->query('SELECT * FROM dag');
		// sets the fetch mode so that it only fetches the row data and not the id's
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		echo json_encode($data);
	
	}
	public function xhrDeleteListing() {
	
		$id = $_POST['id'];
		$sth = $this->db->prepare('DELETE FROM dag WHERE id = "'.$id.'"');
		$sth->execute();
	
	}
	public function xhrActivate() {
		// Gets the entries from the ajax call from the database
		$sth = $this->db->query('UPDATE * FROM user_login(status) VALUES(1)');
		// sets the fetch mode so that it only fetches the row data and not the id's
		//$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
	
	}
	public function xhrDeactivate() {
	
		$sth = $this->db->query('UPDATE * FROM user_login(status) VALUES(0)');
		// sets the fetch mode so that it only fetches the row data and not the id's
		//$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
	}
}	