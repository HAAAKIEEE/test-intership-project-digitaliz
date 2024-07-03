<?php
include("koneksi.php");

// Pastikan id_course diambil dari parameter GET
$id_course = $_GET['id_course'];

// Perintah SQL untuk menghapus data
$query = "DELETE FROM data_course WHERE id_course='$id_course'";
$stmt = mysqli_prepare($koneksi, $query);
$hapus_data = mysqli_stmt_execute($stmt);

if ($hapus_data) {
    header("Location: admin.php?hapus=berhasil");
    exit(); // Penting untuk menjaga agar tidak ada eksekusi lebih lanjut setelah redirect
} else {
    header("Location: admin.php?hapus=gagal");
    exit(); // Penting untuk menjaga agar tidak ada eksekusi lebih lanjut setelah redirect
}

// Pastikan untuk menutup koneksi setelah selesai menggunakan mysqli
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>
