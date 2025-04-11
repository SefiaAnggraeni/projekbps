<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrasi Akun - Jagad Statistik</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      background-color: #ffffff;
      color: #333;
    }

    header {
      display: flex;
      align-items: center;
      padding: 10px 30px;
      background-color: #fff;
    }

    header img {
      height: 60px;
    }

    .container {
      max-width: 960px;
      margin: auto;
      padding: 40px 20px;
      text-align: center;
    }

    h2 {
      color: #2196f3;
      font-size: 28px;
      font-weight: 600;
      margin-top: 10px;
      margin-bottom: 30px;
    }

        form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    row-gap: 30px; /* jarak antar baris */
    column-gap: 50px; /* jarak antar kolom */
    text-align: left;
    }


    label {
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 5px;
      display: block;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"] {
      width: 100%;
      padding: 12px 16px;
      border-radius: 25px;
      border: 2px solid #ccc;
      font-size: 14px;
      outline: none;
      transition: 0.3s;
    }

    /* Warna border khusus */
    .biru {
      border: 2px solid #2196f3 !important;
    }

    .ijo {
      border: 2px solid #4CAF50 !important;
    }

    .oren {
      border: 2px solid #EB8A1F !important;
    }

    .btn {
      grid-column: span 2;
      background-color: #1A97DE;
      color: white;
      border: none;
      padding: 14px;
      border-radius: 25px;
      font-weight: bold;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.3s;
      text-align: center;
      letter-spacing: 1px;
    }

    .btn:hover {
      background-color: #147fbd;
    }

    .login-link {
      grid-column: span 2;
      text-align: center;
      font-size: 13px;
      margin-top: 10px;
    }

    .login-link a {
      color: #000;
      font-weight: bold;
      text-decoration: none;
    }

    @media (max-width: 768px) {
      form {
        grid-template-columns: 1fr;
      }

      .btn, .login-link {
        grid-column: span 1;
      }
    }
  </style>
</head>
<body>

  <header>
    <img src="{{ asset('img/navbar.png') }}" alt="Logo BPS">
  </header>

  <div class="container">
    <h2>Registrasi Akun</h2>

    <form action="#" method="POST">
      <!-- Email - Biru -->
      <div>
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" class="biru" required>
      </div>

      <!-- Nomor Telepon - Oranye -->
      <div>
        <label for="telp">Nomor Telepon *</label>
        <input type="tel" id="telp" name="phone" class="oren" required>
      </div>

      <!-- Nama Lengkap - Hijau -->
      <div>
        <label for="nama">Nama Lengkap *</label>
        <input type="text" id="nama" name="name" class="ijo" required>
      </div>

      <!-- Pekerjaan - Hijau -->
      <div>
        <label for="pekerjaan">Pekerjaan *</label>
        <input type="text" id="pekerjaan" name="job" class="ijo" required>
      </div>

      <!-- Kata Sandi - Biru -->
      <div>
        <label for="password">Kata Sandi *</label>
        <input type="password" id="password" name="password" class="biru" required>
      </div>

      <!-- Tahun Lahir - Oranye -->
      <div>
        <label for="tahun">Tahun Lahir *</label>
        <input type="text" id="tahun" name="birth_year" class="oren" required>
      </div>

      <button type="submit" class="btn">REGISTRASI</button>

      <div class="login-link">
        Sudah Punya Akun? <a href="/login/user">MASUK DISINI</a>
      </div>
    </form>
  </div>

</body>
</html>
