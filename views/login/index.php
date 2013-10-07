<?php
@session_start();
if(isset($_SESSION['username'])){
    header("Location: dashboard");
    }

?>
<div id="hero">
</div>
<div class="container">
    <div class="third">
        
    </div>
    <div class="third">
        <form action="login/run" method="post" >
            <center><h2>Login</h2></center> 
            <fieldset>    
                <input type="text" required="" placeholder="Enter Username" name="username">
                <input type="password" required="" placeholder="Enter Password" name="password">   
                <input type="submit" class="button colored-button" value="Login" name="submit">
                <a href="<?php echo URL; ?>register"> <input type="submit" class="button colored-button" value="Register" name="submit"></a>
            </fieldset>
        </form>
    </div>
</div>


