<?php namespace PHPFormMaker\FormMaker;

class FormMaker
{
    private $nameID;
    private $inputType;
    private $requiredInput;
    private $select;
    private $newLabel;
    private $newInput;
   
    /***
     * Create a nameID Value for the form
     *
     * @return string
     */
    public function nameIDMaker($nameID)
    {
        $this->nameID = $nameID;
        $this->nameID = substr(strtolower(preg_replace('/\s+/', '_', $this->nameID)), 0, 11);
        return $this->nameID;
    }

     /***
     * Send nameID Value for the form
     *
     * @return string
     */
    public function sendNameID()
    {
        return $this->nameID;
    }

    /**
     * Create the label for the input.
     *
     * return string
     */
    public function labelMaker($label)
    {
        $this->label = $label;
        $nameID = new FormMaker();

        $this->label = '<label for="' . $nameID->nameIDMaker($this->label) . '">' . $this->label . '</label>';
        return $this->label;
    }

    /**
     * Get the input data and prepare to be inputed.
     *
     * return false
     */
    public function getInputData($nameID, $inputType, $requiredInput)
    {
        $this->nameID = $nameID;
        $this->inputType = $inputType;
        $this->requiredInput = ($requiredInput === true ? 'required' : '');
    }

    /**
     * Create answers for the Form.
     *
     */
    public function createAnswers($arrayAnswer)
    {
        //$this->select = $select;
        $this->array = $arrayAnswer;
        echo is_array($this->array);
        foreach ($this->array as $key => $arrays) {
            foreach (($arrays) as $array) {
                foreach (($array) as $key => $value) {
                    $this->select .= '<option value="' . $key . '">' . $value . '</option>';
                }
            }
        }
        echo $this->select;
    }

    /**
     * Create the input type abd return it to be viewed
     *
     * return true
     */
    public function createInput()
    {
        if ($this->inputType !=='select' && $this->requiredInput) {
            $this->newInput = '<input ';
            $this->newInput .= 'type="' . $this->inputType . '" ';
            $this->newInput .= 'name="' . $this->nameID . '" ';
            $this->newInput .= $this->requiredInput;
            $this->newInput .= '/>';
            return $this->newInput;
        }
    }

    public function createButtons()
    {
        ob_start();
        ?>
        <div class="buttonContainer">
            <button type="submit" name="submit" value="submit" class="button">Submit</button>
            <button type="reset" name="Reset" value="reset" class="button">Reset</button>
        </div>
        <?php
        ob_flush();
    }
}
