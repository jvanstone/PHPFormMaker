<?php namespace Name;

class NameControler
{

    private $first;
    private $partyGuest;
    
    public function setName($first, $partyGuest)
    {
        if ($first = 'Jason') {
            $this->first = $first;
            $this->partyGuest = 'Husband';
        } elseif ($first = 'Maguelone') {
            $this->first = $first;
            $this->partyGuest = 'Wife';
        } else {
            $this->first = $first;
            $this->partyGuest= 'Party Goer';
        }
    }

    public function getName()
    {
        return $this->first . $this->partyGuest;
        
    }
}

$myName = new NameControler();
$myName->setName('Jason', 'Groom');

echo $myName->getName();
