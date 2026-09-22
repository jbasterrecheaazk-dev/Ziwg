<?php
 $prezioak = array('24', '35', '40', '23', '35', '84', '55', '40', '23', '35');
                for ($i = 0; $i < count($prezioak); $i++) {
                    $kontua = 0;
                    if ($kontua < $prezioak[$i]) {
                        $kontua = $prezioak[$i];
                        echo $prezioak[$i];
                    }
                }
?>