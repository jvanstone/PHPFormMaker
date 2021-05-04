<?php namespace PHPFormMaker\FormMaker;

use PHPMailer\PHPMailer\PHPMailer;

class EmailMaker
{
    //Create the title variable if you want to use it here
    public $title;
    public $fname;
    public $lname;
    //public $age;
    //Create the address variable if you want to use it here
    // public $address;
  
     /*  function __construct($title, $firstName, $lastName)  
      {
        $this->title    = $title;
        $this->fname    = $firstName;
        $this->lname    = $lastName;
        // $this->age      = $age;
        //$this->address  = $address;
      }
   */

    public function getFullName()
    {
        return $this->title . ' ' . $this->fname . ' ' . $this->lname;
    }
   
	public function createEmail($getPost)
	{
		$this->getPost = $getPost;
        $emailArray = [];
        $xCount = 0;
        $yCount = 1; //USED IN TO NUMBER EMAIL
        $emailSend ='';
        
      
		$html  = '<html><body>';
        $html .= '<h2>PHPFormMaker Form Results</h2>';
        $html .= '<p>Thank you ' . $fullName . ' for taking the time to fill out immigration assessment form</p>';
        $html .= '<p>Someone will get back to you within the next 48 hours.';
        $html .= '<p>Thank you! ~ JobCanada.org</p>';

        $html .= '<table rules="all" cellpadding="10">';

        foreach ($this->getPost as $key => $row) {
            if ($key=='submit' or $key=='g-recaptcha-response' or $key=='MAX_FILE_SIZE' or $key=='') {
            } else {
                $html .= '<tr><td cellpadding="10"> '.$yCount.'</td><td cellpadding="10"> '. $key=str_replace('_', ' ', $key) .':</td><td cellpadding="10">'.$row .'</td></tr>';
                  $yCount++;
            }
        }
        $html .= '</table>';
        $html .= '</body></html>';

		return $html;
	}

        
}

class EmailSender extends EmailMaker
{

    function __construct($title, $firstName, $lastName)   
    {
        parent::__construct($title, $firstName, $lastName);
    }

    function sendEmail()
    {
        include 'config.php';
        $msg = '';
        
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
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = $emailServer;
                $mail->Username = $emailUser;
                $mail->Password = $emailPassword;

                //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
                $mail->Port = $emailPort;
                //Set the encryption mechanism to use - STARTTLS or SMTPS
                $mail->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;

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
                $mail->CharSet =  PHPMailer::CHARSET_UTF8;

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


//`childClass` constructor is called here.
//The first line (`parent::__construct`) will pass the variables to the parentClass. There they are set to the right variables.

// echo $instance->getFullName();
//Compiler tries to find the method `getFullName()` in `childClass`. It doesn't exist.
//Compiler sees it inherits from `parentClass` so it's going to search the method `getFullName()` in `parentClass`
//It does exist. Since we setted the variables during the creation of the `$instance` object (through the constructor) this function will return the right values.
