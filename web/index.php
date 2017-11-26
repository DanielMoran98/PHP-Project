<?php $pageTitle = 'Home'?>

<!DOCTYPE html>
<html>
<head>
    <title>
        <?php echo $pageTitle?>
    </title>
    <style>@import '/css/style.css';</style>
</head>

<body>

<div id="loginbar">
    <form>
    Username:
        <input type="text" name="username">
        Password:
        <input type="password" name="password">
        <input type="submit" value="Login" onclick="">

    </form>
</div>
<br/>
<br/>
<div id="container">


    <header>
        <a href="index.php">
            <img src = '/images/banner.jpg'>
        </a>
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

            $action = filter_input(INPUT_GET, 'action');
            if($action == null){require_once __DIR__ . '\views\home.php';}
            if($action == 'characters'){include __DIR__ . '\views\characters.php';}
            if($action == 'home'){include __DIR__ . 'index.php';}
            if($action == 'gallery'){include __DIR__ . '\views\gallery.php';}


            //if($_GET['action']=='characters') {include __DIR__ . '\views\characters.php';}
            //if ($_GET['action']=='home') {include __DIR__ . 'index.php';}
            //if ($_GET['action']=='gallery') {include __DIR__ . '\views\gallery.php';}
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
