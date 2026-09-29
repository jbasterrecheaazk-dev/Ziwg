<?php
    class Triangelua extends IrudiGeometrikoa {
        private $altuera;
        private $oinarria; 

        public function getAltuera() {
            return $this->altuera;
        }
        public function setAltuera($altuera) {
            $this->altuera = $altuera;
        }
        public function getOinarria() {
            return $this->oinarria;
        }
        public function setOinarria($oinarria) {
            $this->oinarria = $oinarria;
        }
        public function idatzi() {
            parent::idatzi();
            echo "Triangelu bat marrazten da: " . $this->getIzena() . " kolorearekin: " . $this->getKolorea() . ", altuera: " . $this->getAltuera() . ", oinarria: " . $this->getOinarria();
        }
        public function kalkulatuAzalera() {
            echo "Azalera: " . ($this->altuera * $this->oinarria) / 2;
        }
    }
?>