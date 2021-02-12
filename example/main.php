<?php

use Doviz\Doviz;

require "../src/Doviz.php";

$doviz = new Doviz;

$kur = $doviz->get("all");

print_r($kur);