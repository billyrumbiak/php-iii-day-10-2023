<?php 
require_once ('conn.php');

if(isset($_POST['submit'])){

    $id_makanan = $_POST['id_makanan'];
    $nama_makanan = $_POST['nama_makanan'];
    $harga_makanan = $_POST['harga_makanan'];
    $warung = $_POST['warung'];
    $alamat = $_POST['alamat'];
    $pemilik_warung = $_POST['pemilik_warung'];

    $query = "UPDATE makanan SET id_makanan = '$id_makanan', nama_makanan = '$nama_makanan', harga_makanan = '$harga_makanan', warung = '$warung', alamat = '$alamat', pemilik_warung = '$pemilik_warung' WHERE id_makanan = $id_makanan";

    mysqli_query($conn, $query);
}


// if($query) {
//     echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
// } else {
//     echo "<script>alert('Data gagal diedit');</script>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berhasil</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksi Tambah Data</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">

<div class="container text-center">

    <p class="fs-2">Berhasil diubah</p>

    <a class="btn btn-success btn-lg fs-4" href="index.php">Beranda</a>

</div>
    
</body>
</html>