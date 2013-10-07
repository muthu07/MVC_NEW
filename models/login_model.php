<?php
class Login_Model extends Model
{

    public function  __construct()
    {
        parent::__construct();
    }
    public  function run()
    {
		$sth=$this->db-> prepare("select id,role FROM user_login WHERE username= :username AND password= :password");
		$sth-> execute(array(':username'=>$_POST['username'],':password'=>md5($_POST['password'])));  
    	$data=$sth->fetch();
   		$count = $sth->rowCount();
         if($count>0)
         {
			 Session::init(); 
			 Session::set('loggedIn',true);
			 Session::set('role',$data['role']);
			 header('location: '.URL.'home');
			 $_SESSION['username']=$_POST['username'];

         }
          else {
        
              header('location: '.URL.'login');
          }

    }

}
    