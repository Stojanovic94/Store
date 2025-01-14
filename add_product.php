<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Proizvod</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Dodaj novi proizvod</h2>
        <form action="add_product.php" method="post">
            <label for="naziv">Naziv:</label>
            <input type="text" name="naziv" id="naziv" required>
            
            <label for="kategorija">Kategorija:</label>
            <select name="kategorija" id="kategorija" required>
                <?php
                include 'connect.php';
                $sql = "SELECT id, naziv FROM kategorija";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['id']}'>{$row['naziv']}</option>";
                }

                $conn->close();
                ?>
            </select>

            <label for="cena">Cena (RSD):</label>
            <input type="number" name="cena" id="cena" min="1" step="0.01" required>

            <input type="submit" value="Dodaj Proizvod">
        </form>
        <a href="index.php">Nazad na početnu stranicu</a>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'includes/connect.php';

        $naziv = trim($_POST['naziv']);
        $kategorija = $_POST['kategorija'];
        $cena = $_POST['cena'];

        if (empty($naziv) || empty($kategorija) || empty($cena)) {
            echo "<p>Sva polja moraju biti popunjena!</p>";
        } elseif (!is_numeric($cena) || $cena <= 0) {
            echo "<p>Cena mora biti validan broj veći od 0!</p>";
        } else {
            $sql = "INSERT INTO proizvod (naziv, kategorija_id, cena) VALUES ('$naziv', '$kategorija', '$cena')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Proizvod je uspešno dodat!</p>";
            } else {
                echo "<p>Greška: " . $conn->error . "</p>";
            }
        }

        $conn->close();
    }
    ?>
</body>
</html>
