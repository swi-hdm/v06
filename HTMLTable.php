<?php

class HTMLTable
{
    private $zeilen;
    private $spalten;
    private $feld;

    public function setValue ($x, $y, $value) {
        $this->feld[$x][$y]=$value;
    }

    public function getValue ($x, $y) {
        return $this->feld[$x][$y];
    }

    public function __construct($zeilen, $spalten) {
        $this->zeilen = $zeilen;
        $this->spalten = $spalten;
        // zweidimensionales Array wird mit "" initialisiert
        for ($x=1; $x <= $zeilen; $x++) {
            $this->feld[$x] = [];
            for ($y = 1; $y <= $spalten; $y++) {
                $this->feld[$x][$y] = "";
            }
        }
    }

    public function toHTML () {
        $s = "<table border='1'>";
        for ($x=1;$x<=$this->zeilen;$x++) {
            $s .= "<tr>";
            for ($y=1;$y<=$this->spalten;$y++) {
                $s .= "<td>";
                $s .= $this->getValue($x,$y);
                $s .= "</td>";
            }
            $s .= "</tr>";
        }
        $s .= "</table >";
        return $s;
    }
}


