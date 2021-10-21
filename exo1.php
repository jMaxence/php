<!DOCTYPE html>

<head>
        <title>exo 1</title>
</head>
<body>
    <?php
    echo
    $NombreAleatoire = rand ( 0 , 100 );
    if ($NombreAleatoire%2 == 1); 
    {
       
        $color="red";
    }
    if ($NombreAleatoire%1 == 1);
    {
       
        $color="blue";
    }


    ?>
</body>
</html>
