<div id="hero"></div>
<div class="container">  
    <div class="third">
     <h4>User:: Edit</h4>
<?php
//print_r($this->user);
?>
<form method=post action=<?php echo URL; ?>user/editSave/<?php echo $this->user['id']; ?>>
	<label>Login</label><input type=text name=username value=<?php echo $this->user['username']; ?> /><br />
	<label>Password</label><input type=text name=password /><br />
	<label>Role</label>
		<select name=role>
			<option value=default <?php if($this->user['role'] == 'default') echo 'selected' ;?>>Default</option>
			<option value=admin <?php if($this->user['role'] == 'Admin') echo 'selected' ;?>>Admin</option>
		</select><br />
	<label>&nbsp;</label><input type=submit />
</form>
 	 </div>
     <div class="third">
     </div>
 </div>