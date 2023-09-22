<?php
    //ini komentar
    /*
    ini komentar panjang
    */
    // hallo

    // standar output
    // echo
    // print
    // print_r()
    // var_dump()
    
    echo "test !!";
    echo"<br>";
    echo"Hallo !! Ini pertemuan ketiga Bootcamp";
    echo"<br>";
    echo"Hallo !! Ini pertemuan pertama belajar php";
    echo"<hr>";

    print"Hallo world!!";
    print"<br>";
    print_r("Nama saya Luthfi Awaludin");
    var_dump("Tasikmalaya, 13 November 2003");

    echo 2003; // integer
    echo false; // boolean
?>

<!-- php dalam html -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h1><?php echo "hello world"?></h1>
    <?php
        echo"Belajar Bahasa Pemrograman php dasar";
        echo "<br>";
    ?>
</body>
</html>

<!-- varibel dan operator aritmetika-->
<?php

$nama = "Luthfi Awaludin";
echo $nama;
echo "<br>";

$a = 13110000;
$b = 2003;
echo $a + $b;

echo "<br>";
$namaDepan = "Luthfi";
$namaBelakang = "Awaludin";
echo $namaDepan . " " . $namaBelakang;

//operator perbandingan
//operator identitas
//operator logika
?>