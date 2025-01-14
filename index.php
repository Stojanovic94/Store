<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodavnica</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Dobrodošli u našu prodavnicu</h1>
    </header>
    <main>
        <h2>Proizvodi</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Naziv</th>
                    <th>Kategorija</th>
                    <th>Cena</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'includes/connect.php';


                $sql = "SELECT proizvod.id, proizvod.naziv, kategorija.naziv AS kategorija, proizvod.cena 
                        FROM proizvod 
                        JOIN kategorija ON proizvod.kategorija_id = kategorija.id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['naziv']}</td>
                                <td>{$row['kategorija']}</td>
                                <td>{$row['cena']} RSD</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Nema proizvoda.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
        <a class="button" href="add_product.php">Dodaj novi proizvod</a>
    </main>
    <footer>
        <p>Autor: Vaše Ime Prezime | Indeks: 12345</p>
    </footer>
</body>
</html>
