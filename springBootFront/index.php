<!DOCTYPE html>
<html>
	<head>
		<meta charset ="UTF-8">
		<title>Spring boot Soccer System</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel="stylesheet" type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
		 <script language="javascript" type="text/javascript" src="js/main.js"></script>
	</head>
<body>
	<div id="navbar" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Soccer System</a>
			</div>
			<nav>
				<ul class="nav navbar-nav">
					<li><a href ="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href ="#"><span class="glyphicon glyphicon-modal-window"></span>Teams</a></li>
					<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
					<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
				</ul>
			</nav>
				
		</div>
	</div>
	</nav>
	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="home.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="#" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	include 
			IF(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cek = mysql_num_rows(mysql_query("SELECT * FROM usertable WHERE email='$email'AND password='$password'"));
            $data =mysql_fetch_row(mysql_query("SELECT * FROM usertable WHERE email='$email' AND password='$password'"));
            IF($cek > 0)
            {
                session_start();
                $_SESSION['email'] = $data['email'];
                $_SESSION['name'] = $data['fullName'];
                 echo "<script language=\"javascript\">alert(\"welcome\");document.location.href='home.php'</script>";
            }
            else{
                echo "<script language=\"javascript\">alert(\"invali email or password\");document.location.href='index.php';</script>";
            }
            }
        
        
        ?>
</body>
</html>