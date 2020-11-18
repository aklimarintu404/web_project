<?php
session_start();
if(isset($_POST['submit']))
{
	   $name = $_POST['name'];
	   $email = $_POST['email'];
	   $number =$_POST['number'];
	   
	   
	   
	   if(empty($name)||empty($email)||!isset($_POST['number']))
	   {
		   echo "null submission";
	   }
	   
		
  
		setcookie('name', $name, time()+36000, '/');
		setcookie('email', $email, time()+36000, '/');
		setcookie('number', $number, time()+36000, '/');
		
		
  
		header('location:homepage.php');
	  }
  
	
	else{
	  header("location: homepage.php");
	}
?>