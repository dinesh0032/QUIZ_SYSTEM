<?php
	include 'Result.php'
?>


<?php
	$conn = mysqli_connect('localhost','root','');
	/*	if(!$conn){
		echo "localhost not conected";
	}
	else{
		echo "localhost sucessfully connected";
	}  */



	$db = mysqli_select_db($conn, 'quizdb');
	/*	if(!$db){
		echo "database not conected";
	}
	else{
		echo "database sucessfully connected";
	}  */


?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Paper_sheet</title>
	</head>
	<body>

		<form action="Result.php" method="post">
		<h1>Exam Paper Take it serious</h1>

		<?php  for($i=1; $i<4; $i++)
		{
			?>

		<?php
			$query=mysqli_query($conn,"SELECT * FROM questions WHERE qusid=$i");
			while ($rows= mysqli_fetch_array($query)) {
				?>
					
					
					
					<h3> <?php  echo $rows['question']  ?>   </h3>


					


		<?php		
			}
		?>



		<?php
				 $q = mysqli_query($conn,"SELECT * FROM answers WHERE ans_id=$i");

				while ($rows= mysqli_fetch_array($q)) {
				?>
					
					
					
					<h4><input type="radio" name="option[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>"> <?php  echo $rows['answer'] ; ?>   </h4>

			<?php
		}
		?>

		<?php
	}
	?>

		<div>
			<input type="submit" name="Submit" Value="Submit">
		</div>

		</form>
	</body>

</html>