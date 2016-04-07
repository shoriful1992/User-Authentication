<?php
require_once("header.php");
@$member_id = $_REQUEST['member_id'];
$select = "SELECT * FROM student_info WHERE id = '$member_id'";
$result = mysql_query($select);
$show = mysql_fetch_object($result);
?>
<body>
	<div class="container">
		<div class="row col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						View Page
					</h3>
				</div>
				<div class="panel-body">	
					<div class="form-group row">
						<div class="col-sm-10">
						<?php
							$photo = is_file(UPLOADED_PATH.$show->photo) ? UPLOADED_PATH.$show->photo :'';
						?>
						<img src="<?php echo $photo?>" width="55" height="55" class="img-circle">
						
					   </div>
					</div>	
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<?php echo $show->name;?>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 control-label">Father Name</label>
						<div class="col-sm-10">
						<?php echo $show->fathers_name;?>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 control-label">Sex</label>
						<div class="col-sm-10">

							<?php echo $show->sex;?>

						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 control-label">Hobby</label>
						<div class="col-sm-10">
							<?php echo $show->hobby;?>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-10">
							<?php echo $show->address;?>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<?php echo $show->email;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>				


</body>