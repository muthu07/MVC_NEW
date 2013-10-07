<?php
class Home extends Controller {

   function __construct() {
      parent::__construct();
      // The :: is calling a static function
      Session::init();
      $logged = Session::get('loggedIn');
      if ($logged == false) {
       Session::destroy();
       header('location: login');
       exit;
      
      }
	        // Example way of loading js files onto each page/controller/view
	$this->view->js = array('dashboard/js/default.js');
	
	}
	
	
	public function index() {
		$this->view->homeList = $this->model->homeList();
	  	$this->view->render('home/index');	
	}
	
	public function create() {
		
		$data = array();
		$data['username'] = $_POST['username'];
		$data['password'] = Hash::create('md5', $_POST['password'], HASH_KEY);
		$data['role'] = $_POST['role'];
		// Need error checking
		
		$this->model->create($data);
	}
	
}