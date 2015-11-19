		<?php
		$servername = "vituttaa.soikkelionhomo.pw";
		$username = "parina";
		$password = "sciparina";
		$dbname = "sciparina";
		
		$name = $_POST['name'];
			
	
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
     		die("Connection failed: " . $conn->connect_error);
		} 
			

		$sql = "SELECT nimi, rahat, voitot, pelatut_pelit FROM kayttaja WHERE nimi LIKE '%" .$name;
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
     		// output data of each row
     		while($row = $result->fetch_assoc()) {
        		echo "<br> Name: ". $row["nimi"]. " - Money: ". $row["rahat"]. " - Winnings: " . $row["voitot"] . " - Games Played ". $row["pelatut_pelit"] . " <br>";
     		}
		} else {
     		echo "No results";
		}

		$conn->close();
		?>  