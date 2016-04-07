<?php
	class StdLogin{
		public function stdLogin($data){

			$email = $data['email'];
			$password = md5($data['password']);
			$sqlValidation = "SELECT * FROM student_info WHERE email = '$email' AND password = '$password'";
			$result = mysql_query($sqlValidation) or die(mysql_errno());
			$numrow = mysql_num_rows($result);
			if($numrow > 0)
			{
				$show = mysql_fetch_array($result);
				$_SESSION['auth_id'] = $show['id'];
				$_SESSION['auth_email'] = $show[email];
				header("location:contact.php?msg=successfull log in");
			}
			else
			{
				header("location:login.php?msg=Unauthorized Log In");
			}	
		}

	}
?>