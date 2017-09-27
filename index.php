<?php
		require_once('phpmailer/class.phpmailer.php');
		$mail = new PHPMailer();
	    $mail->CharSet =  "utf-8";
	    $mail->IsSMTP();
	    $mail->SMTPDebug = 1;
	    $mail->SMTPAuth = true;
	    $mail->Username = "xxx.xxx@xxx.in";
	    $mail->Password = "xxx";
		$mail->SMTPSecure = 'tls';
	    $mail->Host = "smtp.gmail.com";
	    $mail->Port = "587";

		$mail->setFrom('no-reply@xxx.in', 'xxx');
		$mail->AddAddress("xxx.xxxx@xxxx.in");
        //$mail->AddAddress("djaftab@gmail.com");

		$mail->Subject = "Work with us";
		$mail->Body = "<p style='font-weight:bold;'>Message</p>";
		$mail->ContentType = "text/html";

		
		if($mail->Send()){
			$str = "OK";	
		}else{
			$str = "ERR";	
		}
?>		