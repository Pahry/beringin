<?php  
	$db = mysql_connect("localhost", "root", "", "beringin");

	/**
	 * 
	 */
	class barang 
	{
		public $koneksi;
		function __construct($db)
		{
			$this->koneksi = $db;
		}

		function tampil_data()
		{
			$data=$this->koneksi->query("SELECT * FROM user");
		}
	}
$barang = new barang($db);
?>