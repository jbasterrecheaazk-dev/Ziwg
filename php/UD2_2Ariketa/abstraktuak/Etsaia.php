<?php
abstract class Etsaia extends Pertsonaia {
    private int $boterea;

    public function getboterea() {
        return $this->boterea;
    }
    public function setboterea($boterea) {
        $this->boterea = $boterea;
    }

    abstract public function mugitu(): string;
   abstract public function erasoEgin(): int;
}
?>