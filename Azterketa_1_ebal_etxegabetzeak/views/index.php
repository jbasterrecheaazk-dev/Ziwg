<?php

if (isset($_GET['action']) && $_GET['action'] === 'auziaGorde' && isset($_GET['familia']) && isset($_GET['helbidea']) && isset($_GET['hiria'])  && isset($_GET['gastuak']) && isset($_GET['egoera'])) {
            $auziakC = new auziakC();
            $auziakC->sortu((string) $_GET['familia'],(string) $_GET['helbidea'],(string) $_GET['hiria'],(double) $_GET['gastuak'],(string) $_GET['egoera']);
            exit;
            }

if (isset($_GET['action']) && $_GET['action'] === 'EkarpenakAldatu' && isset($_GET['id']) && isset($_GET['izena']) && isset($_GET['email'])) {
            $ikasleakController = new IkasleakController();
            $ikasleakController->eguneratu($_GET['id'], $_GET['izena'], $_GET['email']);
            exit;
            }
            /*
require_once __DIR__ . '/../Azterketa_1_ebal_etxegabetzeak/models/auziak.php';
require_once __DIR__ . '/../Azterketa_1_ebal_etxegabetzeak/models/ekarpenak.php';
require __DIR__ . '/../Azterketa_1_ebal_etxegabetzeak/Bideratu.php';

Bideratu::bideratu();
*/
?>
