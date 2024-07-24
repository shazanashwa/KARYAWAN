<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #f5f5f5, #e0e0e0);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-image: url('img/background.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .main-w3layouts {
      background: rgba(255, 255, 255, 0.9);
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
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
      border-color: #ff9933;
      outline: none;
    }

    input[type="submit"] {
      background: #ff9933;
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
      background: #e68a00;
    }
  </style>
</head>
<body>
  <div class="main-w3layouts">
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
