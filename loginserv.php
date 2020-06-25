<?php

	$invalidone="";

	if(isset($_POST['Login'])) 
	{
		if(empty($_POST['username']) || empty($_POST['password']))
		{
			$invalidone="enter proper values";
		}
		else
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$conn = mysqli_connect('localhost','root','');


			$db = mysqli_select_db($conn,'quizdb');


			$query = mysqli_query($conn, "SELECT * FROM user WHERE password='$password' AND username='$username'");

	            $rows = mysqli_num_rows($query);

	            if($rows == 1){
	               header("Location: Paper.php");


	            	//$invalidone="Login sucessfull";
	            }
	            else{
	    	 	
	    	    	//header("Location: #.php");
	                $invalidone="please signup first";
	    	    }
	    	      mysqli_close($conn);
		

			}
		}
	

?>