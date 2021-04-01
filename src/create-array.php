<?php
/****
 * PHPFormMaker
 *
 * @category PHP_Form
 * @package  PHPFormMaker
 * @author   Vanstone Online <jason@vanstoneonline.com>
 * @license  G.P.L Version 3.0 or higher
 * @link     https://vanstoneonline.com
 */

  //Create Variables
  $emailArray = [];
  $xCount = 0;
  $yCount = 1; //USED IN TO NUMBER EMAIL
  $emailSend ='';
  $fnameSend = '';
  $lnameSend = '';


 //Create Email Array
if (isset($_POST['submit'])) {

    ?>

 <fieldset>

  <legend>The form has been sent!</legend>

    <p><b>Your free preliminary Canadian immigration assessment form has been sent .</b></p>
    <p>Someone will get back to you within the next 48 hours.</p>


    <?php
    //outputs data sent by Post
    foreach ($_POST as $key => $value) {

        //CREATE EMAIL ARRAY
        $emailArray[$key] = $value;
        $xCount++;

        if ($key=='First_Name') {
            $fnameSend=$value;
            echo '<p>'. $xCount . ' '. $key=str_replace('_', ' ', $key)  . ': '. $value . '</p>';
        } elseif ($key=='Last_Name') {
            $lnameSend=$value;
            echo '<p>'. $xCount . ' '. $key=str_replace('_', ' ', $key)  . ': '. $value . '</p>';
        } elseif ($key=='Email') {
            $emailSend=$value;
            echo '<p>'. $xCount . ' '. $key=str_replace('_', ' ', $key)  . ': '. $value . '</p>';
        } else {
            echo '<p>'. $xCount . ' '. $key=str_replace('_', ' ', $key)  . ': '. $value . '</p>';
        }
        /* foreach($value as $k => $v)
        {
        echo '<p>'. $xCount . ' '. $k==str_replace('_',' ',$k)  . '</p>';
        echo '<p>'. $v . '</p>';
        echo '<hr />';
        }
            */
    }

    echo '</fieldset>';

    //Create email to be sent
    $html  = '<html><body>';
    $html .= '<h2>Free Preliminary Canadian Immigration Assessment Form</h2>';
    $html .= '<p>Thank you '. $fnameSend . ' '. $lnameSend . ' for taking the time to fill out the form</p>';
    $html .= '<p>Here is the data you have inputted. It has been sent your email: '. $emailSend . ' for your reference . ';
    $html .= '<table rules="all" cellpadding="10">';

    foreach ($emailArray as $key => $row) {
        $html .= '<tr><td cellpadding="10"> '. $yCount . '</td><td cellpadding="10"> '. $key=str_replace('_', ' ', $key)  . ':</td><td cellpadding="10">'. $row  . '</td></tr>';
        $yCount++;
    }
    $html .= '</table>';
    $html .= '<p>Someone will get back to you within the next 48 hours . ';
    $html .= '<p>Thank you! ~ JobCanada.org</p>';
    $html .= '</body></html>';


    //$to = 'contact@jobcanada.org';
    $to = $admin_email . $emailSend;
    $subject = 'Employment Form from '. $fnameSend . ' '. $lnameSend;
    $txt = $html;
    $headers = 'From: inquire@jobcanada.org' .  "\r\n";
    $headers .= "MIME-Version:1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to, $subject, $txt, $headers);


    $_POST = array();


    if (!mail($to, $subject, $txt, $headers)) {
        ?>
    <fieldset>

        <legend>There was an error sending your form.</legend>

        <p>Please double check you have filled out all the information correctly and try again.</p>

        </fieldset>
            <?php
    } else {

        //VERIFY THE EMAIL DATA
        /*
        echo $to . '<br />';
        echo $subject . '<br />';
        echo $txt . '<br />';
        echo $headers . '<br />';
        */
    }

} else {
   ?>
    <fieldset>
    <legend>Free Preliminary Canadian Immigration Assessment Form</legend>
    <h5 class="purple"> To work, visit or study in Canada there are procedures which must be met and fees apply.</h5>
    <p><b>Please complete this form to the best of your ability. If a question is not applicable to you, write N/A.</b></p>
    <p>The information collected in this form will be shared with our partner, a reputable Canadian Immigration Services firm, helping people just like you achieve their dream of visiting, living or working in our beautiful country, Canada.
        Rated Durham Region’s #1 top Immigration firm for a reason, offering personalized service and stay by your side every step of the way. They will review your information to determine which Canadian immigration programs you are currently eligible for. You will be contacted shortly.
    <p>At JobCanada.org we are here to help you! 31+ years' experience helping jobseekers & companies achieve goals!</p>
    <p style="font-size: 1em;"><i>Experts in assisting people in the Canadian market easily find Employment and Career Training, Resume Assistance, Employment specialists and more here to serve you since 2000</i></p>

    </fieldset>

    <?php
    //TEST THAT THE ARRAY IS WORKING PROPERLY
    //echo'<p>EMPTY ' . count($emailArray)  . '</p>  </fieldset> ';

}
