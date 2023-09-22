<?php
    class belajar_tipe_data{
    function object(){
            echo "Ini contoh type data object";
        }
    
    function object_dua(){
            echo "type data object kedua";
        }
    }

    $bar = new belajar_tipe_data;
    $bar->object();
    echo "<br>";
    $bar->object_dua();
?>
