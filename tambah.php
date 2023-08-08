<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Makanan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-dark text-light">
    
    
    <div class="row text-center">
        <div class="col-12 p-5">
            <p class="h4"> Tambah Data Makanan Papua <i class="bi bi-bookmark-plus"></i></p>
        </div>
    </div>
    
    
    <div class="container">
        <div class="row">
            <div class="col-8">
                
                <a href="index.php" class="btn btn-success my-3 fs-5"><i class="bi bi-house pe-1"></i></i>Beranda</a>

                <div class="form-floating">

                    <!-- action berfungsi untuk mengirimkan data ke suatu link -->
                    <form action="aksiTambah.php" method="post" name="tambah">

                        <ul class="list-group list-group-numbered">
                            <li class="list-group-item py-3">
                                <label for="nama_makanan" class="pb-2">Nama Makanan</label>
                                <input type="text" name="nama_makanan" id="nama_makanan" class="form-control" required>
                            </li>
                            <li class="list-group-item py-3">
                                <label for="harga_makanan" class="pb-2">Harga Makanan</label>
                                <input type="text" name="harga_makanan" id="harga_makanan" class="form-control" required>
                            </li>
                            <li class="list-group-item py-3">
                                <label for="warung" class="pb-2">Warung</label>
                                <input type="text" name="warung" id="warung" class="form-control" required>
                            </li>
                            <li class="list-group-item py-3">
                                <label for="alamat" class="pb-2">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" required>
                            </li>
                            <li class="list-group-item py-3">
                                <label for="pemilik_warung"class="pb-2">Pemilik Warung</label>
                                <input type="text" name="pemilik_warung" id="pemilik_warung" class="form-control" required>
                            </li>
                        </ul>

                        <button class="btn btn-success my-3 fs-5" type="submit" name="submit" value="Tambah"><i class="bi bi-bookmark-plus pe-1"></i>Tambah Data!</button>


                    </form>

                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>