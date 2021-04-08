<?php namespace PHPFormMaker\EmailMaker;

class EmailMaker
{
     //Create Variables
    private $emailArray = [];
    private $xCount = 0;
    private $yCount = 1; //USED IN TO NUMBER EMAIL
    private $emailSend ='';
    private $fnameSend = '';
    private $lnameSend = '';
    private $newsletter = '';

    public function createEmail($postInfo)
    {
        //outputs data sent by Post
        foreach ($_POST as $key => $value) {
            //CREATE EMAIL ARRAY
            $emailArray[$key] = $value;
            $xCount++;
            if ($key=='First_Name') {
                $fnameSend=substr(strip_tags($value), 0, 255);
                echo '<label class="label">'.$xCount.' '. $key=str_replace('_', ' ', $key) .': </label><div class="results"> '.$value.'</div>';
            } elseif ($key=='Last_Name') {
                $lnameSend=substr(strip_tags($value), 0, 255);
                echo '<label class="label">'.$xCount.' '. $key=str_replace('_', ' ', $key) .': </label> <div class="results">'.$value.'</div>';
            } elseif ($key=='Email' && PHPMailer::validateAddress($key)) {
                $emailSend=$value;
                echo '<label class="label">'.$xCount.' '. $key=str_replace('_', ' ', $key) .': </label> <div class="results">'.$value.'</div>';
            } elseif ($key=='Newsletter') {
                $newsletter=$value;
                echo '<label class="label">'.$xCount.' '. $key=str_replace('_', ' ', $key) .': </label> <div class="results">'.$value.'</div>';
            } elseif ($key=='submit' or $key=='g-recaptcha-response' or $key=='MAX_FILE_SIZE'  or $key=='') {
            } else {
                //Creates Confirmation on Website.
                echo '<label class="label">'.$xCount.' '. $key=str_replace('_', ' ', $key) .':</label><div class="results">'.$value.'</div>';
            }
        }

        
        echo '<label class="label">ID Confirmation:</label><div class="results"> #</div>'; //. $last_id .

        //Create email to be sent
        $html  = '<html><body>';
        $html .= '<h2>Free Preliminary Canadian Immigration Assessment Form</h2>';
        $html .= '<p>Thank you '.$fnameSend.' '.$lnameSend.' for taking the time to fill out immigration assessment form</p>';
        $html .= '<p>Someone will get back to you within the next 48 hours.';
        $html .= '<p>Thank you! ~ JobCanada.org</p>';

        $html .= '<table rules="all" cellpadding="10">';

        foreach ($emailArray as $key => $row) {
            if ($key=='submit' or $key=='g-recaptcha-response' or $key=='MAX_FILE_SIZE' or $key=='') {
            } else {
                $html .= '<tr><td cellpadding="10"> '.$yCount.'</td><td cellpadding="10"> '. $key=str_replace('_', ' ', $key) .':</td><td cellpadding="10">'.$row .'</td></tr>';
                $yCount++;
            }
        }
        $html .= '</table>';
        $html .= '</body></html>';

        //require ('oldemailsetup.php');

        $msg ='';
        $content = $html;
        // if (array_key_exists('userfile', $_FILES)) {
            // First handle the upload
            // Don't trust provided filename - same goes for MIME types
            // See http://php.net/manual/en/features.file-upload.php#114004 for more thorough upload validation
            // Extract an extension from the provided filename
            // $ext = PHPMailer::mb_pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
            // Define a safe location to move the uploaded file to, preserving the extension
        //  $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['userfile']['name'])) . '.' . $ext;

        // if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                // Upload handled successfully

                    //Create a new PHPMailer instance
                    $mail = new  PHPMailer\PHPMailer\PHPMailer();
                    $mail->isSMTP();
                    $mail->Host = $emailServer;
                    $mail->Username = $emailUser;
                    $mail->Password = $emailPassword;
    
                    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
                    $mail->Port = $emailPort;
                    //Set the encryption mechanism to use - STARTTLS or SMTPS
                    $mail->SMTPSecure =  PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    
                    //Whether to use SMTP authentication
                    $mail->SMTPAuth = true;
                  
                    //Set who the message is to be sent from
                    $mail->setFrom('jason@vanstoneonline.com', 'PHPFormMaker');
                    //Set an alternative reply-to address
                    //$mail->addReplyTo('jason.vanstone.ca@gmail.com', 'PHPFormMaker');
                    //Set who the message is to be sent to
                    $mail->addAddress($emailSend, $fnameSend . ' ' . $lnameSend, 0);
                    $mail->addAddress('test@vanstoneonline.com');
                    //$mail->addAddress('jason.vanstone.ca@gmail.com');
                    //Set the subject line
                    $mail->isHTML(true);
                    //$mail->CharSet = "text/html; charset=UTF-8;";
                    $mail->CharSet =  PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
    
                    $mail->Subject = 'PHPFormMaker: # ' . $fnameSend . ' ' . $lnameSend;
                    //Read an HTML message body from an external file, convert referenced images to embedded,
                    //convert HTML into a basic plain-text alternative body
                    $mail->Body = $content;
                    //Replace the plain text body with one created manually
    
                   // if (!$mail->addAttachment($uploadfile, $last_id . 'Resume')) {
                                //$msg .= 'Failed to attach file ' . $_FILES['userfile']['name'];
                    //}
                    if (!$mail->send()) {
                        $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
                        echo $msg;
                    } else {
                        $msg .= 'Message sent!';
                        //echo $msg;
                    }
                  
            //} else {
            //    $msg .= 'Failed to move file to ' . $uploadfile;
        // }
    // }
    }
}
