<?php
class Product extends Controller {

   public function __construct() {
      parent::__construct();
      // The :: is calling a static function
      Session::init();
      $logged = Session::get('loggedIn');
	  $role = Session::get('role');
	  
      if ($logged == false || $role != 'owner') {
      	Session::destroy();
      	header('location: login');
      	exit;
      
      }
      
	  
	}
	
	public function index() {
		$this->view->productList = $this->model->productList();
	  	$this->view->render('product/index');	
	}
	
	public function create() {
		
		$data = array();
		$data['username'] = $_POST['username'];
		$data['password'] = Hash::create('md5', $_POST['password'], HASH_KEY);
		$data['role'] = $_POST['role'];
		// Need error checking
		
		$this->model->create($data);
	}
	
	public function edit($id) {
	
		$this->view->user = $this->model->usersinglelist($id);
		$this->view->render('user/edit');
	
	}
	
	public function editSave($id) {
		
		$data = array();
		$data['id'] = $id;
		$data['username'] = $_POST['username'];
		$data['password'] = Hash::create('md5', $_POST['password'], HASH_KEY);
		$data['role'] = $_POST['role'];
		// Need error checking 
		
		$this->model->editSave($data);
		header('location: ' . URL . 'user');
	
	}
	
	public function activate($status) {
	   //echo "hrlo";
		$this->model->activate($status);
	    header('location: ' . URL . 'product');
	
	}
	public function deactivate($status) {
	//echo "hrlo";
		$this->model->deactivate($status);
	    header('location: ' . URL . 'product');
	
	}
}