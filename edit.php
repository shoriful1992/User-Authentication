<?php
	require_once('authCheck.php');
	require_once("header.php");
	
	

	@$member_id = $_REQUEST['member_id'];
	$select = "SELECT * FROM contact_list WHERE id = '$member_id'";
	$result = mysql_query($select);
	$show = mysql_fetch_object($result);

	if(isset($_POST['btnSave']))
	{
		$con = new ContactList();
		$con->conEdit($_POST);	
	}
 
?>
<body>
	<div class="container">
		<div class="row col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Edit Form
					</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" method="post" >
						<input type="hidden" name="member_id" class="form-control" value="<?php echo $member_id;?>">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Contact Type</label>
							<div class="col-sm-10">
								<select name="contact_name" class="form-control">
									<option value="">Select Type</option>
									<?php
									$select = "SELECT * FROM contact_type";
									$result = mysql_query($select);
									while($show_con = mysql_fetch_object($result))
									{

										?>
										<option value="<?php echo $show_con->id;?>"<?php if($show_con->id == $show->contact_type){echo 'selected';}?>>
										<?php echo $show_con->name?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Contact No</label>
								<div class="col-sm-10">
									<input type="text" name="contact_no" class="form-control" value="<?php echo $show->contact_no;?>">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<input type="submit" name="btnSave" class="btn btn-default" value="Save">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>		
		</div>	
	</body>