<?php
	session_start();
	$email=$_POST['email']; 
	$password=$_POST['password']; 

	include 'dbconn.php';

	$result=mysql_query("SELECT * from users WHERE  mail='$email' AND password='$password'");
	$row=mysql_fetch_array($result);

	if($row['mail']==$email && $row['password']==$password)
	{
		
		$_SESSION['sess'] = $email;
		header("location: index.php");
	}
	else
	{
		"<script type=\"text/javascript\">".
        "alert('Të dhënat nuk janë të sakta');".
        "</script>";
		header('location: login.php');

	}

?>