<?php
$aOldal = 0;
$bOldal = 0;
if (isset($_POST['szamit'])) {
    $aOldal = $_POST['aOldal']; 
    $bOldal = $_POST['bOldal']; 
    }
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Téglalap kerület, terület számítása</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- 4. Feladat: Kérjük be a téglalap két oldalát és írjuk ki a kerületét, területét!  -->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="aOldal">A téglalap "a" oldala</label><br>
        <input type="number" name="aOldal" id="aOldal"  placeholder='Kérem adja meg a kocka "a" oldalát!' required><br>
        <label for="bOldal">A kocka "b" oldala</label><br>
        <input type="number" name="bOldal" id="bOldal"  placeholder='Kérem adja meg a kocka "b" oldalát!' required><br>
        <input class="btn btn-primary "type="submit" value="Számítás" name="szamit">
    </form>
    <p>
        <?php
        echo "<br>";
        $kerulet = ($aOldal+$bOldal)*2;
        echo "<h3> A téglalap kerülete: " .$kerulet;
        echo "<br>";
        $terulet = $aOldal*$bOldal;
        echo "<h3'> A téglalap területe: " .$terulet;
        echo "<br>";
        ?>
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>