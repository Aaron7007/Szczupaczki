<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Wololo</title>
        <style>
            /*body {
            text-align: center;
            }*/

            th, td {
            border: 1px solid black;
            }

            table{
                border: 3px solid black;
            }
        </style>    
    </head>
    <body>
       <?php
            echo"Ćwiczenie 1<br>";
            $i = 1;
            $a = false;
            while($a == false){
                $x = rand(1,25);
                if($x == 5){
                    print($x."<br>Wylosowano 5 za ".$i." razem<br>");
                    $a = true;
                }
                else{
                    print($x." ");
                    $i++;
                }    
            }

            echo"<br><br><br>";
            echo"Ćwiczenie 2<br>";

            print('
            <form method="POST">
                <input type="text" placeholder="n1" name="n1"><br>
                <input type="text" placeholder="n2" name="n2"><br>
                <input type="submit" value="Wyślij"><br>
            </form>
            ');

            @$n1 = $_POST['n1'];
            @$n2 = $_POST['n2'];
            if(isset($n1) && isset($n2)){
                if($n1 >= 0 && $n2 >= 0){
                    $suma = 0;
                    do{
                        $n = rand($n1,$n2);
                        $suma += $n ;
                        print($n." ");
                    }
                    while($suma < 100);
                    print("<br>Suma: ".$suma);
                }
                else{
                    echo"Zmienne nie mogą być ujemne!!!";
                }
            }

            echo"<br><br><br>";
            echo"Ćwiczenie 3<br>";
            print('
            <form method="POST">
                <input type="text" placeholder="n" name="z3_1"><br>
                <input type="submit" value="Wyślij"><br>
            </form>
            ');

            @$z3_1 = $_POST['z3_1'];
            if(isset($z3_1)){
                for($i = 1; $i < $z3_1; $i++){
                    if(($i + 1) == $z3_1){
                        print($i);
                    }
                    else{
                        print($i.", ");
                    }    
                }
            }
            
            echo"<br><br><br>";
            echo"Ćwiczenie 4<br>";
            $_celsjusz = -10;
            print("
            <table>
                <tr>
                    <th>Celsjusz</th>
                    <th>Farenheit</th>
                </tr>
            ");
            while($_celsjusz <= 0){
                print("
                    <tr>
                        <td>".$_celsjusz."</td>
                        <td>".(($_celsjusz * 1.8) + 32)."</td>
                    </tr>");
                $_celsjusz += 2;
            }
            print("</table>");

            echo"<br><br><br>";
            echo"Ćwiczenie 5<br>";
            print('
            <form method="POST">
                <input type="text" placeholder="n" name="z5_1"><br>
                <input type="submit" value="Wyślij"><br>
            </form>
            ');

            @$z5_1 = $_POST['z5_1'];
            $pierwsza = true;
            $i = 1;
            if(isset($z5_1)){
                for($i = 1; $i <= $z5_1; $i++){
                    if($z5_1 % $i == 0 && $z5_1 <> $i){
                        print($i." ");
                        $pierwsza = false;

                    }
                    elseif($z5_1 % $i == 0 && $z5_1 == $i){
                        print($i." ");
                        $pierwsza = true;
                    }
                }
                if($pierwsza == true){
                    print("<br>Liczba ".$z5_1." jest liczbą pierwszą");
                }
            }

            echo"<br><br><br>";
            echo"Ćwiczenie 6<br>";
            print('
            <form method="POST">
                <input type="text" placeholder="n" name="z6_1"><br>
                <input type="submit" value="Wyślij"><br>
            </form>
            ');

            @$z6_1 = $_POST['z6_1'];
            if(isset($z6_1)){
                $wynik = 1;
                for($i = 1; $i <= $z6_1; $i++){
                    $wynik *= $i;
                }
                print("Silnia od ".$z6_1." to: ".$wynik);
            }

            echo"<br><br><br>";
            echo"Ćwiczenie 7<br>";
            for($i = 1; $i <= 31; $i += 2){
                for($c = (31 - $i);$c >= 0; $c--){
                    echo"&nbsp;";
                }
                for($b = 1; $b <= $i; $b++){
                    echo"*";
                }
                echo"<br>";
            }

            echo"<br><br><br>";
            echo"Ćwiczenie 8<br>";
            print('
            <form method="POST">
                <input type="text" placeholder="n" name="z8"><br>
                <input type="submit" value="Wyślij"><br>
            </form>
            ');
            @$z8 = $_POST['z8'];
            if(isset($z8)){
                print("
                    <table>
                        <tr>
                        <th></th>
                ");
                for($i = 1; $i <= $z8; $i++){
                    print("<th>".$i."</th>");
                }
                print("</tr>");
                for($i = 1; $i <= $z8; $i++){
                    print("
                        <tr>
                            <th>".$i."</th>
                    ");
                    for($b = 1; $b <= $z8; $b++){
                        print("<td>".($b * $i)."</td>");
                    
                    }
                    echo"</tr>";
                }
            }

        ?>
    </body>
</html>