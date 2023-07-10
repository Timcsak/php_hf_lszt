<?php
$eletkor = "";

if (isset($_POST['kuld'])) {
    $eletkor = $_POST['eletkor'];
}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elmúlt 18 éves</title>
</head>

<body>
    <!-- 5. Feladat: Kérjük be a felhasználó életkorát, majd döntsük el, hogy felnőtt –e (18 éves kortól már
            felnőtt)! -->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="eletkor">Életkor</label><br>
        <input type="number" name="eletkor" id="eletkor" placeholder="Kérem adja meg az életkorát!" required><br>
        <input type="submit" value="KÜLD" name="kuld">
    </form>
    <p>
        <?php
        if ($eletkor >= 18) {
            echo "Elmúlt 18 éves: felnőtt!";
        } else {
            echo "Még gyerek, 18 év alatt!";
        }
        echo "<br>";
        ?>
    </p>
</body>

</html>