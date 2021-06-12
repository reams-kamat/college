<?php 
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style type="text/css">
		.form11{
			margin:100px 370px 100px 370px;
		}
		.form_top{
			width:380px;
			height: 70px;
			color: white;
			background:  #003366;
			text-align: center;
			padding-top:2px;

		}
	 .inquery_form{
			width:380px;
			background: #efefef;
			height: 450px;
			padding:40px;

		}
		@media screen and (max-width: 320px){
					.form11{
			margin:100px 0px 100px 0px;
		}
		.form_top{
			width:auto;
			height: 70px;
			color: white;
			background:  #003366;
			text-align: center;
			padding-top:2px;

		}
	 .inquery_form{
			width:auto;
			background: #efefef;
			height: 450px;
			padding:40px;

		}

	}
		@media screen and (max-width: 480px) and (min-width: 321px){
					.form11{
			margin:100px 15px;
		}
		.form_top{
			width:auto;
			height: 70px;
			color: white;
			background:  #003366;
			text-align: center;
			padding-top:2px;

		}
	 .inquery_form{
			width:auto;
			background: #efefef;
			height: 450px;
			padding:40px;

		}

	}
		@media screen and (max-width: 720px) and (min-width: 481px){
					.form11{
			margin:100px 100px;
		}
		.form_top{
			width:350px;
			height: 70px;
			color: white;
			background:  #003366;
			text-align: center;
			padding-top:2px;

		}
	 .inquery_form{
			width:350px;
			background: #efefef;
			height: 450px;
			padding:40px;

		}

	}
			@media screen and (max-width: 900px) and (min-width: 721px){
					.form11{
			margin:100px 105px;
		}
		.form_top{
			width:350px;
			height: 70px;
			color: white;
			background:  #003366;
			text-align: center;
			padding-top:2px;

		}
	 .inquery_form{
			width:350px;
			background: #efefef;
			height: 450px;
			padding:40px;

		}

	}



		/*.news{
			position: absolute;
			top: 50px;
			right: 500px;

			left: 500px;
			bottom: 50px;
		}*/
	</style>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="nab.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<body>
	<div class="container">
		<div class="form11" style="display: flex;">
			<div class="col-md-12 col-xs-12 col-sm-12 "> 
				<div class="row">
					<div class=" form_top">
						<h3>Sign In</h3>
					</div>
				</div>
				<div class="row">
					<div class=" inquery_form">
						<?php 
	                            $Msg = "";
					      if(isset($_GET['pro_changed']))
		                            {
		                                $Msg = "Profile was updated sucessfully";
		                                echo '<div class="alert alert-success">'.$Msg.'</div>';
		                            }
		                        if(isset($_GET['pass_changed']))
		                            {
		                                $Msg = "Password was changed sucessfully";
		                                echo '<div class="alert alert-success">'.$Msg.'</div>';
		                            }
		                     
	                            if(isset($_GET['login_failed1']))
		                            {
		                                $Msg = "Email or username is not registered  ";
		                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
		                            }
		                        if(isset($_GET['login_failed2']))
		                            {
		                                $Msg = "Incorrect Password";
		                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
		                            }
		                        if(isset($_GET['pro_changed']))
		                            {
		                                $Msg = "Profile was updated sucessfully";
		                                echo '<div class="alert alert-success">'.$Msg.'</div>';
		                            }
		                        if(isset($_GET['pass_changed']))
		                            {
		                                $Msg = "Password was changed sucessfully";
		                                echo '<div class="alert alert-success">'.$Msg.'</div>';
		                            }
	                             if(isset($_GET['login_success']))
		                            {
		                                $Msg = " You are sucessfully  login!!! ";
		                                echo '<div class="alert alert-success">'.$Msg.'</div>';
		                               
										
		                            }
                            ?>

		                
							<div align="center" style="text-align: center;">
								<button type="button" class="btn btn-default" aria-label="Left Align">
									<span class="glyphicon glyphicon glyphicon-user" aria-hidden="true" style="font-size: 80px;"></span>
								</button>
							</div><br>
						<div>
							<form action="user_login.php" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<label for="exampleInputEmail1">Username</label>
									<input type="username" required="true" class="form-control" id="exampleInputusername1" placeholder="Email or Username" name="email">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" required="true" id="exampleInputPassword1" placeholder="password" name="password">
								</div>
								<button type="submit" class="btn btn-default" name="login">Log In</button>
								<a type="submit" href="index.php" class="btn btn-info" name="login">Home</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>
