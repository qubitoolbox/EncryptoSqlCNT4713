<?php
//include 'bootstrap.min.css';


	//these settings need to be set user specific
	//for this app to run
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "encrypteddb";
	$link = mysqli_connect("$dbhost", "$dbuser", "$dbpass")or die("<h1>Try again, Connection failed!</h1> "); 
    
	$conn = mysqli_select_db($link, $db);

if($conn){
	echo "<H3>Connected Successfully to DB</br></H3>";
	echo "<H3>Refreshing Page can clear queries! </br></H3>";
	}
else{
	echo "<h1>Try again, Connection failed!</h1>", "</br>";
	echo "<h3>OR make sure Password set correctly.</h3></br>";
	}
	
	echo "</br>";
	//global queries
	$sql3;
	$sql4;
	$sql5;
	$sql6;
	$sql7;
	#$decrypt;
	// include the files for the web app
	include 'bootstrp.php';
	include 'forms.php';
	
	include 'html.php';
?>
<html> 	</html>
