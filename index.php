<?php
	require_once("header.php");
?>
<body>
<table width="100%" class="table table-striped">
	<thead>
	<tr>
		<th>Ser</th>
		<th>Contact Type</th>
		<th>Contact No</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
		<a href="contact.php" class="btn btn-default">Contact Add</a>
		<?php
			@$member_id = $_REQUEST['member_id'];
			if(!empty($member_id))
			{
				$delete = "DELETE FROM contact_list WHERE id = $member_id";
				$memResult = mysql_query($delete);
			}
			$ind = new ContactList();
			$result = $ind->getList();
			$ser = 1;
			while($show = mysql_fetch_object($result))
			{				
		?>
			<tr>
				<td><?php echo $ser++;?></td>
				<td><?php echo $show->name;?></td>
				<td><?php echo $show->contact_no;?></td>
				<td><?php echo $show->created_on;?></td>
				<td><?php echo $show->update_on;?></td>
				<td>
					<a class="btn btn-primary" href="edit.php?member_id=<?php echo $show->id;?>">Edit</a>
					<a class="btn btn-danger" href="index.php?member_id=<?php echo $show->id;?>" 
					onclick="return confirm('Are You Sure you Want Delete this')">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
</body>