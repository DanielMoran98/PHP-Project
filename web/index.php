<?php
/*
 *
 * TODO: Several Non Trivial Features working
 * TODO: Form data received and confirmed back
 * TODO: User and Pass login
 * TODO: Good directory Structure
 * TODO: 2 or more classes
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


//$_SESSION['loggedIn'] = false;

$app->tryLogin();
//if(isset($_GET['username']) && $_GET['username'] == 'user' && isset($_GET['username']) && $_GET['password'] == 'pass')
//{
//    $_SESSION['loggedIn'] = true;
//}
//if(isset($_GET['username']))
//{

//}
?>


<!DOCTYPE html>

<html>
<head>
    <title>
        <?php echo $pageTitle?>
    </title>
    <style>@import '/css/style.css';</style>
</head>

<body>
<?php if($_SESSION['loggedIn'] == false){echo "false";}
        if($_SESSION['loggedIn'] == true){echo "true";}
      ?>
<div id="loginbar" >

    <form method="post" <?php if($_SESSION['loggedIn'] == true){echo 'style="display:none";';} ?>>
    Username:
        <input type="text" name="username">
        Password:
        <input type="password" name="password">
        <input type="submit" value="Login" onclick="">
    </form>


    <form method="post" <?php if($_SESSION['loggedIn'] == false){echo 'style="display:none";';} ?>>
        Logged in as
        <?php
            $user = 'user'  ;
        echo"$user"; ?>
        <input type="hidden" name="logout" value="true">
        <input type="submit" value="Logout" onclick="<?php $app->logout(); ?>">
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
            <li class="navright"><a href="/index.php?action=store">Store</a></li>
        </ul>
    </nav>
    <div id="main">
        <?php


            $app->run();

            //$action = filter_input(INPUT_GET, 'action');
            //if($action == null){require_once __DIR__ . '\views\home.php';}
            //if($action == 'characters'){include __DIR__ . '\views\characters.php';}
            //if($action == 'home'){include __DIR__ . 'index.php';}
            //if($action == 'gallery'){include __DIR__ . '\views\gallery.php';}


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
