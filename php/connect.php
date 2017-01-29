<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "barro_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
/**
		* 
		*/
		class Database
		{
			private $con = false;
			private $data = array();
			public function show()
			{
				$sql = "SELECT * FROM tbl_todo";
				$qry = $this->con->query($sql);
				if($qry->num_rows > 0) {
					while($row = $qry->fetch_object()) {
						$this->data[] = $row;
					}
				} else {
					$this->data[] = null;
				}
				$this->con->close();
			}
			public function pop($sql=null)
			{
				if($sql == null) {
					$this->qryPop();
				} else {
					$this->con->query($sql);
					$this->qryPop();	
				}
				$this->con->close();
				return $this->data;
			}
		}		
		
?>