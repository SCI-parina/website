		<?php
		$servername = "vituttaa.soikkelionhomo.pw";
		$username = "parina";
		$password = "sciparina";
		$dbname = "sciparina";
		
		$url = $_POST['url'];	
	
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
     		die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "INSERT INTO kuva (id, url, date) VALUES (DEFAULT, '$url', NOW())";

		if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
		?>  
































