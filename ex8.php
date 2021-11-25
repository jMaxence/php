
<html>

<head><title>Exercice 8</title></head>

<body>

<form method="GET">
    <input type="text" id="name" name="Nom">
    <input type="text" id="name" name="Prénom">
    <input type="submit" id="value" value="Cliquer">
    <input type="reset" value="Réinitialiser le formulaire">
    
    <?php   
    
    session_start();
    $_SESSION = array();
    
    if (isset($_GET['Nom'])) {
        echo "Votre nom est : " .$_GET['Nom'];
    }

    if (isset($_GET['Prénom'])) {
        echo "Votre prénom est : " .$_GET['Prénom'];
    }

    ?>

   
   <p><a href="/php/joliboite/">Accueil</a></p>

</body> 

</html>