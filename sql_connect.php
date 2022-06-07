<?php

$id='1004';
$name='Bijoy';
$address='Dhaka';
$phone='01723456789';

$connection= mysqli_connect('localhost','root','','university');

if($connection->connect_error)
{
	echo 'not successful';
}
else 
{
	/*echo 'successful';
	$sql="insert into `information` values('1005','Bijoy','Dhaka','01723456789')";
	$set=$connection->query($sql);
	
	if($set)
	{
		echo '<br> value is set perfectly<br>';
	}*/
	
	$row = mysqli_fetch_assoc($set);
	echo $row;
	
}
	


?>