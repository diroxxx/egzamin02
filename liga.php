<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Piłka Nożna</title>
</head>
<body>
    <header class="baner" >
        <h3>
            Reprezentacja polski w piłce nożnej
        </h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </header>
    
   
    
    <section class="left" >
        <form action="liga.php" method="post">
            <select name="wybór" id="">
                <option value="bramkarz">Bramkarz</option>
                <option value="obrońca">Obrońca</option>
                <option value="pomocnik">Pomocnik</option>
                <option value="napastnik">Napastnik</option>
            </select>
            <input type="submit" value="Zobacz">
        </form>
        <img src="zad2.png" alt="piłka">
        <p>Autor: Dominik Chełchowski </p>


    </section>
    <section class="right"> 
        
        <?php
            $server = "localhost";
            $user = "root";
            $paswd = "";
            $database = "egzamin";
            $zaw = $_POST['wybór'];
            
                
            $connect =mysqli_connect ($server,$user,$paswd,$database);
            if(isset($_POST['wybór']))
            {
                $sql= "SELECT `imie`,`nazwisko` FROM `zawodnik` WHERE `pozycja_id`='$zaw'";
                $result = mysqli_query($connect,$sql);
                while($array =  $result->fetch_array())
                {
                echo '<ol>';
                    echo '<li>' ;
               
                        echo '<p>'.$array[0].' '.$array[1]. '</p>';
                    
                    echo'</li>';

            
                echo '</ol>';
            }

        }
            
            
            ?>
      
    </section>

    <main class="main">
        <h3>Liga mistrzów</h3>
    </main>
    <section class="liga">
       <?php
        $connect =mysqli_connect ($server,$user,$paswd,$database);
        $sql2 = 'SELECT `zespol`,`punkty`,`grupa` FROM `liga` WHERE 1 ORDER BY `punkty`'

       
       
       
       $connect->close();
       ?>





    </section>
</body>
</html>