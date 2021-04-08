<?php namespace PHPFormMaker\EmailMaker;

class EmailMaker
{
	public $emailArray;

	private function createEmail($emailArray)
	{
		$this-emailArray= $emailArray;
		$html  = '<html><body>';
        $html .= '<h2>Free Preliminary Canadian Immigration Assessment Form</h2>';
        $html .= '<p>Thank you ' .$fnameSend. ' ' .$lnameSend. ' for taking the time to fill out immigration assessment form</p>';
        $html .= '<p>Someone will get back to you within the next 48 hours.';
        $html .= '<p>Thank you! ~ JobCanada.org</p>';

        $html .= '<table rules="all" cellpadding="10">';

        foreach ($this->emailArray as $key => $row) {
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
		return $html;
	}
}