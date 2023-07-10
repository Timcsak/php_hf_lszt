<?php
$szam1 = 0;
$szam2 = 0;

if (isset($_POST['szamit'])) {
    $szam1 = $_POST['szam1'];
    $szam2 = $_POST['szam2'];
    
}
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hatványozás</title>
</head>

<body>
    <!-- 14. Feladat: Switch-case szerkezettel készítsünk hatványozó alkalmazást! Kérjünk be 2 pozitív egész
                      számot: az első szám, amit hatványozni szeretnénk, a második megadott szám pedig a
                      menüpont, amit leütve írja ki a 2. 3. vagy a 4. hatványát az első számnak! Ha más értéket
                      adok meg, írja ki, hogy hibás adat!
-->
    <!-- Üresen hagyjuk az action-t vagy $_SERVER[PHP_SELF]-->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="szam1">Szám1</label><br>
            <input type="number" name="szam1" id="szam1" placeholder="Kérem adja meg a hatványozandó számot!" required><br>
            <label for="szam2">Szám2</label><br>
            <input type="number" name="szam2" id="szam2" placeholder="Kérem adjon meg első szám hatványát!" required><br>
            <input type="submit" value="Számítás" name="szamit">
        </form>
  
    <p>
        <?php
        switch ($szam2) {
            case 2: {echo "$szam1  2.hatványa: " . pow($szam1,$szam2);break;}
            case 3: {echo "$szam1 3.hatványa: " . pow($szam1,$szam2);break;}
            case 4: {echo "$szam1 4.hatványa: " . pow($szam1,$szam2);break;}
            default: {echo "Hibás adat!";break;}  
       }
        ?>
    </p>
    
</body>

</html>