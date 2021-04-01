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
    <form id="pfm-form" onsubmit="return submitUserForm();" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
<?php

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
?>
  
    </form>
</main>
