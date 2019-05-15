<?php 

$env = fopen('.env', r);
if (!$env) {
	die ('Error opening .env');
}
else {
	while ($line = fgets($env)) {
		putenv(trim($line));	
		echo getenv($line);	
	}
	fclose($env);
}

class db {

	public $conn;
	
	function __construct()
	{
		$this->conn = mysqli_connect(getenv('DB_HOST'),getenv('DB_USER'),getenv('DB_PASS'),getenv('DB_NAME'));
		if (!$this->conn) {
			//die ($this->conn->error);
		}
	}

	function showTables(){
		$query = $this->conn->prepare('SHOW tables');
		$query->execute();
		$result = $query->get_result();

		echo '<table class="table text-center table-bordered table-hover bg-light">  
				 <thead>
				 <tr>
				 <th>Table Name</th>
				 <th>Actions</th>
				 </tr>
				 </thead>
				 <tbody>';

		while ($row = $result->fetch_assoc()) {
				 	echo '<tr><td>'.$row['Tables_in_'.getenv('DB_NAME')].'</td><td> <a href="#"  class="btn btn-primary">View</a> <a href="#" class="btn btn-primary">Delete</a></td></tr>';
				 }		 
				 
		echo '</tbody>';		 
		echo '</table>';

	}
}

$db = new db();


 ?>