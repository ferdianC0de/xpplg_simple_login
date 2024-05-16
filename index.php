<?php
$nama = "Ferdian Dwi Nugroho";
$umur = 16;

// echo "Nama : ".$nama;
// echo "<br>";
// echo "Usia : ".$umur;

$arr = array("Apple", "Banana", "Grape", "Watermelon");
$arr = ["Apple", "Banana", "Grape", "Watermelon"];

$arrObj = ["buah 1" => "Apple", "Buah 2" => "Banana"];
// print_r($arrObj['buah 1']);

$datadiri = [
    'nama' => "Ferdian",
    'kelas' => "X",
    'jurusan' => "PPLG",
    'hobi' => [
        'Mancing',
        'Lari',
        'hobi 3'
    ],
    'usia' => 23,
    'alamat' => "Jalan blabalbalba",
];


print_r($datadiri);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h3>Nama : <?php echo $datadiri['nama'] ?></h3>
    <h3>Kelas : <?php echo $datadiri['kelas'] ?></h3>
    <ul>
        <?php 
        foreach ($datadiri['hobi'] as $hobi) {
            echo "<li> $hobi </li>";
        }
        ?>
    </ul>
</body>
</html>