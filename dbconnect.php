<?php
class DBController
{
	private $host = "localhost:3307";
	private $user = "root";
	private $password = "root";
	private $database = "sushiheaven";
	private $conn;

	function __construct()
	{
		$this->conn = $this->connectDB();
	}

	function connectDB()
	{
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}

	function runQuery($query)
	{
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}

	function insertQuery($query)
	{
		$result = mysqli_query($this->conn, $query);
	}

	function getQuery($query)
	{
		$result = mysqli_query($this->conn, $query);
		$row=mysqli_fetch_assoc($result);
		return $row;
	}

	function numRows($query)
	{
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;
	}
}
?>
