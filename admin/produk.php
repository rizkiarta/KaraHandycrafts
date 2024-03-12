<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex ">
                    <div class=" iq-header-title">
                        <h4 class="card-title"><b>Produk</b></h4>
                    </div>
                    <div style="margin-left: 20px;"><a href="?page=produk_tambah" class="btn btn-info">+ Tambah
                            Data</a>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th width="150">Nama Kategori</th>
                                    <th width="150">Nama Produk</th>
                                    <th width="100">Harga</th>
                                    <th width="300">Detail Produk</th>
                                    <th width="130">Stok Produk</th>
                                    <th width="150" class="text-center">Foto Produk</th>
                                    <th width="130" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $query = mysqli_query($koneksi, "SELECT*FROM produk LEFT JOIN kategori on produk.id_kategori = kategori.id_kategori");
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $data['nama_kategori']; ?></td>
                                    <td><?php echo $data['nama_produk']; ?></td>
                                    <td><?php echo $data['harga']; ?></td>
                                    <td><?php echo $data['detail']; ?></td>
                                    <td><?php echo $data['stok']; ?></td>
                                    <td><img src="uploads/<?php echo $data['img']; ?>" class="align-center"></td>
                                    <td>
                                        <a href="?page=produk_ubah&&id=<?php echo $data['id_produk']; ?>"
                                            class="btn btn-primary"><i class="fa fa-edit icon"></i></a>
                                        <a onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');"
                                            href="?page=produk_hapus&&id=<?php echo $data['id_produk']; ?>"
                                            class="btn btn-danger"><i class="fa fa-trash icon"></i></a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>