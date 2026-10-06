<?php
include ("Pertsonaia.php");
include ("Salto.php");
class Mario extends Pertsonaia implements Salto {
    private $gaitasunBerezia = "Tamaina";
    public function getgaitasunBerezia() {
        return $this->getgaitasunBerezia;
    }
    public function setgaitasunBerezia($gaitasunBerezia) {
        $this->gaitasunBerezia = $gaitasunBerezia;
    }
    public function mugitu(): string {
        return "Mario mugitu da.";
    }
    public function erasoEgin(): string {
        return getindarra();
    }
    public function saltoEgin(): int {
        return getindarra() * getarintasuna();
    }
}
?>