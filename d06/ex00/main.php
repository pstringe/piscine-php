#! /usr/bin/php
<?php
require_once 'Color.class.php';

Color::$verbose = True;

$red = new Color(array('red' => 255, 'green' => 0, 'blue' => 0));
$blue = new Color(array('rgb' => 0x0000ff));
$purple = $red->mult($blue);

Color::doc();
unset($red);
unset($blue);
unset($purple);
?>
