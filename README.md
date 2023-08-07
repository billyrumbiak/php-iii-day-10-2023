# php-iii-day-10-2023

Menampilkan Data Dari Database

## Query tambah data

    INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `harga_makanan`, `warung`, `alamat`) VALUES (NULL, 'Papeda', '500000', 'Papuan Food', 'Waena'), (NULL, 'Sagu Bakar', '400000', 'Jungle Food', 'Abepura');

## Query tampilkan semua data dari table

    SELECT * FROM `makanan`

## Query menampilkan satu data berdasarkan id

    SELECT * FROM `makanan` WHERE id_makanan = 1;

## Query menambahkan makanan

    UPDATE `makanan` SET `id_makanan`='[value-1]',`nama_makanan`='[value-2]',`harga_makanan`='[value-3]',`warung`='[value-4]',`alamat`='[value-5]',`pemilik_warung`='[value-6]' WHERE 1

## Query menghapus

    DELETE FROM `makanan` WHERE 0
