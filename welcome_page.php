<!DOCTYPE html>
<html>

<h1>Hey There</h1>

<?php
	
	$first_name=$_POST["first_name"];
	
	
	if($first_name==" "{
		
		echo "not long enough";
	
	}
	else{
		
		echo $_POST["first_name"];
	}
	
	
	
	?>

</html>