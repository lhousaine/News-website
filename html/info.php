<?php
include("../database/connexion.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/info.css">
    <script src="../js/info.js" type="text/javascript"></script>
    <link rel="icon" type="image/jpeg" href="../images/logo.png">
    <title> Alpha News</title>
  </head>
  <body  onload="init()">
    <div class="principale_div">
        <header>
            <div class="head_div">
          <div class="logo">
          <img src="../images/logo.png" alt="journale de jour">
        </div>
            <div id="horaire">
              <form name="time">
              <input type="text" name="horloge" size="10" id="hr" readonly>
              <input type="text" name="date" size="10" id="dt" readonly>
              </form>
            </div>
          </div>
          <ul id="list_head">
            <li id="hd_li"> <a href="http://localhost/project_s/html/projet.php?r=null">Accueille</a> </li>
            <li id="hd_li"><a href="http://localhost/project_s/html/info.php?r=null">Societé  & Politique</a> </li>
            <li id="hd_li"><a href="http://localhost/project_s/html/info.php?r=null">InternationalE</a> </li>
            <li id="hd_li"><a href="http://localhost/project_s/html/info.php?r=null">Culture</a> </li>
            <li id="hd_li"><a href="http://localhost/project_s/html/info.php?r=null">Economie & Commerce</a> </li>
            <li id="hd_li"><a href="http://localhost/project_s/html/info.php?r=null">Sport</a> </li>
          </ul>
        </header>
        <?php
        if($_GET['r']=="null"){
        ?>
      <section class="container">
        <div class="subcontainer">
        <h1>Societé & Politique </h1>
      <?php
      $req = $bdd->query("SELECT Id,Type,titre,src_image,contenu FROM News WHERE Type='soc_p' ORDER By date_event DESC LIMIT 0,5");
      while ($donnees = $req->fetch())
      { ?>
            <div class="event">
              <img id="im_p" src=" <?php echo htmlspecialchars($donnees['src_image']);?> " alt="image extraite de chaque information">
                   <h2 id="event_title"> <?php echo htmlspecialchars($donnees['titre']); ?> </h2>
                   <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                   <br>  <a href="info_details.php?new=<?php echo $donnees['Id'];?>&vid=null">details...</a></p>
            </div>
        <?php
    }
    $req->closeCursor();
   ?>
        <h1>International</h1>
        <?php
        $req = $bdd->query("SELECT Id,Type,titre,src_image,contenu FROM News WHERE Type='interna' ORDER By date_event DESC LIMIT 0,5");
        while ($donnees = $req->fetch())
        { ?>
              <div class="event">
                <img id="im_p" src=" <?php echo htmlspecialchars($donnees['src_image']);?> " alt="image extraite de chaque information">
                     <h2 id="event_title"> <?php echo htmlspecialchars($donnees['titre']); ?> </h2>
                     <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.
                     <br>  <a href="info_details.php?new=<?php echo $donnees['Id'];?>&vid=null">details...</a></p>
              </div>
          <?php
      }
      $req->closeCursor();
     ?>
        <h1>Economie & commmerce</h1>
        <?php
        $req = $bdd->query("SELECT Id,Type,titre,src_image,contenu FROM News WHERE Type='eco' ORDER By date_event DESC LIMIT 0,5");
        while ($donnees = $req->fetch())
        { ?>
              <div class="event">
                <img id="im_p" src=" <?php echo htmlspecialchars($donnees['src_image']);?> " alt="image extraite de chaque information">
                     <h2 id="event_title"> <?php echo htmlspecialchars($donnees['titre']); ?> </h2>
                     <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.
                     <br>  <a href="info_details.php?new=<?php echo $donnees['Id'];?>&vid=null">details...</a></p>
              </div>
          <?php
      }
      $req->closeCursor();
     ?>
        <h1>culture</h1>
        <?php
        $req = $bdd->query("SELECT Id,Type,titre,src_image,contenu FROM News WHERE Type='cul' ORDER By date_event DESC LIMIT 0,5");
        while ($donnees = $req->fetch())
        { ?>
              <div class="event">
                <img id="im_p" src=" <?php echo htmlspecialchars($donnees['src_image']);?> " alt="image extraite de chaque information">
                     <h2 id="event_title"> <?php echo htmlspecialchars($donnees['titre']); ?> </h2>
                     <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.
                     <br>  <a href="info_details.php?new=<?php echo $donnees['Id'];?>&vid=null">details...</a></p>
              </div>
          <?php
      }
      $req->closeCursor();
     ?>
        <h1>sport</h1>
        <?php
        $req = $bdd->query("SELECT Id,Type,titre,src_image,contenu FROM News WHERE Type='sp' ORDER By date_event DESC LIMIT 0,5");
        while ($donnees = $req->fetch())
        { ?>
              <div class="event">
                <img id="im_p" src=" <?php echo htmlspecialchars($donnees['src_image']);?> " alt="image extraite de chaque information">
                     <h2 id="event_title"> <?php echo htmlspecialchars($donnees['titre']); ?> </h2>
                     <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.
                     <br>  <a href="info_details.php?new=<?php echo $donnees['Id'];?>&vid=null">details...</a></p>
              </div>
          <?php
      }
      $req->closeCursor();
      ?>
    <?php }
    elseif($_GET['r']=="archive"){
      $req = $bdd->query("SELECT titre FROM News WHERE imp=1 ORDER By date_event DESC LIMIT 0,200");
      while ($donnees = $req->fetch())
      {
    ?>  <div class="arch"> <?php echo htmlspecialchars($donnees['titre']);?>
          </div>
          <?php
        }
        $req->closeCursor();
          }
          elseif ($_GET['r']=="aj_art") {
          echo "<p> vous pouvez envoyer des articles ou des nouvelles informations pour qu'on puissent
           les partager dans notre site</p>";
          }
          elseif ($_GET['r']=="inf") {
          echo "<p>ici,vous trouverez tous ce qui concerne notre site</p> ";
          }
          elseif ($_GET['r']=="web_ass") {
           echo "<p>voila certains exemples des sites web de nos associants</p>";
          }
          else{
          echo "<p>si vous avez avez besoin d'info à propos de notre site vous pouvez nous envoyer un email</p>";
          }
        ?>
      </div>
      </section>
      <footer>
        <ul id="list_footer">
             <li >  <a href="info.php?r=aj_art"> ajout d'article</li></a>
               <li>  <a href="info.php?r=inf"> à Propos</li></a>
               <li> <a href="info.php?r=web_ass"> site_web associant</li></a>
               <li><a href="info.php?r=cont"> Contact</li></a>
        </ul>
        <p class="rev">&copymaroc_news</p>
      </footer>
    </div>
  </body>
</html>
