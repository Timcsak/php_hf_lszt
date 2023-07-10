<?php
$szuletesiHely = "";

if (isset($_POST['kuld'])) {
    $szuletesiHely = $_POST['szulHely'];
}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Születési hely</title>
</head>

<body>
    <!-- 16. Feladat: Kérjük be a felhasználó születési helyét, majd döntsük el, hogy vidéken vagy a
             fővárosban született! 
-->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="szuletesiHely">Születési hely</label><br>
        <input type="text" name="szulHely" id="szuletesihely" placeholder="Kérem adja meg a születési helyét!" required><br>
        <input type="submit" value="KÜLD" name="kuld">
    </form>
    <p>
        <?php
        if ($szuletesiHely == "Budapest") {
            echo "A fővárosban született!";
        } else {
            echo "Vidéken született!";
        }
        echo "<br>";
        ?>

    </p>
</body>

</html>