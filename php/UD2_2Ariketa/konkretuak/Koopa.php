<?php
class Koopa extends Etsaia {
    private boolean $oskolBerdeaDa;

     public function getoskolBerdeaDa() {
        return $this->oskolBerdeaDa;
    }
    public function setoskolBerdeaDa($oskolBerdeaDa) {
        $this->oskolBerdeaDa = $oskolBerdeaDa;
    }

    public function mugitu() {
        return "mugitu da";
    }
}
?>