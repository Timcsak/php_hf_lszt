<?php

$tortSzam1 = "";
$tortSzam2 = "";

if (isset($_POST['kuld'])) {
    $tortSzam1 = $_POST['tortSzam1'];
    $tortSzam2 = $_POST['tortSzam2'];
}   
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Két törtszám vizsgálata</title>
</head>

<body>
    <!--8. Feladat: Készíts alkalmazást, amely bekér két tört számot, majd eldönti, hogy melyik a
                    kisebb/nagyobb, esetleg egyenlő –e a két szám!
-->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="tortSzam1">Törtszám1</label><br>
        <input type="number" name="tortSzam1" id="tortszam1" step="0.1" placeholder="Kérem adja meg egy törtszámot!" required><br>
        <label for="tortSzam2">Törtszám2</label><br>
        <input type="number" name="tortSzam2" id="tortszam2" step="0.1" placeholder="Kérem adjon meg egy másik törtszámot!" required><br>
        <input type="submit" value="KÜLD" name="kuld">
    </form>

    <p>
        <?php
        echo "<br>";
        if ($tortSzam1 > $tortSzam2) {
            echo "A $tortSzam1 a nagyobb";
        } else if ($tortSzam2 > $tortSzam1) {
            echo "A $tortSzam2 a nagyobb";
        } else {
            echo "A két törtszám egyenlő!";
        }
        echo "<br>";
        ?>

    </p>
</body>

</html>