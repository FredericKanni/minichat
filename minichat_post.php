<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
// Effectuer ici la requête qui insère le message
// Puis rediriger vers minichat.php comme ceci :
//header('Location: minichat.php');
?>



<form  >
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

       
	</p>
    </form>



    <?php
    //affiche les donne envoye par le formulaire
        $pseudo = $_POST['pseudo'];
        echo  $pseudo . '<br>'; 
        $msg = $_POST['message'];
        echo  $msg;
    ?>

<?php
  
    try
    {
            // On se connecte à MySQL
            $bdd = new PDO('mysql:host=localhost;dbname=mon_site;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
    ?>


        <?php

 // On récupère tout le contenu de la table jeux_video
        $reponse = $bdd->query('SELECT * FROM minichat ');

 while ($donnees = $reponse->fetch())
{

    echo $donnees['id'] . $donnees['pseudo'] . $donnees['message'] ;
}





        ?>






    
</body>
</html>