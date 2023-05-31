<?php 

include 'config/app.php';

// menerima id barang yang dipilih pengguna
$id_barang = (int)$_GET['id_barang'];

if (delete_barang($id_barang) > 0) {
    echo "<script>
        alert('Data Barang Berhasil dihapus');
        window.location.href = 'index.php';
        </script>";
}else {
    echo "<script>
        alert('Data Barang Berhasil dihapus');
        window.location.href = 'index.php';
        </script>";
}