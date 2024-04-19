<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel ="stylesheet" href="styl_2.css">
</head>
<body>
    
    <div id="baner1">
    <h1>Internetowy sklep z eko-warzywami</h1>
    </div>
</div>
 <div id="baner2">
 <ol>
        <li>warzywa</li>
        <li>owoce</li>
        <li><a href = "https://terapiasokami.pl"
        target="_blank"> soki</a></li>
    </ol>

 </div>
  
    <div id="glowny">
        <?php
            $servername ='localhost';
            $username = 'root';
            $password = '';
            $dbname = 'warzywo';
            
            $conn = new mysqli($servername,$username,$password,$dbname);
            $sql = "SELECT nazwa , ilosc, opis, cena , zdjecie FROM produkty WHERE Rodzaje_id IN (1,2)";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table>";
                while($row = $result->fetch_assoc()) {
                   echo "<tr>";
                   echo "<td><img src='". $row["zdjecie"]
                    <h5>row
                echo "</tr>";
                    
                }
                echo "</table>";
            }
            $conn->close();
            ?>
      


    </div>

        <div id="blok">

        </div>
    </div>

    
    
    <div id="stopka">
        <form action="sklep.html" method="post">
            Nazwa: <input type="text" name="nazwa">
            Cena: <input type="text" name="cena">
            <input type="submit" value="Dodaj produkt">
        </form>
        <br>
        Strone wykonał: adampandabuy
    </div>
    
</body>
</html>