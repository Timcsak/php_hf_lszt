<?php
$szam1 = 0;
$szam2 = 0;
$szam3 = 0;
if (isset($_POST['szamit'])) {
    $szam1 = $_POST['szam1'];
    $szam2 = $_POST['szam2'];
    $szam3 = $_POST['szam3'];
}
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Átlag számítás</title>
</head>

<body>
    <!-- 1. Feladat: Kérj be 3 egész számot, majd írd ki az átlagukat!-->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <div>
        <p>1. Feladat: Kérj be 3 egész számot, majd írd ki az átlagukat!</p>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="szam1">Szám1</label><br>
            <input type="number" name="szam1" id="szam1" step="1" placeholder="Kérem adjon meg egy számot!" required><br>
            <label for="szam2">Szám2</label><br>
            <input type="number" name="szam2" id="szam2" step="1" placeholder="Kérem adjon meg egy másik számot!" required><br>
            <label for="szam3">Szám3</label><br>
            <input type="number" name="szam3" id="szam3" step="1" placeholder="Kérem adjon meg egy harmadik számot!" required><br>
            <input type="submit" value="Számítás" name="szamit">
        </form>
    </div>
    
    <p>
        <?php
        echo "<br>";
        $osszeg = $szam1 + $szam2 + $szam3;
        echo "<h3>A három szám átlaga: " .number_format(($osszeg / 3),2);
        echo "<br>";
        ?>
    </p>
    
</body>

</html>