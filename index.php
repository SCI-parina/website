<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="la, 17 loka 2015 21:41:40 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
    
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  		<div id="header">
			<div id="example">
				<ul>
					<li>B</li>
					<li>L</li>
					<li>O</li>
					<li>C</li>
					<li>K</li>
					<li>W</li>
					<li>A</li>
					<li>R</li>
					<li>S</li>
				</ul>
			</div>
		</div>
		
		<!--<object type="application/x-shockwave-flash" height="378" width="620" data="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" /><param name="flashvars" value="channel=yeetz&auto_play=true&start_volume=25" /></object>-->
		
		<div class="container">
			<div id="wrapper">
				<iframe id="left-chat" frameborder="0" scrolling="no" id="chat_embed" src="http://www.twitch.tv/riotgames/chat"></iframe>
				<iframe id="right-chat" frameborder="0" scrolling="no" id="chat_embed" src="http://www.twitch.tv/riotgames/chat"></iframe>
			</div>
			<div class="embed-container">
				<iframe src="http://www.twitch.tv/riotgames/embed" width="1031" height="580" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
				</iframe>
			</div>
		</div>
  
		
		
		<div id="content">
			<div class="blockicons">
						<div><h3>block 1</h3>
								<div><img src="blockicons/block1.jpg" /></div>
						</div>
						<div><h3>block 2</h3>
								<div><img src="blockicons/block1.jpg" /></div>
						</div>
						<div><h3>block 3</h3>
								<div><img src="blockicons/block1.jpg" /></div>
						</div>
						<div><h3>block 4</h3>
								<div><img src="blockicons/block1.jpg" /></div>
						</div>
						<div><h3>block 5</h3>
								<div><img src="blockicons/block1.jpg" /></div>
						</div>
						<div><h3>block 6</h3>
								<div><img src="blockicons/block1.jpg" /></div>
						</div>
						<div><h3>block 7</h3>
								<div><img src="blockicons/block1.jpg" /></div>
						</div>
						<div><h3>block 8</h3>
								<div><img src="blockicons/block1.jpg" /></div>
						</div>
						<div><h3>block 9</h3>
								<div><img src="blockicons/block1.jpg" /></div>
						</div>					
				</div>
			 <div class="info">
			 	  <h2> What is this about</h2>				  
				  <p>The Block wars is an interactive game with two teams playing against each other through the chat windows. The players decide what blocks they will send out.</p>			 
			 </div>	
			 
		</div>

		<?php
		$servername = "vituttaa.soikkelionhomo.pw";
		$username = "parina";
		$password = "sciparina";
		$dbname = "sciparina";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
     		die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT nimi, rahat, voitot, pelatut_pelit FROM kayttaja";
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



  </body>
</html>