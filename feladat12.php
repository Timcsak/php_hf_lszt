<?php

$hetNapja= "";


if (isset($_POST['kuld'])) {
    $hetNapja = $_POST['hetnapja'];
   
}
?>

<!DOCTYPE html>
<html lang="hu"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hét napja</title>
</head>

<body>
    <!--12. Feladat: Switch-case szerkezettel készítsük el a következő programot! Kérjük be egy nap
                     sorszámát (1..7) numerikus formában, és írjuk ki a nap megnevezését a képernyőre
                     (hétfő, kedd, ..., vasárnap). Amennyiben a beírt sorszám nem 1..7 közötti szám, úgy a
                     „Hibás adat!” kiírás jelenjen meg. 
    -->
    <!-- Üresen hagy juk az action-t vagy $_SERVER[PHP_SELF]-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="hetnapja">Hét napja</label><br>
        <input type="number" name="hetnapja" id="hetnapja" placeholder="Kérem adja meg a hét napját numerikusan 1-7 között!" required><br>
        <input type="submit" value="KÜLD" name="kuld">
    </form>

    <p>
        <?php
       switch ($hetNapja) {
            case 1: {echo "Hétfő";break;}
            case 2: {echo "Kedd";break;}
            case 3: {echo "Szerda";break;}
            case 4: {echo "Csütörtök";break;}
            case 5: {echo "Péntek";break;}
            case 6: {echo "Szombat";break;}
            case 7: {echo "Vasárnap";break;}
            default: {echo "Hibás adat!";break;}  
       }
        ?>

    </p>
</body>

</html>