<?php
$euro = 0;
$atvaltottOsszeg = 0;
if (isset($_POST['szamit'])) {
    $euro = $_POST['euro']; 
    $atvaltottOsszeg = $_POST['atvaltottOsszeg'];
    }
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euro átváltás</title>
</head>

<body>
    <!-- 2. Feladat: Programunk kérje be az Euró árfolyamát (1 € hány Ft-ot ér), majd azt, hogy hány eurót
                     akarunk átváltani Ft-ba, majd írja ki, hogy hány Ft az átváltott euró. -->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="euro">Euró árfolyam</label><br>
        <input type="number" name="euro" id="euro" placeholder="Kérem adja meg az euro jelenlegi árfolyamát!" required><br>
        <label for="atvaltottOsszeg">Mennyi eurót kíván átváltani:</label><br>
        <input type="number" name="atvaltottOsszeg" id="atvaltottOsszeg" placeholder="Kérem adjon meg mennyi eurót szeretne átváltani!" required><br>
        <input type="submit" value="Számítás" name="szamit">
    </form>
    <p>
        <?php
        echo "<br>";
        $valtas = $atvaltottOsszeg*$euro;
        echo "<h3> Az átváltott euró $valtas Ft ";
        echo "<br>";
        ?>
    </p>
</body>

</html>