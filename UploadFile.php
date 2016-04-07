<?php
	class UploadFile{
		private $_suporttedfile = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
		public function uploadPhoto($file,$lastid){
			if(in_array($file['type'], $this->_suporttedfile))
			{
				$photo = '';
				if(!empty($file['tmp_name']))
				{
					$tmp_name = $file['tmp_name'];
					$photo = rand(1,1000).$file['name'];

					move_uploaded_file($tmp_name, UPLOADED_PATH.$photo);

					$update = "UPDATE
									student_info
								SET
									photo = '$photo'
									WHERE id = '$lastid' 
									"; 
								mysql_query($update) or die(mysql_errno());
							
				}	
			}
			else{
				echo "This File Is Not Allow";
			}

		}

	}
?>