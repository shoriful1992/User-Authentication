<?php
	class DatabaseConnection{
		public function __construct()
		{
			try{
				$server_conn = mysql_connect("localhost", "root", "");
				if(!mysql_select_db("registration", $server_conn)){
					throw new Exception(mysql_errno());
					
				}
			}
			catch (Exception $e) {
    		echo 'Caught exception: ',  $e->getMessage(), "\n";
    		}
		}

	}
?>