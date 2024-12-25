<?php 

include '../niru_collection.php';


    //Import PHPMailer classes into the global namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/Exception.php';  



            
            //Create a new PHPMailer instance
            $mail = new PHPMailer;

            //Tell PHPMailer to use SMTP
            $mail->isSMTP();
            
            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 0;
            
            //Set the hostname of the mail server
            $mail->Host = 'smtp.gmail.com';
            // use
            // $mail->Host = gethostbyname('smtp.gmail.com');
            // if your network does not support SMTP over IPv6

            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 587;

            //Set the encryption system to use - ssl (deprecated) or tls
            $mail->SMTPSecure = 'tls';

            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;

            //Username to use for SMTP authentication - use full email address for gmail
            $mail->Username = "niranjankakatkar.999@gmail.com";

            //Password to use for SMTP authentication
            $mail->Password = "DontUseMe@7887";

            //1 & 2
            $mail->addAddress('iranjankakatkar.999@gmail.com', '132');                //To Address
           
            $mail->setFrom($rowEmailLog["fromAddress"], $rowEmailLog["fromUser"]);    //From Address
            //$mail->addReplyTo($sendAddress, $sendUsername);           //Reply Address
            $mail->Subject = $rowEmailLog["emailSubject"];     
            
           $msggg="<div>Sample Data</div>";

            //Attachments

        
            

            //Replace the plain text body with one created manually
            $mail->isHTML(true); 
            //$mail->Body    = $sendBod;
            //$mail->AltBody = $sendBod;

            $mail->MsgHTML($msggg);

            //$mail->AltBody(strip_tags($message));
            

            //send the message, check for errors
            if (!$mail->send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;

              
               

            } else {

                echo "Message sent!";

               

            }




 
/*
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
			*/


?> 