
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "webuts";

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil";
}
$conn->close();