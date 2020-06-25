<?php

	$invalidtwo="";

	if (isset($_POST['SignUp'])) 
	{
		if(empty($_POST['username']) || empty($_POST['password']))
		{
			$invalidtwo = "Insert data";
		}
		else
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$conn = mysqli_connect('localhost','root','');


			$db = mysqli_select_db($conn,'quizdb');

			$query = "INSERT INTO `user`(`username`, `password`) VALUES ('$username' , '$password')";

   			if(!mysqli_query($conn , $query))
				{
					$invalidtwo="not inserted";
				}

				else{
					$invalidtwo="inserted sucessfully";
					
				}


			
		  

 			mysqli_close($conn);
		}
	}
?>