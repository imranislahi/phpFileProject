<?php
  // echo "your password is ".$_POST["pass"];
if(isset($_POST['submit']))
{
	// print_r($_FILES['myfile'])."<br>";
	if ($_FILES["myfile"]["size"] <= 100000 && $_FILES["myfile"]["type"] == "image/jpeg" || $_FILES["myfile"]["type"] == "image/jpg" || $_FILES["myfile"]["type"] == "image/png") {
		 echo "successful upload";
	}
	else
	{
		echo "not uploaded";
	}
}	

?>