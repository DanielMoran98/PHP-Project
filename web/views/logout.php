<?php
session_start();

$_SESSION['loggedIn'] = false;
?>
<html>
<head>
    <meta http-equiv="refresh" content="2;URL='..\index.php'" />
    <style>
        @import '/css/logout.css';

    </style>
</head>
<body>
<br><br><br><br>

<h1>
    You have been successfully logged out! <br> You will now be redirected back to the website.
</h1>
<div class="loader"></div>

<br><br><br><br>
</body>
</html>