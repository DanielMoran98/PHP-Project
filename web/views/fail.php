<?php
?>

<html>
<head>
    <meta http-equiv="refresh" content="3;URL='..\index.php'" />
<style>
body{
    background-color:#eeeee4;
        }
        h1{
    font-size:40px;
            color:#7B7A63;
            position:fixed;
            margin:auto;
            font-family:tahoma;
            bottom: 50%;
            right:25%;

        }
        .loader{
    position:fixed;
    right: 50%;
    bottom:25%;
    opacity:0.9;
}
        .loader {
    border: 12px solid #7B7A63;
            border-top: 12px solid #4e4c27;
            border-radius: 50%;
            width: 80px;
            height: 80px;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
    0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

</style>
</head>
<body>
<h1>
        Failed to login, username or password doesn't match <br> You will now be redirected back to the website.
</h1>
<div class="loader"></div>
</body>
</html>