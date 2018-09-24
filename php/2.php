<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Wololo</title>
    </head>
    <body>
       <form method="POST">
           Ćwiczenie 1: <br>
           n: 
           <input name="c1_n" type="text"><br><br>
           Ćwiczenie 2: <br>
           n: 
           <input name="c2_n" type="text"><br><br>
           Ćwiczenie 3 <br>
           y = ax<sup>2</sup> + bx + c <br>
           a: 
           <input name="c3_a" type="text"><br>
           b: 
           <input name="c3_b" type="text"><br>
           c: 
           <input name="c3_c" type="text"><br><br>
           Ćwiczenie 4 <br>
           n: 
           <input name="c4_n" type="text"><br><br>
           Ćwiczenie 5 <br>
           n: 
           <input name="c5_n" type="text"><br><br>
           Ćwiczenie 6 <br>
           a: 
           <input name="c6_a" type="text"><br>
           b: 
           <input name="c6_b" type="text"><br>
           znak: <br>
           <input type="radio" name="c6_z" value="1"> +<br>
           <input type="radio" name="c6_z" value="2"> -<br>
           <input type="radio" name="c6_z" value="3"> *<br>
           <input type="radio" name="c6_z" value="4"> /<br><br>
           Praca domowa: <br>
           Ćwiczenie 1 <br>
           a: 
           <input name="c7_a" type="text"><br>
           b:
           <input name="c7_b" type="text"><br>
           c:
           <input name="c7_c" type="text"><br><br>
           Ćwiczenie 2: <br>
           n: 
           <input name="c8_n" type="text"><br><br>
           <input type="submit" value="Wyślij"> 
       </form>
       
       <?php
            echo "Ćwiczenie 1";
            echo "<br>";

            @$n =intval($_POST["c1_n"]);
            if(($n > 0 && $n <> 5 && $n <> 10) || $n == -8){
                print("Zmienna n spełnia warunki");
            }
            echo"<br>";
            echo"<br>";
            echo"<br>";

            echo "Ćwiczenie 2";
            echo "<br>";
            
            @$n =$_POST["c2_n"];
            if(intval($n) % 2 == 0){
                print("N jest prarzyste");
            }
            else{
                print("N jest nieparzyste");
            }

            echo"<br>";
            echo"<br>";
            echo"<br>";

            echo "Ćwiczenie 3";
            echo "<br>";

            @$a =intval($_POST["c3_a"]);
            @$b =intval($_POST["c3_b"]);
            @$c =intval($_POST["c3_c"]);
            @$delta = pow($b,2) - (4*$a*$c);

            if($delta < 0){
                print("Delta jest ujemna, brak rozwiązań");
            }
            elseif($delta == 0){
                print("Delta równa 0, jedno rozwiązanie");
                $x = ((-$b) - sqrt($delta)) / (2*$a);
                print("X = ".$x);
            }
            else{
                print("Delta większa od 0, dwa rozwiązania <br>");
                $x1 = ((-$b) - sqrt($delta)) / (2*$a);
                $x2 = ((-$b) + sqrt($delta)) / (2*$a);
                print("X1 = ".round($x1,2)."<br>");
                print("X2 = ".round($x2,2));
            }
            echo"<br>";
            echo"<br>";
            echo"<br>";

            echo "Ćwiczenie 4";
            echo "<br>";

            @$n = $_POST["c4_n"];
            switch($n){
                case 1:
                    echo"Styczeń";
                    break;
                case 2:
                    echo"Luty";
                    break;
                case 3:
                    echo"Marzec";
                    break;
                case 4:
                    echo"Kwiecień";
                    break;
                case 5:
                    echo"Maj";
                    break;  
                case 6:
                    echo"Czerwiec";
                    break;       
                case 7:
                    echo"Lipiec";
                    break;
                case 8:
                    echo"Sierpień";
                    break;      
                case 9:
                    echo"Wrzesień";
                    break;
                case 10:
                    echo"Październik";
                    break;
                case 11:
                    echo"Listopad";
                    break;
                case 12:
                    echo"Grudzień";
                    break;        
            }
            echo"<br>";
            echo"<br>";
            echo"<br>";

            echo "Ćwiczenie 5";
            echo "<br>";
            
            @$n = intval($_POST["c5_n"]);
            if($n%10<>0 && $n%5<>0 && $n%2<>0)
            {
                echo " Jakąś dziwną liczba dałeś!!";
            }
            else{
                echo "Liczba ".$n." jest podzielna przez";
                if($n%10==0)
                {
                    echo " 10 ";
                }
                if($n%5==0)
                {
                    echo " 5 ";
                }
                if($n%2==0)
                {
                    echo " 2 ";
                }
            }

            echo"<br>";
            echo"<br>";
            echo"<br>";

            echo "Ćwiczenie 6";
            echo "<br>";
            
            @$a = $_POST["c6_a"];
            @$b = $_POST["c6_b"];
            @$znak = $_POST["c6_z"];


            if($znak==1)
            {
                echo "Dodawanie:".($a+$b);
            }
            else if ($znak==2)
            {
                echo "Odejmowanie:".($a-$b);
            }
            else if ($znak==3)
            {
                echo "Mnożenie:".($a*$b);
            }
            else if ($znak==4)
            {
                echo "Dzielenie".($a/$b);
            }
            echo"<br>";
            echo"<br>";
            echo"<br>";
            echo"Praca domowa";
            echo"<br>";
            echo"<br>";
            echo"<br>";
            echo "Ćwiczenie 1";
            echo "<br>";
            $n = array();
            @$n[0] = $_POST["c7_a"];
            @$n[1] = $_POST["c7_b"];
            @$n[2] = $_POST["c7_c"];

            sort($n);
            print("Liczby w kolejności rosnącej to: ".$n[0]." ".$n[1]." ".$n[2]);

            echo"<br>";
            echo"<br>";
            echo"<br>";
            echo "Ćwiczenie 2";
            echo "<br>";

            @$n = $_POST["c8_n"];

            if(0<$n && $n<=13)
            {
             echo "5zł";  
            }
            elseif(14<=$n && $n<=55)
            {
                echo "10zł";
            }
            elseif(56<$n && $n<=120)
            {
                echo "7zł";
            }
            else
            {
                echo "Martwy";
            }
        
        ?>
    </body>
</html>