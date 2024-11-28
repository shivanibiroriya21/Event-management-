<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 350px;
            padding: 20px;
            border: 1px solid #87cefa;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        .container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 15px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }
        input {
            margin-bottom: 15px;
            height: 40px;
            padding: 8px 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            height: 40px;
            background-color: #00ced1;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }
        button:hover {
            background-color: #333;
            color: #87cefa;
        }
        .message {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #d9534f;
        }
        .register-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #00ced1;
            text-decoration: none;
            font-size: 14px;
        }
        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST">
            <label for="username">User Name</label>
            <input type="text" id="username" name="u" placeholder="Enter your username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="p" placeholder="Enter your password" required>
            
            <button type="submit" name="submit" value="Login">Login</button>
        </form>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'project');
        if (isset($_REQUEST['submit'])) {
            $u = $_REQUEST['u'];
            $p = $_REQUEST['p'];
            $q = "SELECT * FROM uinfo WHERE uname='$u' AND pass='$p'";
            $rs = mysqli_query($con, $q);
            $x = mysqli_num_rows($rs);
            if ($x > 0) {
                session_start();
                $_SESSION['loguser'] = $u;
                header('location:index.php');
            } else {
                echo "<div class='message'>Invalid username or password.</div>";
                echo "<a class='register-link' href='Register.php'>Register Now</a>";
            }
        }
        ?>
    </div>
</body>
</html>
