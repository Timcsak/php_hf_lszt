<?php
$aOldal = 0;
if (isset($_POST['szamit'])) {
    $aOldal = $_POST['aOldal']; 
    }
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kocka felszín és térfogat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- 3. Feladat: Hozzunk létre alkalmazást, amely kiszámolja a kocka felszínét és térfogatát!  -->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="aOldal">A kocka a oldala</label><br>
        <input type="number" name="aOldal" id="aOldal"  placeholder='Kérem adja meg a kocka "a" oldalát!' required><br>
        <input class="btn btn-primary "type="submit" value="Számítás" name="szamit">
    </form>
    <p>
        <?php
        echo "<br>";
        $felszin = 6*pow($aOldal,2);
        echo "<h3 style='color:green'> A kocka felszíne:" .$felszin;
        echo "<br>";
        $terfogat = pow($aOldal,3);
        echo "<h3 style='color:blue'> A kocka térfogata:" .$terfogat;
        echo "<br>";
        ?>
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>