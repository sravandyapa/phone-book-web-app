<?php

	$name=$_POST["name"];
	$numbers=$_POST["number"];
	$dob=$_POST["date"];
	$email=$_POST["email"];
	
	echo $name,"\n";
	for($i=0;$i<count($numbers);$i++)
	{
		echo $numbers[$i],"\n";
	}
	for($i=0;$i<count($numbers);$i++)
	{
		echo $email[$i],"\n";
	}
	echo $dob,"\n";

?>