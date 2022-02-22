<?php
if (!isset($_GET['page'])) {
    $page = 'home';
} else {
    $url = $_GET['page'];
    $page = $url;
}
?>

<head>
<style>
    body, html {
        margin: 0;
        padding: 0;
        font-family: 'Source Sans Pro', sans-serif;
    }
    .menu {
        width: 100%;
        background-color: rgba(67, 181, 164, 0.25);
    }
    .menuList {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .menuItem {
        margin: 0;
        padding: 0;
        display: inline-block;
        float: right;
    }
    .menuItem>a {
        display: flex;
        text-decoration: none;
        color: white;
        font-weight: 600;
        font-size: 100%;
        margin: 0;
        padding: 0;
        width: 100px;
        height: 50px;
        align-items: center;
        justify-content: center;
    }
    .logo {
        float: left;
        width: 50px;
        height: 50px;
    }
    .logo>a {
        width: 50px;
        height: 50px;
        margin: 0;
        padding: 0;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .logoimg {
        width: 30px;
        height: 30px;
    }
</style>
</head>
<body>
    <div class="menu">
        <ul class="menuList">
            <li class="logo"><a href="index.php?page=home"><img class="logoimg" src="logo.png"></a></li>
            <li class="menuItem"><a href="index.php?page=catalogue">CATALOGUE</a></li>
        </ul>
    </div>
</body>