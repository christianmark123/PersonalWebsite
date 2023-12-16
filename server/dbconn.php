<?php 
	$conn  = mysqli_connect("localhost","root","nepacmvn1234567","personal_website");
    
	if(mysqli_connect_errno())
	{
		echo "Failed Connection".mysql_connect_error();
	}
?>