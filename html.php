
<HTML>


<HEAD>

<TITLE>

Encrypted Database Connection

</TITLE>
</br>

</br>

		
<div><br><h4>Click any of the below tables to View its stored values from DataBase:</h4></br></div>

<script>
	function changeClicked(id) 
	{ 
		
		document.write ("<?php 
			$sql  = 'select * from encryptedmsg;';
			echo '<div>';
			$result = mysqli_query($link, $sql);
			if (mysqli_num_rows($result) > 0) { 
				echo '<table>'; 
				echo '<tr>'; 
				echo '<th>message</th>'; 
				
				echo '</tr>'; 
				while ($row = mysqli_fetch_array($result)) { 
					echo '<tr>'; 
					echo '<td>'.$row['message'].'</td>'; 
					echo "</tr>"; 
				}	 
				echo '</table>';
				echo '</div>';
				mysqli_free_result($result);
				
    };
		?>")
	}
</script>


<!--- REALOAD PAGE button --->
<button onclick="location.reload(true)">Clear</br></br></button>

<button onclick="changeClicked(this)">Show Values in Table</br></br></button>


<script> document.write("<button onClick='goback()'>Go Back</button>");
	//function tries to brings user back to main page
	function goback(){
			window.history.back();
		}</script>


<?php 

// this will include the index.php file to run
//but will create a recursive approach and will run out of memory
//include 'index.php';

echo "</br>";
echo "</br>";
echo "</br>";
echo "END OF PAGE";

//mysqli_close($conn);

?>

</HEAD>


</HTML>
