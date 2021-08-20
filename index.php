<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire Inscription Ivoire Geek School</title>
</head>
<body>
<h2>Formulaire d'inscription Ivoire geek School</h2>
<form  action="traitement.php" method="post"  >
    <p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
  <fieldset>
    <legend>Informations Personnelles</legend>

        <!--      
        //placeholder: indication grisée 
        //required: il faut renseigner le champs sinon la validation est bloquée
        //autofocus: le curseur est positionné dans cette case au chargement de la page -->

      <label for="nom">Nom</label> 
      <input id="nom" name="nom" type="text" placeholder="ex: Tieman" autofocus=""  ><br>

      <label for="prenom">Prénom</label>
      <input id="prenom" name="prenom" type="text" placeholder="ex: kalilou"  ><br>
      
      
      <label for="num_aej">Numéro AEJ</label>
      <input id="num_aej" name="num_aej" type="number" placeholder="ex: 21334568778" ><br>
      
    
      <label for="num_tel">Téléphone</label>
      <input id="num_tel" name="num_tel" type="tel" placeholder="ex: 07xxxxxxxx" ><br>


      <!-- // type="tel": bascule le clavier sur un smartphone
      // pattern: expression régulière à vérifier pour pouvoir valider
       -->
      <label for="email">Email <em>*</em></label>
      <input id="email" name="email" type="email" placeholder="tiemankalil@gmail.com" required><br>
 
    
         <label for="fonction">Fonction <em>*</em></label>
        <select id="fonction"  name="fonction" required>
            <option value="" disabled selected hidden>Choisissez votre fonction</option>
            <option value="ref_dig">référent Digital</option>
            <option value="dev_web">Dévéloppeur Web</option>
            <option value="data_ia">Data IA</option>
               
          </select><br>


          <div>
          <label for="date_inscription">Date d'inscription</label>
          <input id="date_inscription" name="date_inscription" type="date" />
          </div>
  
    </fieldset>

  <p><input type="submit" value="Soummettre"></p>
</form>

<form action="affichage.php" method="post" >

    <fieldset>
    <label for="afficher">Afficher la liste des Etudiants </label>
    <input id="afficher" type="submit" value="Afficher">

    </fieldset>
</form>




</body>
</html>