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

    $nom = $_POST["nom"]; 
    $prenom = $_POST["prenom"]; 
    $num_aej = $_POST["num_aej"]; 
    $num_tel = $_POST["num_tel"]; 
    $email = $_POST["email"];
    $fonction = $_POST["fonction"]; 
    $date_inscription = $_POST["date_inscription"]; 


    if (!isset($nom)){
      die("S'il vous plaît entrez votre nom");
    }
     
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
      die("S'il vous plaît entrez votre adresse e-mail");
    }


              //Ouvrir une nouvelle connexion au serveur MySQL


              $servname = 'localhost';
              $dbname = 'etudiant_igs';
              $user = 'kalil';
              $pass = 'kalil@1234';
              
              try{
                  $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  
                  $sql = "INSERT INTO etudiants (nom,prenom,num_aej,num_tel,email,fonction,date_inscription) 
                                      VALUES ('$nom','$prenom','$num_aej','$num_tel','$email','$fonction','$date_inscription')";
                  
                  $dbco->exec($sql);
                  echo 'Super !!! vous êtes enregistré ';
              }
              
              catch(PDOException $e){
                echo "<p> Erreur : probleme d'access a la base de données </p>" . $e->getMessage();
              }




  }
?>

<p><a href="index.php"><input type="submit" value="Retour"></a></p>

</body>
</html>