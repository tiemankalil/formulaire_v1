<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">

    <title>Document</title>
</head>
<body>
    
<?php


try

{

       $bdd = new PDO('mysql:host=localhost;dbname=etudiant_igs', 'kalil', 'kalil@1234');

}

catch(Exception $e)

{

       die("<p> Erreur : probleme d'access a la base de données </p>".$e->getMessage());

}



$reponse = $bdd->query('SELECT * FROM etudiants');


echo "<table border='1'>
<tr>
<th>Nom</th>
<th>Prenom</th>
<th>Numero AEJ</th>
<th>Telephone</th>
<th>E-mail</th>
<th>Fonction</th>
<th>Date d'inscription</th>
<th>Date d'inscription en ligne</th>


</tr>";



while ($row  = $reponse->fetch())

{

    echo "<tr>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['prenom'] . "</td>";
    echo "<td>" . $row['num_aej'] . "</td>";
    echo "<td>" . $row['num_tel'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['fonction'] . "</td>";
    echo "<td>" . $row['date_inscription'] . "</td>";
    echo "<td>" . $row['inscription_ligne'] . "</td>";
    
    echo "</tr>";
}

echo "</table>";


$reponse->closeCursor();

?>

<p><a href="index.php"><input type="submit" value="Retour"></a></p>


</body>
</html>