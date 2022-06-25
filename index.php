<html lang="en">

<head>
    <title>LOGIN</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: 0;
            font-family: 'Open Sans', sans-serif;
        }

        .container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px 25px;
            width: 300px;
            background-color: #00CCFF;
            border-radius: 10px;
        }

        .container h1 {
            text-align: center;
            color: Black;
            margin-bottom: 30px;
            text-transform: uppercase;
            border-bottom: 4px solid black;
        }

        .container label {
            color: black;
            font-size: 20;
        }

        .container form input {
            width: 100%;
            padding: 3px 5px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            color: black;
            font-size: 20px;
        }

        .container form button {
            width: 100%;
            height: 50px;
            padding: 5px 0;
            border: none;
            font-size: 18px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="ceklogin.php" method="POST">
            <label>USERNAME</label><br>
            <input type="text" name="username" placeholder="username"><br>
            <label for="">PASSWORD</label><br>
            <input type="password" name="password" placeholder="password"><br>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>

</html>