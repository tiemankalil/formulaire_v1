<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]); 
    $num_aej = htmlspecialchars($_POST["num_aej"]); 
    $num_tel = htmlspecialchars($_POST["num_tel"]); 
    $email = htmlspecialchars($_POST["email"]);
    $fonction = htmlspecialchars($_POST["fonction"]); 
    $date_inscription = htmlspecialchars($_POST["date_inscription"]); 


    // htmlspecialchars($_POST["nom"]);




    // $nom = valid_donnees($_POST["nom"]); 
    // $prenom = valid_donnees($_POST["prenom"]); 
    // $num_aej = valid_donnees($_POST["num_aej"]); 
    // $num_tel = valid_donnees($_POST["num_tel"]); 
    // $email = valid_donnees($_POST["email"]);
    // $fonction = valid_donnees($_POST["fonction"]); 
    // $date_inscription = valid_donnees($_POST["date_inscription"]); 

    // function valid_donnees($donnees){
    //     $donnees = trim($donnees);
    //     $donnees = stripslashes($donnees);
    //     $donnees = htmlspecialchars($donnees);
    //     return $donnees;
    // }




      error_reporting(E_ALL);
        if(!empty($_POST))
          {
            $retour=1;
            foreach($_POST as $cle=>$val)
              {
              if(empty($val))
              {
              echo 'Le champ ',$cle,' est obligatoire.<br />';
              $retour=0;
              }
              }
            if($retour==0)
              {
               
              echo '<p><a href="index.php"><input type="submit" value="Retour"></a></p>';
                die ();
              }
          
          }


    // if (!isset($nom)){
    //   die("S'il vous plaît entrez votre nom");
    // }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
              die("S'il vous plaît entrez votre adresse e-mail valide");
            }

    

              //Ouvrir une nouvelle connexion au serveur MySQL


              $servname = 'localhost';
              $dbname = 'etudiant_igs';
              $user = 'kalil';
              $pass = 'kalil@1234';
              
              try{
                  $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 
              }
              
              catch(PDOException $e){
                echo "<p> Erreur : probleme d'access a la base de données </p>" . $e->getMessage();
              }

               
                $sql = "INSERT INTO etudiants (nom,prenom,num_aej,num_tel,email,fonction,date_inscription) 
                          VALUES ('$nom','$prenom','$num_aej','$num_tel','$email','$fonction','$date_inscription')";
                  
                $dbco->exec($sql);
                echo 'Super !!! vous êtes enregistré ';

  }
?>

<p><a href="index.php"><input type="submit" value="Retour"></a></p>

</body>
</html>