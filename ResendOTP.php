<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    $randomNumber=$_SESSION['otp'];
   $email= $_SESSION['email'];
    sendemail_verify("$email","$randomNumber");
    $_SESSION['status']="OTP sent successfully";
    
    header("location:VerificationCode.php");

    function sendemail_verify($email,$randomNumber){
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/SMTP.php';
           
           $mail = new PHPMailer(true);
           try {
               //Server settings
               $mail->isSMTP();                                            //Send using SMTP
               $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
               $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
               $mail->Username   = 'iitspl89@gmail.com';                     //SMTP username
               $mail->Password   = 'yywtcjssestdopzb';                               //SMTP password
               $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
               $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
           
               //Recipients
               $mail->setFrom('iitspl89@gmail.com', 'Mailer');
               $mail->addAddress($email);     //Add a recipient
              
       
           
               //Content
               $mail->isHTML(true);                                  //Set email format to HTML
               $mail->Subject = 'OTP'; 
               $email_template="
               <h2>Hello, You have requested for password reset in Sign Language Detection System</h2>
               <br />
               <h2>Use this OTP get verified : {$randomNumber}</h2>
               <br/>
               ";
               $mail->Body    = $email_template;
           
               $mail->send();
               return true;
           } catch (Exception $e) {
              return false;
          //  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
           }
       
       }
    ?>