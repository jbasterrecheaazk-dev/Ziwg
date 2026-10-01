<?php
abstract class Pertsonaia {
    private String $izena;
    private int $biziPuntuak;
    private int $indarra;
    private int $arintasuna;
function __construct() {
    }
    public function getIzena() {
        return $this->izena;
    }
    public function setIzena($izena) {
        $this->izena = $izena;
    }
    public function getbiziPuntuak() {
        return $this->biziPuntuak;
    }
    public function setbiziPuntuak($biziPuntuak) {
        $this->biziPuntuak = $biziPuntuak;
    }
    public function getindarra() {
        return $this->indarra;
    }
    public function setindarra($indarra) {
        $this->indarra = $indarra;
    }
    public function getarintasuna() {
        return $this->arintasuna;
    }
    public function setarintasuna($arintasuna) {
        $this->arintasuna = $arintasuna;
    }
   abstract public function mugitu(): string;
   abstract public function erasoEgin(): int;
   public function minaJaso(int $mina) {
        setbiziPuntuak($getbiziPuntuak() - $mina);
   }
}
?>