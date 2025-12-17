<?php
session_start();
if(isset($_SESSION['status']) === true){
    header('location: home.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | BestCart</title>
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />

    <style>
        *{font-family: sans-serif;}
        .logo{display:flex;}
        .logoText{color:#00acd4;}
        .navLink{display:flex;color:#EC009B;text-decoration:none;gap:5px;}
        .logoArea{display:flex;justify-content:space-evenly;align-items:center;}
        .logoArea input{border-radius:5px;border:1px solid #6d7482;color:#858D9E;padding:20px;width:320px;}
        .searchBtn{background-color:#EC009B;color:white;padding:12px;border-radius:5px;border:none;}
        .pink{background-color:#fde6f4;height:40px;padding:5px;display:flex;align-items:center;gap:16px;justify-content:flex-end;padding-right:50px;}
        .loginBanner{display:flex;justify-content:space-evenly;align-items:center;margin:40px 0;}
        .loginBox{background:#fde6f4;padding:25px;border-radius:10px;width:320px;}
        .textField{width:100%;padding:12px;border-radius:5px;border:1px solid #EC009B;}
        #loginBtn{width:100%;background:#EC009B;color:white;border:none;padding:12px;border-radius:8px;margin-top:15px;cursor:pointer;}
        .regLine{display:flex;gap:6px;margin-top:10px;}
        .Register{text-decoration:none;color:#EC009B;font-weight:bold;}
        .signBanner{color:#EC009B;}
        .signText{color:#6d7482;}
    </style>
</head>

<body style="margin:0">

<nav class="pink">
    <a class="navLink" href="#"><i class="hgi hgi-stroke hgi-home-09"></i>Home</a>
    <a class="navLink" href="#"><i class="hgi hgi-stroke hgi-customer-service-01"></i>Help</a>
</nav>

<section class="logoArea">
    <div class="logo">
        <img src="cart.png" height="70">
        <h1 class="logoText">BestCart</h1>
    </div>
</section>

<section class="loginBanner">
    <div>
        <img src="loginpic.png" width="250">
    </div>

    <div>
        <h1 class="signBanner">Sign In</h1>
        <p class="signText">Access best products & deals in Bangladesh</p>
    </div>

    <div class="loginBox">
        <form action="loginCheck.php" method="POST">
            <p>Email / Phone</p>
            <input class="textField" type="text" name="username" placeholder="Email or Phone">

            <p>Password</p>
            <input class="textField" type="password" name="password" placeholder="Password">

            <button id="loginBtn" type="submit" name="submit">Sign In</button>
        </form>

        <div class="regLine">
            <p>New here?</p>
            <a class="Register" href="#">Register</a>
        </div>
    </div>
</section>

</body>
</html>
