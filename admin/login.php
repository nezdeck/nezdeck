<?php
session_start();
include 'conn.php';

if (isset($_SESSION['msg'])) {
    $_SESSION['msg'] = '';
}
if (isset($_SESSION['auth'])) {
    header("Location: contacts.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE user_name='$username' AND password='$password' AND role = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['auth'] = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header("Location: contacts.php");
        exit();
    } else {
        $_SESSION['msg'] = 'Invalid username or password.';
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nezdeck | Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .login-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #588157;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #588157;
        }
    </style>
    <div class="login-container">
        <div style="text-align: center; padding:10px;">
            <img height="50px" src="../images/logo-v1.jpg" alt="Logo">
        </div>
        <h2 style="text-align: center;">Sign In</h2>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <p style="color: red;font-size:.9rem;padding-bottom:5px;"><?php echo isset($_SESSION['msg']) ? $_SESSION['msg']:""; ?></p>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</body>

</html>

<?php
unset($_SESSION['msg']);
?>