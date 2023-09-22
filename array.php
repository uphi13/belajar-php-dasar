<?php
    // array terindeks
    $karyawan = [
        "Buloh",
        "Jajat",
        "Dadang",
        "Aep"
    ];

    echo $karyawan[0]."<br>";
    echo $karyawan[3];

    echo "<hr>";

    // array assosiatif
    $mahasiswa =[
        "Nama" => "Luthfi Awaludin",
        "NPM" => "227006045"
    ];

    echo $mahasiswa["Nama"]."<br>";
    echo $mahasiswa["NPM"]."<h>";

    // array multidimensi
    $array_multi = [
        "Luthfi Awaludin",
        2003,
        True,
        [1,2,3,4]
    ];

    echo $array_multi[3][1];
    

?>