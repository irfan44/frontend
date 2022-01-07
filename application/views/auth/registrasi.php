<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/index.css">
</head>

<body style="background-color: #E2E7FB">
  <div class="container">
    <div class="row vh-100">
      <div class="col text-center my-auto">
        <img src="<?= base_url(); ?>assets/img/Registrasi.svg" class="img py-5" alt="#" width="320px">
      </div>
      <div class="col my-auto">
        <form class="p-5 my-4"  style="background-color: #ffffff; border-radius: 18px;" action="http://localhost/bcit/user" method="post">
          <div class="mb-5">
            <h1>Selamat Datang!</h1>
            <p class="fw-light">Registrasi untuk mulai memilih proyek pilihanmu</p>
          </div>
          <div class="mb-3">
            <label for="inputNama" class="form-label fw-bold">Nama</label>
            <input type="text" class="form-control" id="inputNama" aria-describedby="namaHelp" name="nama">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="pwHelp" name="password" minlength="8">
            <div id="pwHelp" class="form-text">Minimal 8 karakter</div>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn p-2 fw-bold" style="background-color: #004680; color: #ffffff">Masuk</button>
          </div>
          <div class="mt-4 text-center">
            <p>Sudah punya akun? <a style="text-decoration: none; color: #2A4F96" class="fw-bold" href="<?= base_url();?>index.php/auth/">Masuk disini</a></p>
          </div>
        </form>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>