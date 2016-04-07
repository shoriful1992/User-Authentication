<?php
	require_once("header.php");
	if(isset($_POST['btnSave']))
	{
		$reg = new StdRegistration();
		$reg->stdSave($_POST);
	}	
?>
<body>
	<div class="container">
		<div class="row col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Registration Form
					</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" name="name" class="form-control" >
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Father Name</label>
							<div class="col-sm-10">
								<input type="text" name="father_name" class="form-control" >
							</div>
						</div>
			
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Sex</label>
							<div class="col-sm-10">
								 <input type="radio" name="sex" value="male">
								 Male
								 <input type="radio" name="sex" value="female">
								 Female
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Hobby</label>
							<div class="col-sm-10">
								 <input type="checkbox" name="hobby[]" value="cricket"> Cricket
								 <input type="checkbox" name="hobby[]" value="football"> football
								 <input type="checkbox" name="hobby[]" value="riding"> riding
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Address</label>
							<div class="col-sm-10">
								<textarea name="address" class="form-control" rows="3"></textarea>
							</div>
						</div>
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
							<label for="inputEmail3" class="col-sm-2 control-label">Picter</label>
							<div class="col-sm-10">
								<input type="file" name="picter">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" name="btnSave" class="btn btn-success" value="Sign Up">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>		
	</div>
</body>