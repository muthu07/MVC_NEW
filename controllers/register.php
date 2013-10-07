<?php
class register extends controller{
    function  __construct() {
        parent::__construct();
       
    }
    function Index()
    {
	
      $this->view->render('register/index');
	  
    }
    function run(){
        $this->model->run();
    }
}