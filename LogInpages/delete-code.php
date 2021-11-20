<?php

	/*--- We have created a variables to display error message ------*/
	$error = "";

	if (isset($_POST["btn_delete"]))
	{
		/*-- we included connection files--*/
		include "connection.php";

		$image_id = $_POST["img-id"];
		
		$mysqli = new mysqli($sname,$uname,$password,$db_name);

		if ($mysqli -> connect_errno) {
		  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		  exit();
		}

		$result = mysqli_connect($sname, $uname, $password) or die("Connection error: ". mysqli_error());
		mysqli_select_db($result, $db_name) or die("Could not Connect to Database: ". mysqli_error());
		$res=mysqli_query($result,"SELECT * FROM image_table where id = $image_id");
		$row=mysqli_fetch_array($res);
	
		if($image_id == ""){
			$error = "Please enter the Image id.";
		}
		else
		{
			$result = mysqli_connect($sname, $uname, $password) or die("Connection error: ". mysqli_error());
			mysqli_select_db($result, $db_name) or die("Could not Connect to Database: ". mysqli_error());
			mysqli_query($result,"delete from image_table where id = '" . $image_id ."'") or die("Could not Connect to table: ". mysqli_error());
			
			//this code will delete image from folder
			unlink($row['img_path']);
			$error = "<p align=center>Image ".$row["img_path"].""."<br /> has been deleted from table.</p>";
		}
	}

	?>

