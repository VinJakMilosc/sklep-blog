<?php
include "db_connection.php";

// pobranie danych z formularza
$title = $_POST ["title"];
$price = $_POST ["price"];



// przygotowanie sql-insert into
$sql = "INSERT INTO `produkt` (`name`, `price`) VALUES ('$title', $price);";

// sql wykonanie sql
if($conn->query($sql) === TRUE) {
        echo "dodałeś ogłoszenie";
} else {
    echo "coś poszło nie tak :<";
}


$conn->close()

?>

