<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Berita</title>
    <style>
        table, th, tr, td {
            border: 1px solid black;
        }
        table{
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <?php
    include_once "check_login.php";
    include_once "koneksi.php";
    include_once "menu.php";
?>
<div style="display: flex; flex-direction: row; justify-content: end;">
    <a href="tambah_berita.php">Tambah Berita</a>
</div>
    <table style="width: 100%;">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Gambar</th>
            <th>Isi</th>
            <th>Tanggal Pembuatan</th>
            <th>Action</th>
        </tr>

        <?php
        $user = $_SESSION['user_login'];
        $id_user  = $user['id'];
        $berita = $koneksi->query("select * from berita where id_user = $id_user");
        $data = $berita->fetch_all();
        foreach ($data as $v) {
        ?>
        <tr>
            <td><?= $v[0] ?></td>
            <td><?= $v[1] ?></td>
            <td>
                <img src="assets/gambar_berita/<?= $v[2] ?>" width="100px" alt="">
            </td>
            <td><?= $v[3] ?></td>
            <td><?= $v[4] ?></td>
            <td>Edit | Delete</td>
        </tr>
        <?php

            }
        ?>
    </table>
</body>
</html>