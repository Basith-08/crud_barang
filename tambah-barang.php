<?php
    include("layout/header.php");

    // check for buttons
    if (isset($_POST['tambah'])) {
        if (create_barang($_POST) > 0){
            echo  "<script>
                    alert('Data barang berhasil ditambahkan');
                    window.location.href = 'index.php';
                    </script>";
        } else {
            echo  "<script>
                    alert('Data barang gagal ditambahkan!');
                    window.location.href = 'index.php';
                    </script>";
        }
    }
?>

<div class="container mt-5">
    <h1>Tambah Barang</h1>
    <hr>
    <a href="index.php" class="btn btn-primary my-2">Kembali</a>

    <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama barang</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama barang">
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah barang</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan jumlah barang">
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">harga barang</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukan harga barang">
        </div>

        <button typw="submit" name="tambah" class="btn btn-primary" style="float: right">Tambah barang</button>
    </form>
</div>

<?php
    include("layout/footer.php");