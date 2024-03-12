<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk=$id");
?>
<script>
alert('Hapus Data Berhasil');
location.href = "index.php?page=produk";
</script>