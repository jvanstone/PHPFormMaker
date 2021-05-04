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

use PHPFormMaker\FormMaker\FormMaker;
use PHPFormMaker\FormMaker\EmailMaker;
use PHPFormMaker\FormMaker\EmailSender;
use PHPFormMaker\FormMaker\ShowResults;


/**
 * Call the classes required to make the Form;
 *
 * return true
 */


?>



<main>
    <form id="pfm-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

    <?php if (isset($_POST['submit'])) {  ?>
        <fieldset>

        <?php

        /**
         * Display the results of the form.
         * 
         */
        
        $showResults = new ShowResults();
        echo $showResults->getResults($_POST);
        
        /**
         * Compile the infomation into an Email.
         * 
         */
        //$fullName = new EmailSender("My Title", "Stefan", "Pols");
        //echo $fullName;
        $emailDetails = new EmailMaker();
        echo $emailDetails->createEmail($_POST);


        /**
         *  Need to work on Setting up the Class Send Email
         * 
         */
        $sendDetails = new EmailSender("My Title", "Stefan", "Pols");
        $sendDetails->sendEmail($emailDetails->createEmail($_POST, $fullname));
    
       ?>
        </fieldset>
        <?php
    } else {
        ?>
        <div class="">
          <h1>PHPFormMaker Form</h2>
          <p></p>
          <div class="required"> * is a required field</div>

        </div>
            
        <?php
        /***
         * Create the Form
         * 
         */

        $form = new FormMaker();
        $label = new FormMaker();
        $answers = new FormMaker();

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
