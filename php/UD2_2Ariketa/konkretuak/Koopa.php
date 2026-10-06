<?php
class Koopa extends Etsaia {
    private bool $oskolBerdeaDa;

     public function getoskolBerdeaDa() {
        return $this->oskolBerdeaDa;
    }
    public function setoskolBerdeaDa($oskolBerdeaDa) {
        $this->oskolBerdeaDa = $oskolBerdeaDa;
    }

    public function mugitu(): string {
        return "Koopa mugitu da";
    }
    public function erasoEgin(): int {
        $ergindakoMina = $this->getarintasuna();
        if ($this->getoskolBerdeaDa()) {
            $ergindakoMina = $this->getarintasuna() * 2;
        }
        return $ergindakoMina;
    }
}
?>