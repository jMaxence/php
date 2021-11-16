<html>
    
    <head><title>Exercice 3</title></head>

    <body>
        <?php
                $Table[0] = array ("Nom" => "jolibois", "Prénom" => "maxence", "MDP" => "1203");
                $Table[1] = array ("Nom" => "Dupont", "Prénom" => "Yannis", "MDP" => "5469");
                $Table[2] = array ("Nom" => "Dupontreue",  "Prénom" =>  "Theo", "MDP" => "8745");
        
                echo "<table>";

                for ($i = 0; $i <3; $i++) {
            
    
                    echo "<tr></tr>";
            
        
                foreach ($Table[$i] as $value) {
            
                    echo "<td>";
                    echo "$value";
                }
            }
                echo "</table>";

            ?>

            <a href="php/joliboite/">Acceuil</a>

    </body>

</html>