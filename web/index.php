<!DOCTYPE html>
<html>
<head>
    <title>
        <?php $pageTitle?>
    </title>
    <style>@import '/css/style.css';</style>
</head>

<body>

<div id="loginbar">
    Username:
    <input type="text" name="username">
    Password:
    <input type="password" name="password">
    <input type="submit" value="Login">
</div>
<br/>
<br/>
<div id="container">


    <header>
        <img src = '/images/banner.jpg'>
    </header>


    <nav>
        <ul>
            <li class="navleft"><a href="index.php"> Home</a></li>
            <li><a href="/index.php?action=characters">Characters</a></li>
            <li><a href="/index.php?action=gallery">Gallery</a></li>
            <li class="navright"><a href="/index.php?action=gallery">Store</a></li>
        </ul>
    </nav>
    <div id="main">
        <?php
            if ($_GET['action']=='home') {include __DIR__ . '\views\index.php';}
            if($_GET['action']=='characters') {include __DIR__ . '\views\characters.php';}
        ?>
    </div>
</div>
    <footer>
        <p>
            Copyright 2017&copy;
        </p>
    </footer>

</body>
</html>
