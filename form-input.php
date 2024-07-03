<!-- File baru form edit.php -->
<!DOCTYPE html>
<?php

session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}

include("koneksi.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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
      
          <a href="logout.php" type="button" class="btn btn-danger ms-2">Logout</a>

        </div>
      </div>

    </nav>

  
    <figure class="text-center mt-5">
      <blockquote class="blockquote">
        <p>Input Data Course.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        <cite title="Source Title">Online Course</cite>
      </figcaption>
    </figure>
        <!-- form -->
        <form action="simpan.php" method="post"  enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul </label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">link</label>
                <input type="text" class="form-control" id="link" name="link">
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi</label>
                <input type="text" class="form-control" id="durasi" name="durasi">
            </div>
            <button type="submit" name="btn_simpan" class="btn btn-primary">Simpan</button>
        </form>
        <!-- end form -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
