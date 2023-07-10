<?php
$aOldal = 0;
$bOldal = 0;
$cOldal = 0;

if (isset($_POST['kuld'])) {
    $aOldal = $_POST['aOldal'];
    $bOldal = $_POST['bOldal'];
    $cOldal = $_POST['cOldal'];
}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Háromszög szerkeszthető</title>
</head>

<body>
    <!-- 15. Feladat: A gyorsétterem felszolgálói hetente kapnak fizetést. Mindenki az alapján hány napot
                      dolgozott a héten. Bérük 8.000 Ft / nap. Kérjük be a felszolgáló nevét és hány napon
                      dolgozott a héten, majd írjuk ki a heti fizetését.
-->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="aOldal">A oldal</label><br>
        <input type="number" name="aOldal" id="aOldal" placeholder="Kérem adjon meg a háromszög A oldalát!" required><br>
    <label for="bOldal">B oldal</label><br>
        <input type="number" name="bOldal" id="bOldal" placeholder="Kérem adjon meg a háromszög B oldalát!" required><br>
        <label for="cOldal">C oldal</label><br>
        <input type="number" name="cOldal" id="cOldal" placeholder="Kérem adjon meg a háromszög C oldalát" required><br>
        <input type="submit" value="KÜLDÉS" name="kuld">
    </form>
    <p>
        <?php
        echo "<br>";
      
        if ((($aOldal+$bOldal)>$cOldal) && (($aOldal+$cOldal)>$bOldal) && (($bOldal+$cOldal)>$aOldal)) {
            echo "<h3> A háromszög szerkeszthető";
        } else {
            echo "<h3> A háromszög NEM szerkeszthető";
        }
        echo "<br>";
        ?>
    </p>
</body>

</html>