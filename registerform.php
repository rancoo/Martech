<?php 
	include 'dbconn.php';
	
		$emri=$_POST["firstname"];
		$mbiemri=$_POST["lastname"];
		$email=$_POST["email"];
		$company=$_POST["company"];
		$adresa=$_POST["address_1"];
		$qyteti=$_POST["city"];
		$postcode=$_POST["postcode"];	
		$password=$_POST["password"];


		if (isset($emri) && $emri!=="" ) 
		{
			$query="INSERT INTO users(emri,mbiemri,mail,company,address,city,post_code,password) VALUES ('$emri','$mbiemri','$email','$company','$adresa','$qyteti','$postcode','$password')";
			$rez=mysql_query($query)or die(mysql_error());
			mysql_close();
		
		}
		 echo "<script type=\"text/javascript\">".
        "alert('U regjistruat me sukses');".
        "</script>";
        header('location: login.php');



?>

