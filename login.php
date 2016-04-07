<?php
	require_once("connection.php");
	if(isset($_POST['btnSubmit']))
	{
		$log = new StdLogin();
		$log->stdLogin($_POST);	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Untitled Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
</head>
<body>
	<div class="container">
		<div class="row col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Login Form
					</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" method="post" >
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" name="email" class="form-control" id="inputEmail3" >
							</div>
						</div>
						
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" name="password" class="form-control" id="inputPassword3" >
							</div>
						</div>

						<div class="form-group">
					    	<div class="col-sm-offset-2 col-sm-10">
					      	<button type="submit" name="btnSubmit" class="btn btn-default">Log in</button>
					    	</div>
					  </div>
					  <div class="form-group">
					   <div class="col-md-12 control">
					      <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
					       Don't have an account! 
					      <a href="registration.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
					         Sign Up Here
					      </a>
					  </div>
					  </div>
					   </div>    
					</form>
				</div>
			</div>
		</div>		
	</div>
</body>	