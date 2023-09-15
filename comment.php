<?php

// Judul dari halaman web
$title='Comment';
// Header dari halaman web
$header='Belajar Membuat Comment';



// gambar dlm variabel dari unsplash
$gambar="https://images.unsplash.com/photo-1582426750875-13465457b9ce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1375&q=80";
$video='<iframe width="853" height="480" src="https://www.youtube.com/embed/PHTE1Ao_DXI" title="Upin &amp; Ipin Musim 17 Full Movie | Upin &amp; Ipin Abang Atau Kakak Episode Terbaru | Upin Ipin Terbaru" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <h2><?=$header?></h2>
    <br>
    <img src="<?=$gambar?>" widht="200">
    <br>
    <?=$video /* sumber video youtube */?>
    
</body>
</html>