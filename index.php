<?php
$page = "home";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;600;700&display=swap" rel="stylesheet">
<style>
    .menu {
        width: 100%;
        height: 50px;
        margin: 0;
        padding: 0;
    }
    .body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
    }
</style>
</head>
<body>
    <div class="menu">
        <?php include 'menu.php';?>
    </div>
    <div class="body">
        <?php include $page . ".php";?>
    </div>
</body>
</html>