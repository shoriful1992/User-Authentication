<?php
	require_once('authCheck.php');
	require_once("header.php");
	
	
	if(isset($_POST['btnSave']))
	{
		$con = new ContactList();
		$con->conAdd($_POST);	
	} 
?>
<body>
	<div class="container">
		<div class="row col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Contact Form
					</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" method="post" >
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Contact Type</label>
							<div class="col-sm-10">
								<select name="contact_name" class="form-control">
									<option value="">Select Type</option>
									<?php
										$select = "SELECT * FROM contact_type";
										$result = mysql_query($select);
										while($show = mysql_fetch_object($result))
										{

									?>
									<option value="<?php echo $show->id;?>"><?php echo $show->name?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Contact No</label>
							<div class="col-sm-10">
								<input type="text" name="contact_no" class="form-control" id="inputPassword3" >
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