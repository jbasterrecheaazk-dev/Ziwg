<?php
    class DB{
        public static function konexioa(){
            // Datu-baserako konexioa ireki eta itzuli
            $konexioa=new mysqli("localhost", "root", "", "etxegabetzeak");
            $konexioa->query("SET NAMES 'utf8'");
            return $konexioa;
        }
    }
?>
