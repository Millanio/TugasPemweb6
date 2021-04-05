<?php 
// Deklarasi variabel
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "myDB";
// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Cek koneksi
if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}
// Query untuk menghapus data
$sql = "DELETE FROM buku_tamu WHERE ID_BT=2";

if (mysqli_query($conn, $sql)) {
    echo "Delete successfully";
} else {
    echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>