<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$valorid=$_POST["vid"];
$valorgrupo=$_POST["vgrupo"];
if ($valorid<$valorgrupo)
    $nazar=rand(($valorid*2),($valorgrupo*3));
else
    $nazar=rand(($valorgrupo*2),($valorid*3));
echo ($valorid."_".$nazar."_".$valorgrupo);
?>

