<?php
session_start();
if(!isset($_SESSION['username']))
{
	//header('Location:index.php');
}

$conn=mysqli_connect('localhost','root','');

mysqli_select_db($conn,'quizdb');



		
   if(!isset($_POST['submit']))
   {
  		if(!empty($_POST['option']))
     	{
  			$count =count($_POST['option']);

 		 	echo " you have selected ".$count.'options out of 3';

		}
	}
?>





