<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page" 
style="background-image: url('http://www.upcebuapo.org/images/slide3.jpg'); background-position: center; background-size: 100% 100%; background-repeat: no-repeat; 
	 padding: 50px">

	
<div class="login-box" >
  
  
  	<div class="login-box-body"  style="background-color: rgba(255, 255, 255, 0.5);">
	  <div class="login-logo">
	  <b style="color: #8D1436;">U</b><b style="color: #014421;">P</b><b style="color: black;">Vote</b>
  	</div>
  
    	<p class="login-box-msg">Sign in to start your session</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  <div class="row">
    			<div class="col-xs-12 text-center" >
          			<button type="submit" class="btn btn-primary" style='background-color: #8D1436; border-radius: 20px;'  name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>