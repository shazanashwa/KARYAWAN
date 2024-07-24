<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #f5f5f5, #e0e0e0);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .main-w3layouts {
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    h1 {
      margin-bottom: 1rem;
      color: #333;
      font-weight: 700;
      font-size: 2rem;
    }

    .agileits-top {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .agileits-top input[type="text"],
    .agileits-top input[type="password"] {
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 0.8rem;
      margin: 0.5rem 0;
      width: 100%;
      max-width: 300px;
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }

    .agileits-top input[type="text"]:focus,
    .agileits-top input[type="password"]:focus {
      border-color: #007bff;
      outline: none;
    }

    .agileits-top input[type="submit"] {
      background-color: #007bff;
      border: none;
      color: white;
      padding: 0.8rem 1.5rem;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .agileits-top input[type="submit"]:hover {
      background-color: #0056b3;
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
