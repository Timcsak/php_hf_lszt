<?php
$felszolgaloNev = "";
$ledolgozottNap = 0;


if (isset($_POST['szamit'])) {
    $felszolgaloNev = $_POST['felszolgNev'];
    $ledolgozottNap = $_POST['napok'];
}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heti bér</title>
</head>

<body>
    <!-- 15. Feladat: A gyorsétterem felszolgálói hetente kapnak fizetést. Mindenki az alapján hány napot
                      dolgozott a héten. Bérük 8.000 Ft / nap. Kérjük be a felszolgáló nevét és hány napon
                      dolgozott a héten, majd írjuk ki a heti fizetését.
-->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="felszolgaloNev">Név</label><br>
        <input type="text" name="felszolgNev" id="felszolgaloNev" placeholder="Kérem adja meg a nevét!" required><br>
        <label for="ledolgozottNapok">Ledolgozott napok száma a héten</label><br>
        <input type="number" name="napok" id="ledolgozott napok száma" placeholder="Kérem adjon meg a héten hány napot dolgozott!" required><br>
        <input type="submit" value="Számítás" name="szamit">
    </form>
    <p>
        <?php
        echo "<br>";
        $fizetes = $ledolgozottNap * 8000;
        if ($ledolgozottNap > 0 && $ledolgozottNap <= 7) {
            echo "<h3> $felszolgaloNev heti fizetése: ". $fizetes . " Ft";
        }
        echo "<br>";
        ?>
    </p>
</body>

</html>