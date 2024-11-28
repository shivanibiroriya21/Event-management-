<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #f4f4f9;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px 30px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"] {
            height: 40px;
            margin-bottom: 15px;
            padding: 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .gender-options {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .gender-options label {
            font-weight: normal;
            color: #555;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        button {
            height: 45px;
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
            color: #00ced1;
        }
        .error-message {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #d9534f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form method="POST">
            <label for="username">User Name</label>
            <input type="text" id="username" name="n" placeholder="Enter your username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="p" placeholder="Enter your password" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="e" placeholder="Enter your email" required>
            
            <div class="gender-options">
                <label>Select Gender:</label>
                <label><input type="radio" name="g" value="Male" required> Male</label>
                <label><input type="radio" name="g" value="Female" required> Female</label>
            </div>
            
            <button type="submit" name="submit" value="Register">Register</button>
        </form>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'project');
        if (isset($_REQUEST['submit'])) {
            $u = $_REQUEST['n'];
            $p = $_REQUEST['p'];
            $e = $_REQUEST['e'];
            $g = $_REQUEST['g'];

            $q = "INSERT INTO uinfo VALUES('$u', '$p', '$e', '$g')";
            $x = mysqli_query($con, $q);
            if ($x > 0) {
                header('location:login.php');
            } else {
                echo "<div class='error-message'>Could not register. Please try again.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
