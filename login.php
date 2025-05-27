<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - BIOSKOP ONLINE</title>
  <style>
    /* Reset dan gaya dasar */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #667eea, #764ba2);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #333;
    }

    .container {
      background: #fff;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 350px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #764ba2;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 6px;
      font-weight: 600;
      color: #555;
    }

    input[type="email"],
    input[type="password"] {
      padding: 10px;
      margin-bottom: 18px;
      border: 1.8px solid #ccc;
      border-radius: 6px;
      transition: border-color 0.3s ease;
      font-size: 16px;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #764ba2;
      outline: none;
    }

    button {
      padding: 12px;
      background: #764ba2;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: 700;
      cursor: pointer;
      transition: background 0.3s ease;
      font-size: 16px;
    }

    button:hover {
      background: #5a367b;
    }

    .footer-text {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
      color: #777;
    }

    .footer-text a {
      color: #764ba2;
      text-decoration: none;
      font-weight: 600;
    }

    .footer-text a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2>Login Akun</h2>
    <form action="proses_login.php" method="POST">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Masukkan email" required />

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Masukkan password" required />

      <button type="submit">Masuk</button>
    </form>

    <div class="footer-text">
      Belum punya akun? <a href="daftar.php">Daftar di sini</a>
    </div>
  </div>

</body>

</html>