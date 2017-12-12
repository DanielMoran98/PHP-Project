<?php
if($_SESSION['loggedIn'] == false)
{
    header('Location: views/accessDenied.php');
}
?>
<head>
    <style>@import 'css/store.css';</style>
</head>
<table>
    <tr>
        <th>Id</th> <th>Type</th> <th>Name</th> <th>Description</th> <th>Price</th>
    </tr>

    <tr>
        <td>1</td>  <td>Cup</td> <td>Black cup</td> <td>A black cup with an image of shakespeare on it</td> <td>4.99</td>
    </tr>
</table>