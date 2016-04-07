<?php
	class StdRegistration extends UploadFile{
		public function stdSave($data=array()){

			$name = $data['name'];
			$father_name = $data['father_name'];
			$sex = $data['sex'];
			$hobby = !empty($data['hobby']) ? implode(",", $data['hobby']) : '';
			$address = $data['address'];
			$email = $data['email'];
			$password = md5($data['password']);

			$insert = "INSERT INTO
								student_info
						SET
								name = '$name',
								fathers_name = '$father_name',
								sex = '$sex',
								hobby = '$hobby',
								address = '$address',
								email = '$email',
								password = '$password'

								";
						mysql_query($insert) or die(mysql_errno());
						$laseId = mysql_insert_id();
						$photo = $_FILES['picter'];
						$pho = $this->uploadPhoto($photo,$laseId);		

		}
	}
?>