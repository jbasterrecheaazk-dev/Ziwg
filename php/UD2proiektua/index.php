<?php
    include("Triangelua.php");
    include("IrudiGeometrikoa.php");

    $irudi = new IrudiGeometrikoa();
    $irudi->setIzena("A");
    $irudi->setKolorea("urdina");
    $irudi->idatzi();

    $triangelua = new Triangelua();
    $triangelua->setIzena("B");
    $triangelua->setKolorea("Berdea");
    $triangelua->setAltuera(5);
    $triangelua->setOinarria(3);
    $triangelua->idatzi();
    $triangelua->kalkulatuAzalera();
?>