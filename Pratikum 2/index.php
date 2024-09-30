<?php
include "Orang.php";
include "Visibility.php";
include "Nilai.php";
?>

<html lange="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2</title>
</head>
<body>
    <h1>Praktikum 2</h1>
    <div>
    <?php
        $david = new Orang();
        $david->nama = "david";

        $david->UcapSalam();

        echo "<br>";

        $iqbal = new Orang();
        $iqbal-> nama = "iqbaleee";
        $iqbal->UcapSalam();

        echo "<br>";

        $visibility = new visibility();
        $visibility->tampilkanProperty();

        echo " Ini akses di luar kelas";
        echo "public : " . $visibility->public . '<br>';
       // echo "protected : " . $visibility->protected . '<br>';
       // echo "private : " . $visibility->private . '<br';

        echo "<br> <br>";

        echo "Nilai MK Pemrograman Web: <br>";
        $nilai = new NIlai();
        $nilai->setTugas(79);
        $nilai->setUts(90);
        $nilai->setUas(89);

        echo "Nilai UTS : " . $nilai->getUts() . "<br>";
        echo "Nilai UAS : " . $nilai->getUas() . "<br>";


    ?>
</div>

</body>
</html>