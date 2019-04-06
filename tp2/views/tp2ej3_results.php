<?php
         echo "<h2>Sus datos ingresados para el Turno (Con metodo GET):</h2>";
         echo "Nombre: " . htmlspecialchars(stripslashes(trim($_GET["name"])));
         echo "<br>";
         
         echo "Dirección de E-Mail: " .htmlspecialchars(stripslashes(trim($_GET["email"])));
         echo "<br>";
         
         echo "Teléfono: " .htmlspecialchars(stripslashes(trim($_GET["phone"])));
         echo "<br>";
         
         echo "Edad: " .htmlspecialchars(stripslashes(trim($_GET["age"])));
         echo "<br>";
         
         echo "Calzado: " .htmlspecialchars(stripslashes(trim($_GET["shoeSize"])));
         echo "<br>";
         
         echo "Altura: " .htmlspecialchars(stripslashes(trim($_GET["heigh"])));
         echo "<br>";
         
         echo "Fecha de Nacimiento: " .date("d/m/Y", strtotime($_GET["birthDate"]));
         echo "<br>";
         
         echo "Color de Pelo: " .htmlspecialchars(stripslashes(trim($_GET["hair"])));
         echo "<br>";
         
         echo "Fecha del Turno: " .date("d/m/Y", strtotime($_GET["dateDay"]));
         echo "<br>";
         
         echo "Hora del Turno: " .htmlspecialchars(stripslashes(trim($_GET["hour"])));
         echo "<br>";

      ?>