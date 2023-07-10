<?php

$helysegNev = "";
$lelekSzam = "";


if (isset($_POST['kuld'])) {
    $helysegNev = $_POST['helysegNev'];
    $lelekSzam = $_POST['lelekSzam'];
}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Településtípus meghatározása</title>
</head>

<body>
    <!--9. Feladat: Írj programot, amely bekér a felhasználótól egy helységnevet, valamint ennek a
                    helységnek a lélekszámát, és a megadott lélekszámtól függően kiírja, hogy az adott
                    helység milyen településtípusba tartozik.
                    a. ha a lélekszám kevesebb, mint 5000, akkor község
                    b. ha a lélekszám legalább 5000, de kevesebb, mint 20 000, akkor kisváros
                    c. ha a lélekszám legalább 20 000, de kevesebb, mint 100 000, akkor középváros
                    d. ha a lélekszám legalább 100 000, de kevesebb, mint 1 000 000, akkor nagyváros
                    e. ha a lélekszám legalább 1 000 000, akkor metropolis
                    f. ha a felhasználó 0 vagy annál kisebb számot ad meg, a program írja ki, hogy
                    "Hibás adatbevitel"!
-->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="helysegNev">Helységnév</label><br>
        <input type="text" name="helysegNev" id="helysegNev" placeholder="Kérem adja meg a település nevét!" required><br>
        <label for="lelekSzam">Lélekszám</label><br>
        <input type="number" name="lelekSzam" id="lelekSzam" placeholder="Kérem adja meg a településen élő lakosság számát!" required><br>
        <input type="submit" value="KÜLD" name="kuld">
    </form>

    <p>
        <?php
        echo "<br>";
        if ($lelekSzam > 0 && $lelekSzam < 5000) {
            echo "$helysegNev: község";
        } else if (($lelekSzam >= 5000 && $lelekSzam < 20000)) {
            echo "$helysegNev: kisváros";
        } else if ($lelekSzam >= 20000 && $lelekSzam < 100000) {
            echo "$helysegNev: középváros";
        } else if ($lelekSzam >= 100000 && $lelekSzam < 1000000) {
            echo "$helysegNev: nagyváros";
        } else if ($lelekSzam >= 1000000) {
            echo "$helysegNev: metropolis";
        } else {
            echo "Hibás adatbevitel";
        }
        echo "<br>";
        ?>

    </p>
</body>

</html>