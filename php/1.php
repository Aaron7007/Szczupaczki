<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Wololo</title>
        <style>
            th, td {
            border: 1px solid black;
            }

            table{
                border: 3px solid black;
            }

            .grey {
                color: grey;
            } 
        </style>

    </head>
    <body>
       <form method="POST">
       </form>
       
       <?php
            echo "Ćwiczenie 1";
            echo "<br><br>";
            $n1 = 3.56;
            $n2 = 4.54;
            $n3 = 7.87;
            $s = ($n1 + $n2 + $n3)/3;
            print(round($s, 2)."<br>");
            printf("%.3f",$s); print("<br>");
            $s1 = intval($s);
            print($s1);

            echo"<br>";
            echo"<br>";
            echo"<br>";

            echo "Ćwiczenie 2";
            echo "<br><br>";
            $n1 = 3.75;
            $n2 = 2.94;
            $n3 = 3.15;
            $s = $n1 * $n2 * $n3;
            print(ceil($s));

            echo"<br>";
            echo"<br>";
            echo"<br>";
            echo "Ćwiczenie 3";
            echo "<br><br>";
            $n1 = "Emil";
            $n2 = "Ciota";
            $n3 = "Knysak";
            $n4 = "Debil";
            print($n1." ".$n2." ".$n3." ".$n4. "<br>");

            echo"<br>";
            echo"<br>";
            echo"<br>";

            echo "Ćwiczenie 4";
            echo "<br><br>";
            echo "Przelicznik złotówek na inne waluty x1000 <br>";
            $n = 1000;
            define("E", 1/4.4);
            define("D", 1/3.8);
            define("P", 1/5);
            define("F", 1/3.8);
            $e = round($n * constant("E"), 2);
            $d = round($n * constant("D"), 2);
            $p = round($n * constant("P"), 2);
            $f = round($n * constant("F"), 2);
        ?>
        <table>
            <tr>
                <th>Euro</th>
                <th class="grey">Dolar</th>
                <th>Funt</th>
                <th class="grey">Frank</th>
            </tr>
            <tr>
                <td><?php print($e);?></td>
                <td class="grey"><?php print($d);?></td>
                <td><?php print($p);?></td>
                <td class="grey"><?php print($f);?></td>
            </tr>
        </table>

        <?php
            echo"<br>";
            echo"<br>";
            echo"<br>";

            echo "Ćwiczenie 5";
            echo "<br><br>";
            $n1 = 18;
            $n1_1 = 2;
            $n2 = 6;
            $n2_1 = 5;
            $v_r = 0.07;
            $v_w = 0.22;
            $n = 0.1;

            $suma = ($n1 * $n1_1) + (($n1 *$n1_1) *$v_r);
            $suma = $suma + ($n2 * $n2_1) + (($n2 *$n2_1) *$v_w);
            $napiwek = $suma * $n;
            $suma = $suma + $suma * $n;
            print("Cena za rybę to: ". round(($n1 * $n1_1) + (($n1 *$n1_1) *$v_r), 2)."<br>");
            print("Cena za wino to: ". round(($n2 * $n2_1) + (($n2 *$n2_1) *$v_w), 2)."<br>");
            print("Napiwek wynosi: ". round($napiwek, 2)."<br>");
            print("Cena za obiad to: ".round($suma,2));

        ?>
    </body>
</html>