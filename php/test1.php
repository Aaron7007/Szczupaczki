<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Wololo</title>
    </head>
    <body>
       <?php
           echo"Zadanie 1<br>";
           define("PODATEK",0.18);
           $kwota = 556.02;
           $wynik = (5000 * constant("PODATEK")) - $kwota;
           print("Podatek od 5000zł to: ").round($wynik,2)."zł";

           echo"<br><br><br>Zadanie 2<br>";

            $imie = "Geralt";
            $nazwisko = "z Rivi";
            $adres = "Rivia, Główna 12";
            $kod = "11-000";
            echo"Twoja godność to ".$imie." ".$nazwisko.".<br>Adres to ".$adres."; kod podczotwy: ".$kod.".";

            echo"<br><br><br>Zadanie 3<br>";

            $x1 = floatval(2.3);
            $x2 = floatval(4);
            $x3 = floatval(5.55);
            print("Wartości w typie float to: ".$x1.", ".$x2.", ".$x3."<br>");

            $x1_i = intval($x1);
            $x2_i = intval($x2);
            $x3_i = intval($x3);
            print("Wartości w typie integer to: ".$x1_i.", ".$x2_i.", ".$x3_i."<br>");

            $x1_s = strval($x1);
            $x2_s = strval($x2);
            $x3_s = strval($x3);
            print("Wartości w typie string to: ".$x1_s.", ".$x2_s.", ".$x3_s);

        ?>
    </body>
</html>