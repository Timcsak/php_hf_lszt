
<?php

$suly = "";
$magassag = "";


if (isset($_POST['szamit'])) {
    $suly= $_POST['suly'];
    $magassag = $_POST['magassag'];
}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testtömeg számítás</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <!--9. Feladat: . Kérjük be a felhasználó tömegét kg-ban és magasságát cm-ben, majd számítsuk ki és
                      írjuk a képernyőre a felhasználó testtömeg-indexét a következő képlet alapján:
                      A testtömeg-index és táblázat alapján írjuk ki szövegesen
                      a testsúly-osztályzást! 
     -->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="suly">Testsúly</label><br>
        <input type="number" name="suly" id="suly" step="0.1" placeholder="Kérem adja meg a testsúlyát kg-ban!" required><br>
        <label for="magassag">Magasság</label><br>
        <input type="number" name="magassag" id="magassag" step="0.1" placeholder="Kérem adja meg a magasságát cm-ben!" required><br>
        <input class="btn btn-primary" type="submit" value="SZAMÍTÁS" name="szamit">
    </form>

    <p>
        <?php

        $TTI=number_format(($suly/(pow(($magassag/100),2))),2);
        echo "Testtömeg index értéke:  $TTI";

        echo "<br>";
        if ($TTI < 16) {
            echo "Súlyos soványság";
        } else if (($TTI >= 16 && $TTI < 16.99)) {
            echo "Mérsékelt soványság";
        } else if ($TTI >= 17 && $TTI < 18.49) {
            echo "Enyhe soványság";
        } else if ($TTI >= 18.5 && $TTI < 24.99) {
            echo "Nomál testsúly";
        } else if ($TTI >= 25 && $TTI < 29.99) {
            echo "Túlsúlyos";
        } else if ($TTI >= 30 && $TTI < 34.99) {
            echo "I. fokú elhízás";
        } else if ($TTI >= 35 && $TTI < 39.99) {
            echo "II. fokú elhízás";
        } else if ($TTI >= 40) {
            echo "III. fokú (súlyos) elhízás";
        } else
            echo "Hibás adatbevitel, kérem javítsa!"
        
        ?>

    </p>
</body>

</html>