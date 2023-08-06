<?php
    $sayi = 15;

    function sekil($sayi) {
        $a = 0;
        while($a <= $sayi){
            for($i = 0; $i <= $a; $i++){
                echo "*";
            }
            $a++;
            echo "<br>";
        }
    }
    sekil(15);
?>
