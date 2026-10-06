<?php
include_once("../abstraktuak/Pertsonaia.php");
include_once("../abstraktuak/Etsaia.php");
include_once("../Interfazea/Salto.php");
include_once("../konkretuak/Mario.php");
include_once("../konkretuak/Luigi.php");
include_once("../konkretuak/Goomba.php");
include_once("../konkretuak/Koopa.php");

echo "<h1>Mario</h1>";
$mario = new Mario();
$mario->setindarra(10);
$mario->setarintasuna(5);
echo "<p>".$mario->mugitu()."</p>";
echo "<p>".$mario->erasoEgin()."</p>";
echo "<p>".$mario->saltoEgin()."</p>";

echo "<h1>Luigi</h1>";
$luigi = new Luigi();
$luigi->setindarra(10);
$luigi->setarintasuna(5);
echo "<p>".$luigi->mugitu()."</p>";
echo "<p>".$luigi->erasoEgin()."</p>";
echo "<p>".$luigi->saltoEgin()."</p>";

echo "<h1>Goomba</h1>";
$goomba = new Goomba();
$goomba->setindarra(10);
$goomba->setarintasuna(5);
$goomba->setboterea(3);
echo "<p>".$goomba->mugitu()."</p>";
echo "<p>".$goomba->erasoEgin()."</p>";

echo "<h1>Koopa</h1>";
$koopa = new Koopa();
$koopa->setindarra(10);
$koopa->setarintasuna(5);
$koopa->setboterea(3);
echo "<p>".$koopa->mugitu()."</p>";
echo "<p>".$koopa->erasoEgin()."</p>";
?>