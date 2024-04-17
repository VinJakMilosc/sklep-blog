    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloguś";

$conn=new mysqli($servername, $username, $password, $dbname);
if (conn->connect_error) {
   die("połączenie nieudane" . $conn->connect_error); }

//pobranie danych z formularza
$tittle = $_POST['tittle'];
$description = $_POST['description'];

//przygotowanie kwerendy
$sql = "INSERT INTO przepisy(nazwa_ptrzepisu, opis_przepisu) VALUES ('$tittle', '$description')";

//wykonanie kwerendy
if ($conn->query($sql) === TRUE) {
    echo "przepis został dodany";
} else {
    echo "coś poszło nie tak";
}

//zakmniEcie połączenia z db
$conn->close();
?>