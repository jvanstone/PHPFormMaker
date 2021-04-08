<?php
/******
 * This is the main body file
 *
 * @category PHP_Form
 * @package  PHPFormMaker
 * @author   Vanstone Online <jason@vanstoneonline.com>
 * @license  G.P.L Version 3.0 or higher
 * @link     vanstoneonline.com
 */

?>

<main>
    <form id="pfm-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

    <?php
    //Create Variables
    $emailArray = [];
    $xCount = 0;
    $yCount = 1; //USED IN TO NUMBER EMAIL
    $emailSend ='';
    $fnameSend = '';
    $lnameSend = '';
    $newsletter = '';

    //Create Email Array
    if (isset($_POST['submit'])) {
        ?>
    <fieldset>

      <legend>The form has been sent!</legend>

      <p><b>Your free preliminary Canadian immigration assessment form has been sent.</b></p>
      <p>Someone will get back to you within the next 48 hours.</p>

      <p>Below is the data you submitted for review. It has been sent your email for your reference.</p>

        <?php
        //outputs data sent by Post
        foreach ($_POST as $key => $value) {
            //CREATE EMAIL ARRAY
            $emailArray[$key] = $value;
            $xCount++;
         
            if ($key=='First_Name') {
                $fnameSend=substr(strip_tags($value), 0, 255);
                echo '<label>'.$xCount.' '. $value .': </label><div class="results"> '.$value.'</div>';
            } elseif ($key=='Last_Name') {
                $lnameSend=substr(strip_tags($value), 0, 255);
                echo '<label>'.$xCount.' '. $key=str_replace('_', ' ', $key) .': </label> <div class="results">'.$value.'</div>';
            } elseif ($key=='Email' && PHPMailer::validateAddress($key)) {
                $emailSend=$value;
                echo '<label>'.$xCount.' '. $key=str_replace('_', ' ', $key) .': </label> <div class="results">'.$value.'</div>';
            } elseif ($key=='Newsletter') {
                  $newsletter=$value;
                  echo '<label>'.$xCount.' '. $key=str_replace('_', ' ', $key) .': </label> <div class="results">'.$value.'</div>';
            } elseif ($key=='submit' or $key=='g-recaptcha-response' or $key=='MAX_FILE_SIZE'  or $key=='') {
            } else {
                //Creates Confirmation on Website.
                echo '<label>'.$xCount.' '. $key=str_replace('_', ' ', $key) .':</label><div class="results">'.$value.'</div>';
            }
        }

          echo '<label>ID Confirmation:</label><div class="results"> #</div>'; //. $last_id .

        //Create email to be sent
        $html  = '<html><body>';
        $html .= '<h2>Free Preliminary Canadian Immigration Assessment Form</h2>';
        $html .= '<p>Thank you ' .$fnameSend. ' ' .$lnameSend. ' for taking the time to fill out immigration assessment form</p>';
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
       ?>
            </fieldset>
        <?php
    } else {
        ?>
        <div class="">
          <h1>Free Preliminary Canadian Immigration Assessment Form</h2>
          <h5 class="purple"> To work, visit or study in Canada there are procedures which must be met and fees apply.</h1>
          <p><b>Please complete this form to the best of your ability. If a question is not applicable to you, write N/A.</b></p>
          <p>The information collected in this form will be shared with our partner, a reputable Canadian Immigration Services firm, helping people just like you achieve their dream of visiting, living or working in our beautiful country, Canada. Rated Durham Region’s #1 top Immigration firm for a reason, offering personalized service and stay by your side every step of the way. They will review your information to determine which Canadian immigration programs you are currently eligible for. You will be contacted shortly.</p>

          <h2>Job Canada is here to help you! 32+ years' experience helping jobseekers & companies achieve goals!</h2>
          <blockquote>Experts in assisting people in the Canadian market easily find Employment and Career Training, Resume Assistance, Employment specialists and more here to serve you since 2000!</blockquote>

          <div class="required"> * is a required field</div>

        </div>
            
        <?php
        /***
         * Create the form
         * 
         */

        $jsonobj = file_get_contents('formArray.json');
        $json_array = json_decode($jsonobj);
        //var_export($json_array);

        foreach ($json_array as $key => $arrays) {
            echo $label->labelMaker($key);
            $nameID = $label->nameIDMaker($key);
            foreach ($arrays as $array) {
                foreach ($array as $key => $value) {
                    if ($key === 'answers') {
                        echo '<select name="' . $nameID . '">';
                        $answers->createAnswers($array);
                        echo '</select>';
                    } else {
                        $$key = $value;
                    }
                }
                $form->getInputData($nameID, $type, $required);
                echo $form->createInput();
            }
            echo '<br />';
        }
            $form->createButtons();
    } ?>
    </form>
</main>
