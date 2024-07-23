<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-image: url('img/background.jpg'); /* Ganti dengan path gambar yang Anda inginkan */
            background-size: cover; /* Agar gambar menutupi seluruh area */
            background-repeat: no-repeat; /* Agar gambar tidak diulang */
            background-attachment: fixed;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .main-w3layouts {
            background: rgba(255, 255, 255, 0.9); /* Background putih dengan transparansi */
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
            border-color: #ff9933; /* Border oranye saat fokus */
            outline: none;
        }
        input[type="submit"] {
            background: #ff9933; /* Tombol oranye */
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
