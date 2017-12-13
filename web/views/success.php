<?php session_start();?>
<html>
<head>
    <meta http-equiv="refresh" content="2;URL='..\index.php'" />
<style>
    @import '/css/success.css';


</style>
</head>
<body>
<br><br><br><br>

    <h1>
        You have been successfully logged in as <span style="color:darkred"> <?php echo $_SESSION['username'] ?></span>! <br> You will now be redirected back to the website.
    </h1>
    <div class="loader"></div>

<br><br><br><br>
</body>
</html>