<!DOCTYPE html>

<head>
        <title>exo 1</title>
        <link rel="stylesheet" href="exo1.css">
</head>
<body>

    <?php
    
        $NombreAleatoire = rand ( 0 , 100 );
         if ($NombreAleatoire % 2 == 0)
         
        {
          echo"<p class=red>$NombreAleatoire est Paire</p>";
        }
        else 
         
        {
        echo"<p class=blue>$NombreAleatoire est Impaire</p>";
        }
       


    ?>
</body>
</html>

