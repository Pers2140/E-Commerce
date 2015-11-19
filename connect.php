<!DOCTYPE html>
<html>

<h1>Hey There</h1>

<?php
	
	$user="root";
	$pass='';
	$db='eusers';
	
	$db= new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");
	
	echo "hello world";
?>

</html>