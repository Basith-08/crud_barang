<?php
    include("layout/header.php");

    // mengambil id_barang dari url
    $id_barang = (int)$_GET['id_barang'];

    $barang = select("SELECT * FROM barang WHERE id_barang = $id_barang")[0];

    // check for buttons
    if (isset($_POST['ubah'])) {
        if (update_barang($_POST) > 0){
            echo  "<script>
                    alert('Data barang berhasil diubahkan');
                    window.location.href = 'index.php';
                    </script>";
        } else {
            echo  "<script>
                    alert('Data barang gagal diubahkan!');
                    window.location.href = 'index.php';
                    </script>";
        }
    }
?>

<div class="container mt-5">
    <h1>Ubah Barang</h1>
    <hr>
    <a href="index.php" class="btn btn-primary my-2">Kembali</a>

    <form action="" method="post">
        <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang['nama']; ?>" placeholder="Masukan nama barang">
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah barang</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $barang['jumlah']; ?>" placeholder="Masukan jumlah barang">
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">harga barang</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>" placeholder="Masukan harga barang">
        </div>

        <button typw="submit" name="ubah" class="btn btn-primary" style="float: right">Ubah barang</button>
    </form>
</div>

<?php
    include("layout/footer.php");