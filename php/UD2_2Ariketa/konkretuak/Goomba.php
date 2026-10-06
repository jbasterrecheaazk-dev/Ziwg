<?php
class Goomba extends Etsaia {
    private int $azkartasuna;

    public function getazkartasuna() {
        return $this->getazkartasuna;
    }
    public function setazkartasuna($azkartasuna) {
        $this->azkartasuna = $azkartasuna;
    }
    public function mugitu(): string {
        return "Goomba mugitu da.";
    }
    public function erasoEgin(): int{
        $ergindakoMina = $this->getarintasuna();
        if ($this->getazkartasuna()) {
            $ergindakoMina = $this->getarintasuna() * $this->getboterea();
        }
        return $ergindakoMina;
    }
}
?>