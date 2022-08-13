<?php



$conn =  mysqli_connect("localhost", "root", "", "db_allstore");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data)
{

    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $stok = htmlspecialchars($data["stok"]);






    //jalankan fungsi upload gambar terlebih dahulu
    $gambar = upload();
    if (!$gambar) {
        return false;
    }



    $query = "INSERT INTO barang VALUES ('',
        '$nama','$deskripsi','$ukuran','$stok','$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload()
{

    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo " <script>
                     alert('masukkan gambar terlebih dahulu!!');
                    
                </script>";
        return false;
    }

    // mengecek apakah file yang diupload adalah gambar
    $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
        echo " <script>
            alert('yang anda upload bukanlah gambar');
           
       </script>";
    }

    //cek jika ukuran terlalu besar
    if ($ukuranfile > 6000000) {
        echo " <script>
                     alert('ukuran gambar terlalu besar!!');       
                </script>";
        return false;
    }

    //lolos pengecekan, gambar siap diupload
    // menggenerate nama file berbeda
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;




    move_uploaded_file($tmpname, 'img/' . $namafilebaru);

    return $namafilebaru;
}



function hapus($id)
{
    global $conn;
    $sql = mysqli_query($conn, "SELECT * FROM barang where id=$id");
    $data = $sql->fetch_assoc();
    $foto = $data['gambar'];
    if (file_exists("img/$foto")) {
        unlink("img/$foto");
    }
    mysqli_query($conn, "DELETE FROM barang WHERE id = $id");
    return mysqli_affected_rows($conn);
}



function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $stok = htmlspecialchars($data["stok"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);


    //mengecek user pilih gambar baru atau tidal
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }



    $query = "UPDATE barang SET 
                    nama = '$nama',
                    deskripsi = '$deskripsi',
                    ukuran = '$ukuran',
                    stok = '$stok',
                    gambar = '$gambar'
                    WHERE id = $id;
                ";
    if (!file_exists("img/$gambar")) {
        unlink("img/$gambar");
    }
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



function cari($keyword)
{
    $query = "SELECT * FROM barang WHERE 
        nama LIKE '%$keyword%' OR
        ukuran LIKE '%$keyword%'

        ";
    return query($query);
}

function semua($semua)
{
    $query = "SELECT * FROM barang
        ";
    return query($query);
}




function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // mengecek username sudah digunakan di db
    $result =  mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
            alert('username sudah terdaftar !!');
        </script> 
            ";
        return false;
    };



    //mengecek konfirmasi password
    if ($password !== $password2) {
        echo "
            <script>
                alert('password tidak sesuai !!');
            </script> 
            ";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    //menambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);
};
