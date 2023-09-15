<?php

// String 
$string = "Tipe data string digunakan untuk menampilkan karakter ";

$namaDepan = 'Chalvin  ';
$namaBelakang = 'Huby  ';
$alamat = 'Buper ';

//  Integer/int
$x = 7;
$y = 9;

$tambah = $x + $y;
$kurang = $x - $y;
$kali = $x * $y;
$bagi = $x / $y;

// float
$float = "Tipe data untuk menyimpan bil bulat";

$pecahan = 10.4;
$pecahan_dua = 22.7;

// Boolean
$boolean = "Tipe data boolean digunakan untuk menyimpan bilangan pecahan";
$satu = true;
$nol = false;

// AND = x
$and = $satu && $nol;

// OR = +
$or = $satu || $nol;

// null
$null ="Tipe data null di gunakan untuk mengatikan variabel yang kosong";

$r ='';
$r = null;

// Array
$array = 'Digunakan Untuk menyimpan banyak data';
$nama = ['chalvin','billi','agus'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Menampilkan variabel string -->
    <p> <?= $string ?> </p>
    <p> Nama Saya <?= $namaDepan . $namaBelakang?>. saya tinggal di <?= $alamat ?> </p>

    <p> Tipe integer digunakan untuk menyimpan data bilangan bulat </p>

    <p> <?= $x ?>  + <?= $y ?>  = <?= $tambah ?>  </p>
    <p> <?= $x ?>  - <?= $y ?>  = <?= $kurang ?>  </p>
    <p> <?= $x ?>  x  <?= $y ?>  = <?= $kali ?>  </p>
    <p> <?= $x ?>  :  <?= $y ?>  = <?= $bagi ?>  </p>

    <br>
    <br>

    <p><?=$float?></p>
    <p><?=$pecahan?></p>
    <p><?=$pecahan_dua?></p>


    <br>
    <br>
    <p><?=$boolean?></p>
    <p><?php var_dump($and)?></p>
    <p><?php var_dump($or)?></p>

    <br>
    <br>

    <p><?=$nol?></p>
    <p><?php var_dump($r)?></p>

    <br>
    <br>
    <p><?=$array?></p>

    <?php foreach($nama as $n) : ?>
        <p><?=$n?></p>
        <?php endforeach?>



</body>
</html>