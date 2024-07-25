<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-image: url('img/background.jpg'); /* Ganti dengan path gambar yang Anda inginkan */
      background-size: cover; /* Agar gambar menutupi seluruh area */
      background-repeat: no-repeat; /* Agar gambar tidak diulang */
      background-attachment: fixed;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      position: relative; /* Untuk positioning overlay */
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5); /* Warna overlay dengan opacity 50% */
      z-index: 1; /* Memastikan overlay di atas latar belakang */
    }

    .main-w3layouts {
      background: rgba(255, 255, 255, 0.9); /* Background putih dengan transparansi */
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
      position: relative; /* Untuk positioning di atas overlay */
      z-index: 2; /* Memastikan form di atas overlay */
    }

    h1 {
      color: #333;
      margin-bottom: 30px;
      font-size: 24px;
    }

    .text {
      width: calc(100% - 22px);
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      box-sizing: border-box;
    }

    .text:focus {
      border-color: red; 
      outline: none;
    }

    input[type="submit"] {
      background: red; 
      color: white;
      padding: 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
      transition: background 0.3s;
    }

    input[type="submit"]:hover {
      background: #e68a00; /* Warna lebih gelap saat hover */
    }

    .colorlib-bubbles {
      display: none; /* Menyembunyikan elemen gelembung */
    }
  </style>
</head>
<body>
  <div class="overlay"></div> <!-- Tambahkan elemen overlay -->
  <div class="main-w3layouts wrapper">
    <h1>Login Admin</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        <form action="proses_login.php" method="post">
          <input class="text" type="text" name="username" placeholder="Username" required>
          <input class="text" type="password" name="password" placeholder="Password" required>
          <input type="submit" value="Login">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
