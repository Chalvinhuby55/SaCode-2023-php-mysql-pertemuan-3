<?php
// Kata Selamat Datang
$welcome="Selamat Datang";
// nama saya
$nama ='Chalvin';
$footer="copyright by chalvin";

$keterangan= 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Nisi illum quo vel praesentium, 
est nesciunt impedit delectus reiciendis,
nemo, porro nam nostrum autem? Optio molestias numquam perspiciatis placeat eum quos officia culpa rerum non tempora voluptatum,
 atque repellat id voluptate.';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $welcome .' ' .$nama?></h1>
    <p><?php echo $keterangan?></p>
    <p><?php echo $footer?></p>
    
</body>
</html>