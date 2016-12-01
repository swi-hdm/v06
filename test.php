<?php

include_once ("Bauteil.php");
include_once ("Zauberer.php");
include_once ("HTMLTable.php");

$b0 = new Bauteil("Sockel");
$b1 = new Bauteil("Grundplatte");
$b2 = new Bauteil("Winkel");
$b3 = new Bauteil("Schraube1");
$b4 = new Bauteil("Schraube2");

$b0->addBauteil($b1);
$b0->addBauteil($b2);
$b0->addBauteil($b3);
$b0->addBauteil($b4);

echo ($b0->toString(""));

// -------------------------

$z = new Zauberer("Gandalf", 100, "Trolle", -7);
echo ($z->toString());

// -------------------------

$t = new HTMLTable(2,2);

$t->setValue(1,1,"AAA");
$t->setValue(1,2,"BBB");
$t->setValue(2,1,"CCC");
$t->setValue(2,2,"DDD");

echo ($t->toHTML());
