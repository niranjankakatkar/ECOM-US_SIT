<?php 

include '../niru_collection.php';


   
echo "__AJAX-";

	$full_name = $_POST['full_name'];
	$email=$_POST['email'];
	$mobile_no=$_POST['mobile_no'];
    $password=$_POST['password'];
    $user_type=$_POST['user_type'];
	$flag="0";
	$key_=generateRandomCHAR_INT(10);
	
	$url_id="";
  
	if($url_id=="")
	{
		$sql="INSERT INTO user_master(full_name,email,mobile_no,password,user_type,token_key) VALUES('$full_name','$email','$mobile_no','$password','$user_type','$key_')";
        if($conn->query($sql))
		{
            echo "Done"; 
		}
	}else{
		echo "error";
	}										
			


?> 