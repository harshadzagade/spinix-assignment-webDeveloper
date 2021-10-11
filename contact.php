<?php
	if(isset($_POST['sub']))
	{
		session_start();
		
		$fname=$_POST['fname'];
    	$lname=$_POST['lname'];
    	$cname=$_POST['cname'];
		$email=$_POST['email'];
    	$cn=$_POST['contactno'];
		$option = $_POST['option'];
		$message=$_POST['message'];
		
		include_once "database.php";
		
		$sql="INSERT INTO `contact`(`first_name`, `last_name`, `email`, `company_name`, `project_type`, `contact`, `message`) VALUES ('$fname','$lname','$email','$cname','$option','$cn','$message')";
		$res=mysqli_query($conn,$sql);
		
		if($res)
		{
			print "Message Send Succesful";
		}
		else
		{
			print("Error! ".mysqli_error($conn));
		}
			
			
	}//end of if isset

?>
	