<div id="hero"></div>
<div class="container">  
    <div class="third">
     <h4>User</h4>
	<form method=post action=<?php echo URL; ?>user/create>
        <label>Login</label><input type=text name=username /><br />
        <label>Password</label><input type=text name=password /><br />
        <label>Role</label>
            <select name=role>
                <option value=default>Default</option>
                <option value=admin>Admin</option>
            </select><br />
             <input type=submit />
    </form>
    </div>
<div class="third">

        
  

<?php
foreach($this->userList as $key => $value) {
	
	echo  '<ul><li>'.$value['username']."&nbsp;";
	echo  $value['role']."&nbsp;";
	echo '<a href="'.URL.'user/edit/'.$value['id'].'">Edit</a> <a href="'.URL.'user/delete/'.$value['id'].'">Delete</a></li></ul>';

}
//print_r($this->userList);
?>
  </div>
  </div>