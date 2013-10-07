<div id="hero"></div>
<div class="container">  

   <center>  <h4>Product::Edit</h4></center>



        
  

<?php
echo  '<ul>';

foreach($this->productList as $key => $status) {
	echo '<li>';
	echo  $status['username']."&nbsp;";
	echo  $status['role']."&nbsp;";
	if($status['status'] == 1){ 
		echo '
		<a class="activate" rel="1" href="'.URL.'product/activate/'.$status['id'].'">Deactivate</a> ';
	}
		else{
		echo '<a class="deactivate" rel="0" href="'.URL.'product/deactivate/'.$status['id'].'">Activate</a>';
	}
	echo '</li>';
}
echo '</ul>';
//print_r($this->userList);
?>
  </div>