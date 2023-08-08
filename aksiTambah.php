<?php // kelamaan dari promgram ini ketika user isi tidak ada feedbacknya
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "day10");

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {

    // ambil data dari tiap elemen dalam form
    $nama_makanan = $_POST["nama_makanan"];
    $harga_makanan = $_POST["harga_makanan"];
    $warung = $_POST["warung"];
    $alamat = $_POST["alamat"];
    $pemilik_warung = $_POST["pemilik_warung"];

    // query tambah data
    $query = "INSERT INTO makanan VALUES ('', '$nama_makanan', '$harga_makanan', '$warung', '$alamat', '$pemilik_warung')";

    mysqli_query($conn, $query);

    // cek apakah data berhasil ditambahkan atau tidak
    // if( mysqli_affected_rows($conn) > 0 ) {
    //     echo "berhasil ditambah";
    // } else {
    //     echo "gagal!";
    //     echo mysqli_error($conn);
    // }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksi Tambah Data</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body class="bg-dark text-light">

<div class="container text-center">

    <p class="fs-2">Data Berhasil Ditambahkan</p>

    <a class="btn btn-success btn-lg fs-4" href="index.php">Beranda</a>

</div>
    
</body>
</html>