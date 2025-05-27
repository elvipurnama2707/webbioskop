<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Daftar Akun - Bioskop Online</title>
  <link rel="stylesheet" href="stylee.css">
  <style>
    body {
      background: #141414;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background: #1e1e1e;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
      width: 350px;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #00bcd4;
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius: 8px;
      background: #2c2c2c;
      color: #fff;
    }

    .form-container input[type="submit"] {
      width: 100%;
      padding: 12px;
      background: #00bcd4;
      border: none;
      border-radius: 8px;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
    }

    .form-container input[type="submit"]:hover {
      background: #0097a7;
    }

    .form-container p {
      text-align: center;
      margin-top: 15px;
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h2>Daftar Akun</h2>
    <form action="proses_register.php" method="POST">
      <input type="text" name="nama" placeholder="Nama Lengkap" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Daftar">
    </form>
    <p>Sudah punya akun? <a href="login.php" style="color:#00bcd4;">Masuk</a></p>
  </div>
</body>

</html>