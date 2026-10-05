<?php
include ("Pertsonaia.php");
include ("Salto.php");
class Luigi extends Pertsonaia implements Salto {
    private $gaitasunBerezia = "Sua bota";
   public function getgaitasunBerezia() {
        return $this->getgaitasunBerezia;
    }
    public function setgaitasunBerezia($gaitasunBerezia) {
        $this->gaitasunBerezia = $gaitasunBerezia;
    }
    public function mugitu(): string {
        return "Luigi mugitu da.";
    }
    public function erasoEgin(): string{
        return getindarra();
    }
    public function saltoEgin(): int{
        return getindarra() * getarintasuna();
    }
}
?>