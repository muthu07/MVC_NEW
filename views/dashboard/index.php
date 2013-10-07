<div id="hero">	
		<p style="padding:1rem 5%; margin:0;" class="hero-title h4">Welcome to&nbsp;<a style="color:#CCC;" class="h5" rel="home" href="#"> <?php echo $_SESSION['username']; ?> &nbsp; Babu</a>
        </p>
        
</div>

<div class="container">
		<center>
        <h2>Admin Page</h2><br/>
        
            <p class="button colored-button">Product</p>
            <p class="button colored-button">Add Product</p>
         </center>
         <div class="container">
         	
           <div class="third">
                <form id="randomInsert" method="post" action="<?php echo URL; ?>dashboard/xhrInsert/">
                    <center><h4>Add Products</h4></center> 
                    <fieldset>    
                        <input type="text" name="product_name" placeholder="Enter Product Name" required="">  
                        <input type="submit" name="submit" value="Add" class="button colored-button">
                    </fieldset>
                </form>
          </div>
          
          
          
          
         <div id="listInserts" class="third">
             
      	</div>
         <div class="third">
         <div id="chatContainer">

         </div>
        </div>   
    
 
</div>
