<?php
session_start();
if(!isset($_SESSION['status'])){
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home | BestCart</title>
</head>
<body>

<h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> 🎉</h1>

<a href="logout.php">Logout</a>

</body>
</html>
