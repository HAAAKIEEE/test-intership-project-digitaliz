<?php
include("koneksi.php");

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$link = $_POST['link'];
$durasi = $_POST['durasi'];
if (isset($_POST['btn_simpan'])) {

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

       
                $query = "INSERT INTO data_course VALUES('','$judul','$deskripsi','$link','$durasi')";

                $simpan_bank = mysqli_query($koneksi, $query);
                ;

                if ($simpan_bank) {
                    header("Location:admin.php?add=berhasil");
                } else {
                    header("Location:admin.php?add=gagal");
                }
      
    
    }
}
?>