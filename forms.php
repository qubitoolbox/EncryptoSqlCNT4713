<div>
		
		
		<!--- 
		
			Creation of forms that will store values in array, to then 
			process as query params
			Not too familiar with CSS therefore omitting a visual design.
		
		--->
		
		
		
		<form  method='POST' action=''  id='searchform'> <br>ENCRYPT MESSAGE</br>
	      <input  type='text' name='q1' placeholder='Query to encrypt'> 
	      <input  type='submit' name='encrypt' value='encrypt'>
	    </form>
		
		
		
</div>

<!---   --->
<?php

			$salt = '';
					
			if(isset($_POST['q1'])){
				
				$q1 = md5($_POST["q1"]);
				$sqlins = "INSERT INTO encryptedmsg VALUES('$q1');";
				$rsesultsInfo = mysqli_query($link, $sqlins);
				echo "Table Updated Successfully";
			}
			
			
?>
