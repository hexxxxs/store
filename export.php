<?php

header("Content-type:application/vnd-ms-excel");
header("Content-Disposition:attachmnet;filename=list-barang-allstore.xls");


require "functions.php";

$mahasiswa = query("SELECT * FROM barang ORDER BY id DESC");

?>

<p align="center" style="font-weight:Bold;font-size:16pt">List Barang AllStore</p>

<table border="1" align="center">
    <tr>
        <th>id</th>
        <th>nama barang</th>
        <th>stok</th>
        <th>ukuran</th>
    </tr>
    <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?= $row["id"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["stok"]; ?></td>
            <td><?= $row["ukuran"]; ?></td>


        </tr>
    <?php endforeach; ?>
</table>