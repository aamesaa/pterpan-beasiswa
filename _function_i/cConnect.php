<?php
class cConnect {
	private $dbHost  = "localhost";
	private $dbUser  = "root";
	private $dbPass  = "";
	private $dbName  = "db_beasiswa";

	private $dbHost2  = "localhost";
	private $dbUser2  = "root";
	private $dbPass2  = "";
	private $dbName2  = "db_user_sys";

	private $dbHost3  = "";
	private $dbUser3  = "";
	private $dbPass3  = "";
	private $dbName3  = "";

	private $dbHost4  = "";
	private $dbUser4  = "";
	private $dbPass4  = "";
	private $dbName4  = "";

	function goConnect() {
		$conn = mysqli_connect($this->dbHost,$this->dbUser,$this->dbPass,$this->dbName);
		$GLOBALS["conn"] = $conn;
		//return $conn;
	}

	function goConnect2() {
		$conn = mysqli_connect($this->dbHost2,$this->dbUser2,$this->dbPass2,$this->dbName2);
		$GLOBALS["conn"] = $conn;
	}

	function goConnect3() {
		$conn = mysqli_connect($this->dbHost3,$this->dbUser3,$this->dbPass3,$this->dbName3);
		$GLOBALS["conn"] = $conn;
	}
	function goConnect4() {
		$conn = mysqli_connect($this->dbHost4,$this->dbUser4,$this->dbPass4,$this->dbName4);
		$GLOBALS["conn"] = $conn;
	}

	function closeConnect() {


	}
}
?>
