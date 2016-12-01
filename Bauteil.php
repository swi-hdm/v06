<?php
class Bauteil {
    private $name;
    private $bauteilliste = [];

    function __construct($aName) {
        $this->name = $aName;
    }

    public function addBauteil ($aBauteil) {
        array_push($this->bauteilliste, $aBauteil);
    }

    public function delBauteil ($aBauteil) {
        $i = array_search($aBauteil, $this->bauteilliste);
        if (isset($i)) {
            unset($this->bauteilliste[$i]);
        }
    }

    public function getBauteilliste () {
        return $this->bauteilliste;
    }

    public function toString ($indent) {
        $s = $indent.$this->name."\n";
        foreach ($this->bauteilliste as $bauteil) {
            $s = $s . $bauteil->toString($indent."---");
        }
        return $s;
    }
}