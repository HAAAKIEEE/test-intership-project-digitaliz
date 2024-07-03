<!DOCTYPE html>
<?php
include("koneksi.php");
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Course</title>
  <style>
  .card-text {
    max-height: 4em; /* Tinggi maksimum awal deskripsi (sekitar 4 baris teks) */
    overflow: hidden; /* Semua teks yang berlebihan akan disembunyikan */
    position: relative; /* Diperlukan untuk menampilkan tombol "Lihat lebih banyak" */
  }

  .card-text.expand {
    max-height: none; /* Menghapus batasan tinggi untuk menampilkan semua teks */
  }

  .expand-btn {
    color: blue; /* Warna teks yang menunjukkan aksi klik */
    cursor: pointer;
  }
</style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
      <a class="navbar-brand fs-3 fw-bold" href="#">Online Course</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          
          
          <a href="login.php" type="button" class="btn btn-success ms-2">Login</a>
        </div>
      </div>

    </nav>

    
    <div class="container-card row d-flex justify-content-around buku" id="buku">
    <?php
    $query = "SELECT * FROM data_course";
    $sql = mysqli_query($koneksi, $query);
    while ($data = mysqli_fetch_array($sql)) {
    ?>
      <div class="card m-2" style="width: 22rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $data['judul']; ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Durasi : <?php echo $data['durasi']; ?></h6>
          <p class="card-text"><?php echo $data['deskripsi']; ?></p>
          <a href="<?php echo $data['link']; ?>" class="card-link btn btn-success">Materi</a>
     
        </div>
      </div>

    <?php

    }
    ?>
  </div>
  </div>

  <script>
  document.addEventListener("DOMContentLoaded", function() {
    let cardTexts = document.querySelectorAll(".card-text");

    cardTexts.forEach(cardText => {
      // Tambahkan tombol "Lihat lebih banyak" jika teks melebihi max-height
      if (cardText.scrollHeight > cardText.clientHeight) {
        let expandBtn = document.createElement('button'); // Menggunakan <button> sebagai tombol
        expandBtn.textContent = 'More Info';
        expandBtn.className = 'btn btn-primary expand-btn'; // Menambahkan kelas Bootstrap 'btn' dan 'btn-primary'
        cardText.parentNode.appendChild(expandBtn);

        // Tambahkan event listener untuk toggle kelas expand pada card-text saat klik
        expandBtn.addEventListener('click', function() {
          cardText.classList.toggle('expand');
          if (cardText.classList.contains('expand')) {
            expandBtn.textContent = 'Sembunyikan';
          } else {
            expandBtn.textContent = 'More Info';
          }
        });
      }
    });
  });
</script>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>