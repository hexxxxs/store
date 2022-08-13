<?php
require "../functions.php";

$keyword = $_GET["keyword"];
$query =  "SELECT * FROM barang WHERE 
        nama LIKE '%$keyword%' OR
        ukuran LIKE '%$keyword%' OR
        stok LIKE '%$keyword%'
        ";
$mahasiswa = query($query);
?>
<div class="row">
  <?php foreach ($mahasiswa as $row) : ?>

    <div class="col-md-4 col-sm-6 mb-3">
      <div class="card text-center" data-aos="fade-up" data-aos-duration="1600">
        <div class="inner">
          <img src="img/<?= $row["gambar"]; ?>" class="card-img-top gradien img-thumbnail bg-transparent" alt="..." />
        </div>
        <div class="card-body">
          <a href="produk.php?id=<?= $row["id"]; ?>">
            <h4 class="text-produk-barang"><?= $row["nama"]; ?></h4>
          </a>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6 mt-5">
                  <h4 class="text-secondary"> '<?= $row["ukuran"]; ?>'</h4>
                </div>
                <div class="col-md-6 mt-5">
                  <h4> '<?= $row["stok"]; ?>'</h4>
                </div>
              </div>
              <p><?= $row["deskripsi"]; ?></p>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6 ">
            <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-secondary mt-4 mb-4">Update</a>
          </div>
          <div class="col-6"><a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger mt-4 mb-4" onclick="return confirm('yakin menghapus <?= $row["nama"]; ?>')">Hapus</a></div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div>