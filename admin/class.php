<?php  
	
	/**
	 * 
	 */
	class database 
	{
		var $host		= "localhost";
		var $user 		= "root";
		var $pass		= "";
		var $db 		= "beringin";
		 		

		function __construct()
		{
			mysqli_connect($this->host, $this->user, $this->pass);
			mysqli_select_db($this->db);
		}

		function tampil_data()
		{
			
		}
	}

?>