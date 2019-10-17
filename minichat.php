<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>




<form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>

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
    








 // On récupère tout le contenu de la table jeux_video
       // $reponse = $bdd->query('SELECT * FROM minichat ORDER BY ID DESC LIMIT 0, 5');
       $reponse = $bdd->query('SELECT * FROM minichat ORDER BY ID DESC LIMIT 0, 5 ') ;

       while ($donnees = $reponse->fetch())
      {
      
          echo $donnees['id'] ."  " . $donnees['pseudo'] ." : ". $donnees['msg'] . "<br>";
      }

?>

    
</body>
</html>