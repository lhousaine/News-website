<style media="screen">
  b{
    margin-left:300px ;
    width: 40%;
  }
  .cm{
    background-color: #654;
    color: #fff;
    margin-left: 300px;
    margin-top: 20px;
    height:180px;
    display: flex;
    flex-direction: column;
      width: 40%;
  }
  p{
    font-weight: bold;
    font-family: monospace;
    line-height: 60px;
    height: 60px;
  }
</style>
<?php
$auteur=$email=$contenu="";
$auteurEr=$emailEr=$contenuEr="";
$valider=$_POST["valider"];
$erreur="";
function test_form($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 if(isset($valider)){
if (empty($_POST["auteur"])) {
$auteurEr="le champ auteur est vide";
}
else {
     $auteur=test_form($_POST["auteur"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$auteur)) {
    $auteurEr = "seule les lettres et des espaces qui sont permises";
  }
}
if (empty($_POST["email"])) {
   $emailEr="le champ de email est vide!";
}
else {
     $email=test_form($_POST["email"]);
     if(!preg_match("#^[a-zA-Z0-9-_.]+@[a-zA-Z0-9-.]+\.[a-zA-Z]{2,6}$#",$email)){
       $emailEr="vous avez entrer un non valide email";
     }
}
if (empty($_POST["contenu"])) {
$contenuEr="le champ de text contenu est vide!";
}
else {
  $contenu=test_form($_POST["contenu"]);
}
}
if ($auteurEr!=NULL|| $emailEr!=NULL||$contenuEr!=NULL) {
  echo "<b>l'un des champs de la formulaire est mal remplais ou vous l'avez laissé le vide</b>";
 ?> <div class="cm">
    <?php
    if($auteurEr!=NULL) echo "<p>".$auteurEr."</p>";
      if($emailEr!=NULL)    echo "<p>".$emailEr."</p>";
      if ($contenuEr!=NULL) echo "<p>".$contenuEr."</p>";
    ?>
  </div>
    <?php
}
else{
include("../database/connexion.php");
$req = $bdd->prepare('INSERT INTO commentaires(Id_event,auteur,contenu,comment_date) VALUES(?,?, ?,NOW())');
$req->execute(array($_GET['new'], $auteur,$contenu));
header('Location:info_details.php?new='.$_GET['new'].'&vid='.$_GET['vid'].'&er='.$auteurEr.$emailEr.$contenuEr);
}
?>
