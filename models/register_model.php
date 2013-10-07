<?php
class Register_Model extends Model
{

    public function  __construct()
    {
        parent::__construct();
    }
    public  function run()
    {
		
		$sth=$this->db-> prepare( 'INSERT INTO user_login( username, firstname, lastname, emailId, password) VALUES( :username, :firstname, :lastname, :emailId, :password)');
		$sth->execute( array( ':username' => $_POST['username'], ':firstname' => $_POST['firstname'], ':lastname' => $_POST['lastname'], ':emailId' => $_POST['emailId'],':password' => md5($_POST['password']) ) );
		
    //$data=$sth->fetchAll();
    $count = $sth->rowCount();
         if($count>0)
         {
         Session::init(); 
         Session::set('loggedIn',true);
         header('location: ../dashboard');
		  $_SESSION['username']=$_POST['username'];
         }
          else {
        
              header('location: ../login');
          }

    }
	 public  function add()
    {
	}

}
    