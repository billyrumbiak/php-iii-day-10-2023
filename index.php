<?php // fungsinya untuk menyiapkan data pada table yang sudah kita buat.

    require_once('conn.php');

    $query = "SELECT * FROM makanan";
    $data = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Makanan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-dark text-light">
    
    <!-- <div class="container"> -->
        <div class="row text-center">
            <div class="col-12 p-5">
                <p class="h4"> Data Makanan Papua <i class="bi bi-cart2"></i></p>
            </div>
        </div>
    <!-- </div>     -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                    <a href="tambah.php" class="btn btn-success my-3 fs-5"> <i class="bi bi-plus-square"></i> Tambah Makanan</a>

                <div class="table-responsive mt-3">


                    <table class="table table-bordered table-hover">
                        <tr class="text-center bg-success">
                            <th>No</th>
                            <th>Nama Makanan</th>
                            <th>Harga</th>
                            <th>Warung</th>
                            <th>Alamat Warung</th>
                            <th>Pemilik Warung</th>
                            <td>Aksi</td>
                        </tr>

                        <?php $i =0; foreach($data as $d): ?>
                            <tr>
                                <td class="text-center"><?= ++$i?></td>
                                <td><?= $d['nama_makanan'];?></td>
                                <td>Rp. <?= number_format($d['harga_makanan'],0,',','.');?></td>
                                <td><?= $d['warung'];?></td>
                                <td><?= $d['alamat'];?></td>
                                <td><?= $d["pemilik_warung"]; ?></td>
                                <td class="text-center">
                                    <a href="detail.php?id=<?= $d['id_makanan'] ?>" class="btn btn-success"> <i class="bi bi-eye-fill"></i> </a>
                                    <a href="ubah.php?id=<?= $d['id_makanan'] ?>" class="btn btn-success"> <i class="bi bi-pencil-fill"></i> </a>
                                    <a href="hapus.php?id=<?= $d['id_makanan'] ?>" class="btn btn-danger"> <i class="bi bi-trash-fill"></i> </a>
                                </td>
                            </tr>
                        <?php endforeach?>


                    </table>

                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>