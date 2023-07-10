<?php

$rendSzam1 = "";
$fogyasztas1 = "";
$rendSzam2 = "";
$fogyasztas2 = "";

if (isset($_POST['kuld'])) {
    $rendSzam1 = $_POST['rendszam1'];
    $fogyasztas1 = $_POST['fogyasztas1'];
    $rendSzam2 = $_POST['rendszam2'];
    $fogyasztas2 = $_POST['fogyasztas2'];
}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fogyasztás</title>
</head>

<body>
    <!--11. Feladat: Kérjük be két autó rendszámát és fogyasztását, majd írjuk ki melyik rendszámú autónak
                    több a fogyasztása, esetleg egyenlő -e!
-->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="rendszam1">Rendszám1</label><br>
        <input type="text" name="rendszam1" id="rendSzam1" pattern="[A-z]{3}-[0-9]{3}" placeholder="Kérem adja meg a rendszám1-et!" required><br>
        <label for="fogyasztas1">Fogyasztás1 (liter)</label><br>
        <input type="number" name="fogyasztas1" id="fogyasztas1" step="0.1" placeholder="Kérem adjon meg a fogyasztás1-et literben!" required><br>
        <label for="rendszam2">Rendszám2 (liter)</label><br>
        <input type="text" name="rendszam2" id="rendSzam2" pattern="[A-z]{3}-[0-9]{3}" placeholder="Kérem adja meg a rendszám2-öt!" required><br>
        <label for="fogyasztas2">Fogyasztás2</label><br>
        <input type="number" name="fogyasztas2" id="fogyasztas2" step="0.1" placeholder="Kérem adjon meg a fogyasztás2-öt literben !" required><br>
        <input type="submit" value="KÜLD" name="kuld">
    </form>

    <p>
        <?php
        echo "<br>";
        if ($fogyasztas1 > $fogyasztas2) {
            echo " A $rendSzam1 autó fogyasztása nagyobb.";
        } else if ($fogyasztas2 > $fogyasztas1) {
            echo " A $rendSzam2 autó fogyasztása nagyobb.";;
        } else {
            echo "A két autó fogyasztása egyenlő.!";
        }
        echo "<br>";
        ?>

    </p>
</body>

</html>