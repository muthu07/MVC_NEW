<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Test MVC</title>
	<script src="<?php echo URL; ?>assets/js/vendor/jquery-1.10.2.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/base.min.js"></script>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>assets/css/screen.css"/>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/js/jScrollPane/jScrollPane.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/page.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/chat.css" />
	<?php
		// $this->js was called from the controller. For this example it was called from controller/dashboard.php
		if (isset($this->js)) {
			foreach ($this->js as $js) {
			echo '<script type=text/javascript src='.URL.'views/'.$js.'></script>';
			}
		}
		
	?>
    
		<link rel="apple-touch-icon" href="<?php echo URL; ?>touchicon.png">
        <link rel="icon" href="<?php echo URL; ?>favicon.ico">
        <meta name="msapplication-TileColor" content="#006e89">
</head>

<body>
	<main role='main'>
	   <?php Session::init(); ?>
    <header role="banner">
            <div class="container">
                <b id="logo"><a href="#" rel="home">Corruption Against India</a></b>
                <nav role="navigation">
                    <ul>
                    
					<?php if (Session::get('loggedIn') == false): ?>
                    <a href="<?php echo URL; ?>index">Index</a>
                    <a href="<?php echo URL; ?>help">Help</a>
                    <?php endif; ?>
                    
                    <?php if (Session::get('loggedIn') == true): ?>
                    <a href="<?php echo URL; ?>home">Home</a>
                    <a href="<?php echo URL; ?>dashboard">Dashboard</a>
                    
                    <?php if (Session::get('role') == 'owner'): ?>
                    <a href="<?php echo URL; ?>user">Users</a>
                    <a href="<?php echo URL; ?>product">Product</a>
                    <?php endif; ?>
                    
                    <a href="<?php echo URL; ?>dashboard/logout">Logout</a>
                    <?php else: ?>
                    <a href="<?php echo URL; ?>login">Login</a>
                    <?php endif; ?>
	 				</ul>
                </nav>                      
                <a id="pull" class="mobile-nav" href="#" style="display: none;">menu</a>
                
          </div>
    </header>
       
       