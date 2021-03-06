<?php
/*
 *
 * DONE: Several Non Trivial Features working
 * DONE: Form data received and confirmed back
 * DONE: User and Pass login
 * DONE: Good directory Structure
 * DONE: 2 or more classes
 * DONE: Finish Sources
 * DONE: 2 or more tables
 * TODO: Upload
 *
*/


?>

<?php

$pageTitle = 'Home';
require_once __DIR__ . '/../vendor/autoload.php';

use Itb\WebApplication;

$app = new WebApplication();

session_start();
if(isset($_SESSION['loggedIn']) == false )
{
    $_SESSION['loggedIn'] = false;
}

//$_SESSION['loggedIn'] = false;

$app->tryLogin();

?>


<!DOCTYPE html>

<html>
<head>
    <link rel="icon" href="images\favicon.ico">
    <title>
        Merchant of Venice
    </title>
    <style>@import '/css/style.css';</style>
</head>

<body>

<div id="loginbar" >

    <form method="post" <?php if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){echo 'style="display:none";';} ?>>
    Username:
        <input type="text" name="username">
        Password:
        <input type="password" name="password">
        <input type="submit" value="Login" onclick="">
    </form >

        <span <?php if( isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == false){echo 'style="display:none";';} ?>>
              Logged in as '<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?>' <a href = 'views/logout.php' style="font-weight:bold; color:white; text-decoration: underline">Logout</a>
        </span>

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
            <li class="<?php if(!isset($_GET['action']) || $_GET['action'] == 'home'){ echo 'activePage';}  ?> navleft"><a href="index.php"> Home</a></li>
            <li <?php if(isset($_GET['action']) && $_GET['action'] == 'characters'){ echo 'class="activePage"';}  ?>><a href="/index.php?action=characters">Characters</a></li>
            <li <?php if(isset($_GET['action']) && $_GET['action'] == 'gallery'){ echo 'class="activePage"';}  ?>><a href="/index.php?action=gallery">Gallery</a></li>
            <li class="<?php if(isset($_GET['action']) && $_GET['action'] == 'store'){ echo 'activePage';}  ?> navright"><a href="/index.php?action=store">Store</a></li>
        </ul>
    </nav>
    <div id="main">
        <?php
            $app->run();
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
