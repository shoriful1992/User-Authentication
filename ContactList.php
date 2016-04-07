<?php
	class ContactList{
		public function conAdd($data){
			$user_id = $_SESSION['auth_id'];
			$contact_type = $data['contact_name'];
			$contact_no = $data['contact_no'];

			$insert = "INSERT INTO
									contact_list
						SET	
									user_id = '$user_id',
									contact_type = '$contact_type',	
									contact_no = '$contact_no',
									created_on = now(),
									update_on = now()	
									";
							mysql_query($insert)or die( mysql_error());
							if($insert)
							{
								echo '<script type="text/javascript">
									window:location="index.php?msg=Contact Add Succfully"
								</script>';
							}
							else
							{
								echo '<script type="text/javascript">
									window:location="index.php?msg=Contact Not Add"
								</script>';
							}	

		}
		public function conEdit($data){

			$user_id = $_SESSION['auth_id'];
			$contact_type = $data['contact_name'];
			$contact_no = $data['contact_no'];
			$member_id = $data['member_id'];

			$update = "UPDATE
							 contact_list
						SET	
							 user_id = '$user_id',
							 contact_type = '$contact_type',	
							 contact_no = '$contact_no'

							 WHERE id = $member_id
							";
						mysql_query($update)or die( mysql_error());	
						if($update)
							{
								echo '<script type="text/javascript">
									window:location="index.php?msg=Update Contact"
								</script>';
							}
							else
							{
								echo '<script type="text/javascript">
									window:location="index.php?msg=Contact Not Update"
								</script>';
							}	
		}

		public function getList(){

			$select = "SELECT 
							contact_list.id,
							contact_type.name,
							contact_list.contact_no,
							contact_list.created_on,
							contact_list.update_on
						FROM
							contact_list
							LEFT JOIN contact_type ON contact_list.contact_type = contact_type.id
							WHERE user_id = '$_SESSION[auth_id]'				
							";
			return $result = mysql_query($select);	
		}
	}
?>