<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title"><b>Tambah Produk</b></h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="post" enctype="multipart/form-data">
                        <?php
                        if (isset($_POST['submit'])) {
                            $id_kategori = $_POST['id_kategori'];
                            $nama_produk = $_POST['nama_produk'];
                            $harga = $_POST['harga'];
                            $detail = $_POST['detail'];
                            $stok = $_POST['stok'];
                            $img = $_FILES['img'];
                            $nama_gambar = time().$_FILES['img']['name'];

                            move_uploaded_file($_FILES['img']['tmp_name'], 'uploads/'.$nama_gambar);
                            
                            $query = mysqli_query($koneksi, "INSERT INTO produk(id_kategori, nama_produk, harga, detail, img, stok) values('$id_kategori','$nama_produk','$harga','$detail', '$nama_gambar','$stok')");

                            if ($query) {
                                echo '<script>alert("Tambah Data Berhasil."); location.href="?page=produk"</script>';
                            } else {
                                '<script>alert("Tambah Data Gagal.");</script>';
                            }
                        }
                        ?>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="id_kategori" class="form-control" required>
                                <?php
                                $kat = mysqli_query($koneksi, "SELECT*FROM kategori");
                                while($kategori = mysqli_fetch_array($kat)){
                                    ?>
                                <option value="<?php echo $kategori['id_kategori'];?>">
                                    <?php echo $kategori['nama_kategori'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class=" form-group">
                            <label>Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" required>
                        </div>
                        <div class=" form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" required>
                        </div>
                        <div class=" form-group">
                            <label>Detail Produk</label>
                            <input type="text" name="detail" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Stok Produk</label>
                            <select name="stok" class="form-control" required>
                                <option value="Tersedia">Tersedia</option>
                                <option value="Habis">Habis</option>
                            </select>
                        </div>
                        <div class=" form-group">
                            <label>Foto Produk</label>
                            <input type="file" name="img" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=produk" class="btn iq-bg-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>