<?php

require_once __DIR__ . '/models/auziak.php';
require_once __DIR__ . '/controllers/auziakC.php';
require_once __DIR__ . '/models/ekarpenak.php';
require_once __DIR__ . '/controllers/ekarpenakC.php';

class Bideratu {
    public static function bideratu(): void {
        
        if (isset($_GET['action']) && $_GET['action'] === 'auziaGorde' && isset($_GET['id_auzia'])) {
            $auziakC = new auziakC();
            $auziakC->bistaratu();
        }
        $auziakC = new auziakC();
        $auziakC->bistaratu();
        exit;
    }
}

Bideratu::bideratu();
?>
