<?php
session_start();

try {

    if (!isset($_POST['submit'])) {
        throw new Exception("Invalid request!");
    }

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === '' || $password === '') {
        throw new Exception("Email/Phone and Password are required!");
    }

    $isEmail = filter_var($username, FILTER_VALIDATE_EMAIL);
    $isPhone = preg_match('/^(?:\+880|01)[0-9]{9}$/', $username);

    if (!$isEmail && !$isPhone) {
        throw new Exception("Enter valid Email or Phone number!");
    }

    if (strlen($password) < 6) {
        throw new Exception("Password must be at least 6 characters!");
    }

    // ✅ DEMO CREDENTIALS
    $demoUser = "admin@test.com";
    $demoPass = "123456";

    if ($username === $demoUser && $password === $demoPass) {
        $_SESSION['status'] = true;
        $_SESSION['username'] = $username;
        header('location: home.php');
        exit();
    } else {
        throw new Exception("Invalid login credentials!");
    }

} catch (Exception $e) {
    echo "<h3 style='color:red;text-align:center;margin-top:40px'>
            ❌ ".$e->getMessage()."
          </h3>";
    echo "<p style='text-align:center'>
            <a href='login.php'>Back to Login</a>
          </p>";
}
?>
