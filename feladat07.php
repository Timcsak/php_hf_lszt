<?php

$dolgozo1 = "";
$beosztas1 = "";
$fizetes1 = "";
$dolgozo2 = "";
$beosztas2 = "";
$fizetes2 = "";

if (isset($_POST['kuld'])) {
    $dolgozo1 = $_POST['nev1'];
    $beosztas1 = $_POST['beoszt1'];
    $fizetes1 = $_POST['fiz1'];
    $dolgozo2 = $_POST['nev2'];
    $beosztas2 = $_POST['beoszt2'];
    $fizetes2 = $_POST['fiz2'];
}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Két dolgozó fizetés összehasonlítása</title>
</head>

<body>
    <!--7. Feladat: Kérjuk be két dolgozó nevét, beosztását és fizetését, majd írjuk ki a többet kereső
                    munkavállaló minden adatát egymás mellé! Lehetséges, hogy ugyanannyit keresnek,
                    ebben az esetben jelenítsük meg: „Fizetésük egyenlő.”!
-->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="nev1">Dolgozó1</label><br>
        <input type="text" name="nev1" id="nev1" placeholder="Kérem adja meg a nevét!" required><br>
        <label for="beoszt1">Beosztás1</label><br>
        <input type="text" name="beoszt1" id="beosztas1" placeholder="Kérem adja meg a beosztását!" required><br>
        <label for="fiz1">Fizetés1</label><br>
        <input type="number" name="fiz1" id="fizetes1" placeholder="Kérem adjon meg a fizetését!" required><br>
        <label for="nev2">Dolgozó2</label><br>
        <input type="text" name="nev2" id="nev2" placeholder="Kérem adja meg a nevét!" required><br>
        <label for="beoszt1">Beosztás2</label><br>
        <input type="text" name="beoszt2" id="beosztas2" placeholder="Kérem adja meg a beosztását!" required><br>
        <label for="fiz2">Fizetés2</label><br>
        <input type="number" name="fiz2" id="fizetes2" placeholder="Kérem adjon meg a fizetését!" required><br>
        <input type="submit" value="KÜLD" name="kuld">
    </form>

    <p>
        <?php
        echo "<br>";
        if ($fizetes1 > $fizetes2) {
            echo $dolgozo1 . ", $beosztas1" . ", $fizetes1";
        } else if ($fizetes2 > $fizetes1) {
            echo $dolgozo2 . ", $beosztas2" . ", $fizetes2";
        } else {
            echo "Fizetésük egyenlő.!";
        }
        echo "<br>";
        ?>

    </p>
</body>

</html>