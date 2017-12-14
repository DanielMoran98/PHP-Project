<?php
require_once __DIR__ . '/../../src/Database.php';

if($_SESSION['loggedIn'] == false)
{
    header('Location: views/accessDenied.php');
}
?>
<head>
    <style>@import 'css/store.css';</style>
</head>

<h1>Shop</h1>
<p>Welcome to our members only shop! Here you can find various pieces of Merchant of Venice merchandise, all of the highest quality
    , and at the best prices. Along with information on upcoming live screenings of The Merchant of Venice, which are
    truly amazing experiences.
</p>
<?php


try{
    $db1 = new Database();

    $db1->createTableProducts();

    $db1->insertProduct('Shakespeare t-shirt', '&euro;28.00');
    $db1->insertProduct('Hard copy of The Merchant of Venice', '&euro;24.99');
    $db1->insertProduct('Soft copy of The Merchant of Venice', '&euro;19.99');
    $db1->insertProduct('Shakespeare Portrait Painting', '&euro;75.00');



    print '<table>';
    print '<th colspan="3">Merchandise</th>';
    print '<tr><th>ID</th> <th>Product </th><th>Price(&euro;)</th></tr>';

    $products = $db1->getAllProducts();
    foreach($products as $product) {
        $product->printProduct();
    }
    print'</table>';
    $db1->dropTableProducts();



} catch (\PDOException $e) {
    print 'error working with PDO database';
}


print '<br><br><br>';

####################

try{
    $db = new Database();

    $db->createTableProducts();

    $db->insertProduct('3Arena, Dublin', '3/01/2018');
    $db->insertProduct('Olympia Theater, Dublin', '27/02/2018');
    $db->insertProduct('The Helix,Dublin', '15/03/2018');
    $db->insertProduct('Abbey Theater, Dublin', '21/05/2018');



    print '<table>';
    print '<th colspan="3">Upcoming Shows</th>';
    print '<tr><th>ID</th> <th>Location </th><th>Date</th></tr>';

    $products = $db->getAllProducts();
    foreach($products as $product) {
        $product->printProduct();
    }
    print'</table>';
    $db->dropTableProducts();



} catch (\PDOException $e) {
    print 'error working with PDO database';
}
?>
<br><br><br><br><br><br>
