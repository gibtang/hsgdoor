<?php
session_start();
if(!empty($_SESSION['user']))
{
    header('Location: others.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>HSG Door Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width">
    <link rel="apple-touch-icon" href="http://dl.dropbox.com/u/3361521/hackerspace/icon.png" />
    <link href="css/bootstrap.min.css?t=1363608733" rel="stylesheet" media="screen">
    <link href="css/style.css?t=1363608733" rel="stylesheet" media="screen">
</head>
<body>
<div class="container">
    <div id="alert-box" class="alert" style="display:none;"></div>
    <div class="pin-display">
        <input type="password" name="pin" class="pin-div" style="" readonly="true" maxlength="6" />
    </div>
    <div class="keypad">
        <button role="num" class="btn btn-large">1</button>
        <button role="num" class="btn btn-large">2</button>
        <button role="num" class="btn btn-large">3</button>
        <button role="num" class="btn btn-large">4</button>
        <button role="num" class="btn btn-large">5</button>
        <button role="num" class="btn btn-large">6</button>
        <button role="num" class="btn btn-large">7</button>
        <button role="num" class="btn btn-large">8</button>
        <button role="num" class="btn btn-large">9</button>
        <button role="clear" class="btn btn-danger btn-large">CLR</button>
        <button role="num" class="btn btn-large">0</button>
        <button role="other_logins" class="btn btn-warning btn-large">
            <i class="icon-user"></i>
        </button>
    </div>
    <img src="./img/ajax-loader.gif" style="display:none;" />
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/app.min.js?t=1363608733"></script>
</body>
</html>