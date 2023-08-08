<?php // kelamaan dari promgram ini ketika user isi tidak ada feedbacknya
// koneksi database
require_once('conn.php');

        $id_makanan = '';
        $nama_makanan = '';
        $harga_makanan = '';
        $warung = '';
        $alamat = '';
        $pemilik_warung = '';


    if(isset($_GET['id'])) {
        $id_makanan = $_GET['id'];
        
        // query data makanan berdasarkan id
        $query = "SELECT * FROM makanan WHERE id_makanan = $id_makanan";

        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $nama_makanan = $result['nama_makanan'];
        $harga_makanan = $result['harga_makanan'];
        $warung = $result['warung'];
        $alamat = $result['alamat'];
        $pemilik_warung = $result['pemilik_warung'];

        // var_dump($result);
        // die();
    }


// $id_makanan = $_POST['id_makanan'];
// $nama_makanan = $_POST['nama_makanan'];
// $harga_makanan = $result['harga_makanan'];
// $warung = $_POST['warung'];
// $alamat = $_POST['alamat'];
// $pemilik_warung = $_POST['pemilik_warung'];

// $query = mysql_query("UPDATE makanan SET nama_makanan = $nama_makanan, harga_makanan = $harga_makanan, warung = $warung, alamat = $alamat, pemilik_warung = $pemilik_warung  WHERE id_makanan ='$id_makanan'") or die(mysql_error());



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Makanan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-dark text-light">
    
        <div class="row text-center">
            <div class="col-12 p-5">
                <p class="h4"> Ubah Data Makanan Papua <i class="bi bi-pencil-square"></i> </p>
            </div>
        </div>

    <div class="container">
        <div class="row">
            <div class="col-8">
                    <a href="index.php" class="btn btn-success my-3 fs-5"><i class="bi bi-house pe-1"></i></i>Beranda</a>

                <div class="form-floating">

                            <!-- action berfungsi untuk mengirimkan data ke suatu link -->
                            <form action="aksiEdit.php" method="post" name="edit">

                            <input type="hidden" name="id_makanan" value="<?= $result  ["id_makanan"]; ?>" class="form-control">

                                <ul class="list-group list-group-numbered">
                                    <li class="list-group-item py-3">
                                        <label for="nama_makanan" class="pb-2">Nama Makanan</label>
                                        <input type="text" name="nama_makanan" id="nama_makanan" required value="<?= $result  ["nama_makanan"]; ?> " class="form-control">
                                    </li>
                                    <li class="list-group-item py-3">
                                        <label for="harga_makanan" class="pb-2">Harga Makanan</label>
                                        <input type="text" name="harga_makanan" id="harga_makanan" required value="<?php echo $result ["harga_makanan"]; ?> " class="form-control">
                                    </li>
                                    <li class="list-group-item py-3">
                                        <label for="warung" class="pb-2">Warung</label>
                                        <input type="text" name="warung" id="warung" required value="<?= $result ["warung"]; ?> " class="form-control">
                                    </li>
                                    <li class="list-group-item">
                                        <label for="alamat" class="pb-2">Alamat</label>
                                        <input type="text" name="alamat" id="alamat" required value="<?= $result ["alamat"] ?> " class="form-control">
                                    </li>
                                    <li class="list-group-item py-3">
                                        <label for="pemilik_warung" class="pb-2">Pemilik Warung</label>
                                        <input type="text" name="pemilik_warung" id="pemilik_warung" required value="<?= $result ["pemilik_warung"] ?>" class="form-control">
                                    </li>
                                </ul>
                                
                                <button class="btn btn-success my-3 fs-5" type="submit" name="submit" value="Edit"><i class="bi bi-pencil-square pe-1"></i>Ubah Data!</button>
                            </form>

                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>