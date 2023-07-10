<?php
$szam1 = 0;
$szam2 = 0;

if (isset($_POST['szamit'])) {
    $szam1 = $_POST['szam1'];
    $szam2 = $_POST['szam2'];

}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Két szám összege, 3-mal és 5-tel osztható </title>
</head>

<body>
    <!-- 6. Feladat: Kérj be két számot, majd döntsd el, hogy összegük osztható –e 5-tel és 3-mal is maradék
                    nélkül!-->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="szam1">Szám1</label><br>
        <input type="number" name="szam1" id="szam1" placeholder="Kérem adjon meg egy számot!" required><br>
        <label for="szam2">Szám2</label><br>
        <input type="number" name="szam2" id="szam2" placeholder="Kérem adjon meg egy másik számot!" required><br>
        <input type="submit" value="Számítás" name="szamit">
    </form>
    <p>
        <?php
        echo "<br>";
        $osszeg = $szam1 + $szam2;
        if ($osszeg%3==0 && $osszeg%5==0){ 
            echo "<h3>Ennek a két számnak az összege 3-mal és 5-tel osztható: $szam1, $szam2";
        } else {
            echo "<p>Ennek a két számnak az összege NEM osztható 3-mal és 5-tel: $szam1, $szam2";
        }
        echo "<br>";
        ?>
    </p>
</body>

</html>