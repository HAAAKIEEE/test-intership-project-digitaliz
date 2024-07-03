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
        
          <a href="logout.php" type="button" class="btn btn-danger ms-2">Logout</a>

        </div>
      </div>

    </nav>

    <figure class="text-center mt-5">
      <blockquote class="blockquote">
        <p>Data Course Tersedia.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        <cite title="Source Title">Online Course</cite>
      </figcaption>
    </figure>
    <!-- end -->

    <a href="form-input.php" type="button" id="tambah" class="btn btn-success mb-3  ">Tambah Data <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
      </svg></a>


    <!-- table -->
    <table class="table table table-hover table-bordered align-middle sm- buku" id="buku">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Durasi</th>
          <th scope="col">Link Materi</th>

          <th scope="col">Aktivitas</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * from data_course";
        $sql = mysqli_query($koneksi, $query);
        $no = 1;
        while ($data = mysqli_fetch_array($sql)) {
        ?>
          <tr>
            <th scope="row">
              <?php echo $no;
              ?>
            </th>
            <td>
              <?php echo $data['judul'];
              ?>
            </td>
            <td>
              <?php echo $data['deskripsi'];
              ?>
            </td>
            <td>
              <?php echo $data['durasi'];
              ?>
            </td>
            <td>
              <a href=" <?php echo $data['link'];
              ?>"><?php echo $data['link'];
              ?>
             </a>
            </td>

            </td>


            <td><a href="form-input-edit.php?id_course=<?php echo $data['id_course']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg></a>
              <input type="hidden" value="<?php echo $data['id_course']; ?> " name="id_course">

              <a href="delete.php?id_course=<?php echo $data['id_course']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill " viewBox="0 0 16 16">
            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
        </svg>
    </a>
            </td>
          </tr>
        <?php
          $no++;
        }
        ?>
      </tbody>
    </table>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    function konfirmasi() {
      konfirmasi = confirm("Apakah anda yakin ingin menghapus gambar ini?")
      document.writeln(konfirmasi)
    }

    $(document).on("click", "#pilih_gambar", function() {
      var file = $(this).parents().find(".file");
      file.trigger("click");
    });
  </script>
</body>

</html>