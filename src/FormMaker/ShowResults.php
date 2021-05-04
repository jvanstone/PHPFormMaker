<?php namespace PHPFormMaker\FormMaker; 

use PHPMailer\PHPMailer\PHPMailer;

class ShowResults
{
    public function getResults($getPost) 
    {
        $this->getPost = $getPost;
        $xCount = 0;

        foreach ($this->getPost as $key => $value) {
            //CREATE EMAIL ARRAY
            $emailArray[$key] = $value;
            $xCount++;
         
            if ($key=='first_name') {
                $firstName = substr(strip_tags($value), 0, 255);
                echo '<label>'.$xCount.') '. $key=str_replace('_', ' ', $key) .': </label><div class="results"> '.$value.'</div>';
            } elseif ($key=='last_name') {
                $lnameSend=substr(strip_tags($value), 0, 255);
                echo '<label>'.$xCount.') '. $key=str_replace('_', ' ', $key) .': </label> <div class="results">'.$value.'</div>';
            } elseif ($key=='email'  && PHPMailer::validateAddress($key)  ) {
                $emailSend=$value;
                echo '<label>'.$xCount.' '. $key=str_replace('_', ' ', $key) .': </label> <div class="results">'.$value.'</div>';
            } elseif ($key=='Newsletter') {
                  $newsletter=$value;
                  echo '<label>'.$xCount.' '. $key=str_replace('_', ' ', $key) .': </label> <div class="results">'.$value.'</div>';
            } elseif ($key=='submit' or $key=='g-recaptcha-response' or $key=='MAX_FILE_SIZE'  or $key=='') {
            } else {
                //Creates Confirmation on Website.
                echo '<label>'.$xCount.') '. $key=str_replace('_', ' ', $key) .':</label><div class="results">'.$value.'</div>';
            }
        }    
    }
}
