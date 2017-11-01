<?php

$servername="127.0.0.1";
$host='localhost';
$username='root';
$password='';
$dbname='tp';

$connect = new mysqli("$servername",$username,$password,$dbname);  


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pswd=$_POST['pswd'];
$c_pswd=$_POST['c_pswd'];

if(!($pswd==$c_pswd))
{
	echo "<script>alert('Passwords do not match');</script>";
	echo "<script>window.location.href='signup.html';</script>";
}
else
{
	$q1 = "INSERT INTO sigup(firstname,lastname,email,psswd,conpsswd) values ('$fname','$lname','$email','$pswd','$c_pswd')";
	if ($connect->query($q1) === TRUE) 
	{
		echo "<br>"."New record created successfully";
		echo "Click to Continue...";
		echo "<button type='submit'>Continue</button>";
		echo "<script>window.location.href='signup.html';</script>";
	}
	else 
		echo "Error: " . $q1 . "<br>" . $connect->error;
}

?>
