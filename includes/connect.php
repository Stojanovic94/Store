<?php
$servername = "localhost";  // Ako koristite lokalni server, koristite localhost
$username = "root";         // Korisničko ime je 'root' u XAMPP-u (osim ako niste postavili lozinku)
$password = "";             // Lozinka je prazna po defaultu u XAMPP-u
$dbname = "prodavnica";     // Ime baze podataka koju ste kreirali

// Kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Konekcija neuspešna: " . $conn->connect_error);
}
?>
