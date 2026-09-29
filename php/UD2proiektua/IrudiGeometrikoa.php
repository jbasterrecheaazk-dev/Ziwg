<?php
    private $izena;
    private $kolorea;

    function__construct() {
    }
    public function getIzena() {
        return $this->izena;
    }
    public function setIzena($izena) {
        $this->izena = $izena;
    }
    public function getKolorea() {
        return $this->kolorea;
    }
    public function setKolorea($kolorea) {
        $this->kolorea = $kolorea;
    }
    public function idatzi() {
        echo "Irudi geometriko bat marrazten da: " . $this->izena . " kolorearekin: " . $this->kolorea;
    }
?>