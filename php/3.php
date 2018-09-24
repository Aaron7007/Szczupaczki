<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Wololo</title>
    </head>
    <body>
       
       
       <?php
            echo"Ćwiczenie 7 <br>";
        ?>        
        <form method="POST">
            <select name="search">
                <option value="google">Google
                <option value="bing">Bing
                <option value="duck">DuckDuckGo
            </select>
            <input type="submit" value="Wyślij"/>
        </form>
        <?php
            @$search = $_POST['search'];
            if(!isset($search)){
                echo"Nie wybrałeś żadnej opcji!!";
            }
            else{
                if($search == "google"){
                    header("Location:http://www.google.pl/");
                }
                elseif($search == "bing"){
                    header("Location:http://www.bing.com/");
                }
               elseif($search == "duck"){
                    header("Location:http://duckduckgo.com/");
                }
            }
            echo"<br><br><br>Ćwiczenie 8<br>";    
        ?>
        <form method="POST">
            <input type="radio" name="ocena" value="Całkowicie beznadziejna">Całkowicie beznadziejna<br>
            <input type="radio" name="ocena" value="Nudna">Nudna<br>
            <input type="radio" name="ocena" value="OK">OK<br>
            <input type="radio" name="ocena" value="Naprawdę świetna">Naprawdę świetna<br>
            <input type="submit" value="Wyślij"/>
        </form>
        <?php
            @$ocena = $_POST['ocena'];
            if(!isset($ocena)){
                echo"Oceń moją stronę";
            }
            else{
                print("Oceniłęś stronę jako: ".$ocena);
            }
            echo"<br><br><br>Praca domowa<br>"
        ?>
        <form method="POST">
            <input type="text" placeholder="Podaj login" name="login" requied><br>
            <input type="password" placeholder="Podaj hasło" name="pass" required><br>
            <input type="submit" value="Wyślij"/>
        </form>
        <?php
            @$login = $_POST['login'];
            @$pass = $_POST['pass'];

            if(isset($login) && isset($pass)){
                print("Udane logowanie. Witaj ".trim($login));
            }
        ?>
    </body>
</html>