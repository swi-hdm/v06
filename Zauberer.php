<?php

class Zauberer {
    private $farbe;
    private $name;
    private $alter;
    private $spezialisierung;
    private $boese_gut; // -10 .. +10
    private $energielevel; // 0 .. 100
    private $aktivitaetslevel; // 0 .. 100

    public function __construct($aName, $aAlter, $aSpezialisierung, $aBoeseGut) {
        $this->name = $aName;
        $this->alter = $aAlter;
        $this->spezialisierung = $aSpezialisierung;
        $this->setBoeseGut($aBoeseGut);
        $this->setEnergielevel(100);
        $this->setAktivitaetslevel(100);
    }

    public function getEnergielevel()
    {
        return $this->energielevel;
    }

    public function setEnergielevel($aEnergielevel)
    {
        if ($aEnergielevel > 100 or  $aEnergielevel < 0) $aEnergielevel = 0;
        $this->energielevel = $aEnergielevel;
    }

    public function getAktivitaetslevel()
    {
        return $this->aktivitaetslevel;
    }

    public function setAktivitaetslevel($aAktivitaetslevel)
    {
        if ($aAktivitaetslevel > 100 or  $aAktivitaetslevel < 0) $aAktivitaetslevel = 0;
        $this->aktivitaetslevel = $aAktivitaetslevel;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAlter()
    {
        return $this->alter;
    }

    public function getSpezialisierung()
    {
        return $this->spezialisierung;
    }

    public function getBoeseGut()
    {
        return $this->boese_gut;
    }

    public function setBoeseGut($aWert)
    {
        if ($aWert<-10 or $aWert>10) $aWert = 0;
        $this->boese_gut = $aWert;
    }

    public function toString ()
    {
        $s = "Name: ".$this->name."\n";
        $s = $s."Alter: ".$this->alter."\n";
        $s = $s."Boese/Gut: ".$this->getBoeseGut()."\n";
        $s = $s."Spezialisierung: ".$this->getSpezialisierung()."\n";
        $s = $s."Energielevel: ".$this->getEnergielevel()."\n";
        $s = $s."Aktivitätslevel: ".$this->getAktivitaetslevel()."\n";
        return $s;
    }
}
