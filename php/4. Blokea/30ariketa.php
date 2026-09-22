<?php
 $prezioak = array('24', '35', '40', '23', '35', '84', '55', '40', '23', '35');
$kontua = 0;
                for ($i = 0; $i < count($prezioak); $i++) {
                    if ($kontua <= $prezioak[$i]) {
                        $kontua = $prezioak[$i];
                        echo "<br>" . $kontua . "<br>";
                    }
                }
?>