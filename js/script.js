// mengambil element yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombolcari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

//menambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  //membuat objek ajax
  var xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "ajax/barang.php?keyword=" + keyword.value, true);
  xhr.send();

  // eksekusi ajax
});
