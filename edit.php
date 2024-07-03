<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_course = $_POST['id_course']; // Pastikan variabel $id_buku diambil dari input form atau dari sesuatu yang relevan

    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $link = $_POST['link'];
    $durasi = $_POST['durasi'];

   
    $query = "UPDATE data_course SET judul='$judul', deskripsi='$deskripsi', link='$link', durasi='$durasi' WHERE id_course='$id_course'";

    $simpan_buku = mysqli_query($koneksi, $query);

    if ($simpan_buku) {
        header("Location: admin.php?add=berhasil");
    } else {
        header("Location: admin.php?add=gagal");
    }
}
?>
