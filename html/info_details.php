<?php
include("../database/connexion.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/info_details.css">
    <script src="../js/info_details.js">  </script>
    <link rel="icon" type="image/jpeg" href="../images/logo.png">
    <title>Alpha News</title>
  </head>
  <body onload="init()">
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
      <section class="container">
        <!--left*****************************************************************************-->
        <div class="left">
          <?php
          $req = $bdd->query('SELECT Id,Type,imp,titre,src_image,contenu, DATE_FORMAT(date_event,\'%H:%i\')
               AS date_event_fr FROM News where Type in("soc_p","interna","eco","cul","sp") ORDER BY date_event LIMIT 0,8');
               ?>
          <div class="poste">
             <p id="p_title">24 heures</p>
          <div class="event">
          <?php
          while ($donnees = $req->fetch())
            {
          ?>
               <p id="event_title"> <a href="info_details.php?new=<?php echo $donnees['Id'];?>&vid=null"> <?php echo $donnees['date_event_fr']; ?>:
                <span id="event1"> <?php echo htmlspecialchars($donnees['titre']); ?>
              </span></a> </p>
      <?php
         }
            $req->closeCursor();
      ?>
         </div>
         </div>
       <div class="poste">
          <p id="p_title">vote de notre site</p>
         <div class="vote">
      <p>est-ce-que vous étes avec ou contre la continuité de Renard comme entraineur de l\'équipe marocaine</p>
      <input type="radio" name="yes" value="Yes" onclick="vote_with()"> Yes <br><br>
      <input type="radio" name="no" value="No" onclick="vote_without()">  No <br><br>
      <button id="voir_res" type="button" name="button" onclick="vote_result()">résultat des anciens</button>
      <p id="v_result"> Yes:<span id="v_y"></span> No:<span id="v_n"></span> </p>
         </div>
       </div>
       <div class="poste">
      <p id="p_title">informations générales et des recommandations</p>
      <?php
           $req = $bdd->query("SELECT Id,titre FROM News WHERE Type='rec' LIMIT 0,1");
           $donnees = $req->fetch();
      ?>
      <div class="recommande"><a href="info_details.php?new=<?php echo $donnees['Id'];?>&vid=null">
         <?php echo nl2br(htmlspecialchars($donnees['titre'])); ?>
      </a> </div>
       </div>
       <?php
        $req->closeCursor();
       ?>
       <div class="poste">
         <p id="p_title">archive des événements important</p>
            <div class="archive">
         <a href="info.php?r=archive">on vous présente ici l'archive des événements importante des deux derniers mois</a>
            </div>
          </div>
       </div>

        <div class="principe_info">
        <?php
         $req = $bdd->prepare('SELECT Id, titre,Type,src_ve,src_image,contenu FROM News WHERE Id = ?');
        $req->execute(array($_GET['new']));
        $donnees = $req->fetch();
        ?>
          <h2 id="event_title"> <?php echo htmlspecialchars($donnees['titre']); ?></h2>
          <?php
          if($donnees['Type']=='rec'){

          }
          else{?>
          <?php if($_GET['vid']=="null"){ ?>
            <img id="im_pr" src="<?php echo htmlspecialchars($donnees['src_image']);?>"
            alt="image extraite de chaque information">
        <?php
      }
      else{ ?>
        <video id="im_pr" autoplay alt="un video qui vous donne une imge claire d'un événemennt donnée" controls>
                  <source src=" <?php echo $donnees['src_ve'].'.mkv';?> " >
                  <source src="<?php echo $donnees['src_ve'].'.mp4';?>">
                  <source src="<?php echo $donnees['src_ve'].'.ogg';?>">
</video>
<?php }
}?>
          <p id="ev_desc"><?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?></p>
      <?php
      $req->closeCursor();
        ?>          <div id="second">
              <p>les commentaires de nos clients :</p>
          <?php     $req = $bdd->prepare('SELECT Id,auteur,Id_event,contenu, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\')
               AS comment_date_fr FROM commentaires WHERE Id_event=? ORDER BY comment_date');
              $req->execute(array($_GET['new']));
               while ($donnees=$req->fetch()){
                 ?>
                 <div id="div_comment">
          <p><strong> <?php echo htmlspecialchars($donnees['auteur']);?></strong>
          <span><?php echo htmlspecialchars($donnees['comment_date_fr']);?></span></p>
          <p> <?php echo htmlspecialchars($donnees['contenu']);?></p>
            </div>
            <?php

                }
                  ?>

             <div id="div_form">
            <form id="f_c" action="comment_post.php?new=<?php echo $_GET['new'];?>&vid=<?php echo $_GET['vid'];?>"
               method="post">
               <?php
                $req->closeCursor();
               ?>
              <fieldset>
                <legend>ajouter un commentaire:</legend>
                <p id="p_form"> Nom et prénom:  </p>
                <input id="namec" type="text" name="auteur"  placeholder="nom et prénom"> <br>
                <p id="p_form"> email : </p>
                 <input type="text" name="email" placeholder="Exemple@domaine.com"><br>
              <p id="p_form"> Le commentaire:</p><br><textarea name="contenu" id="cont_comment" onkeyup="reste()"></textarea><br>
                <p id="p_for">Elle vous reste <input type="text" id="nb_caract" name="nombre" value="" readonly> caractères .</p>
                <input type="submit" name="valider" value="envoyer le commentaire!" onClick="Check()">
                </fieldset>
                </form>
                </div>
                </div>
        </div>
          <?php
          $req = $bdd->query("SELECT Id,titre,src_image,src_ve,contenu FROM News WHERE src_ve is not null and Type in('soc_p','interna',
          'sp','cul','eco') ORDER BY date_event DESC LIMIT 0,5");
          ?>
        <div class="video_photo">
      <?php while ($donnees=$req->fetch())
      {
        if ($donnees['src_ve']==NULL) { ?>
        <a href="info_details.php?new=<?php echo $donnees['Id'];?>&vid=null" class="info_vid">
              <div id="vid_ph">
             <img width="250px" id="im_r" src="<?php echo $donnees['src_image'];?>"  alt="">
             </div>
            <h3 id="vid_text"><?php echo $donnees['titre'];?></h3>
    </a>
    <?php  } else{
    ?>
  <a href="info_details.php?new=<?php echo $donnees['Id'];?>&vid=source" class="info_vid">
            <div id="vid_ph">
              <video autoplay alt="un video qui vous donne une imge claire d'un événemennt donnée" controls>
                        <source src=" <?php echo $donnees['src_ve'].'.mkv';?> " >
                        <source src="<?php echo $donnees['src_ve'].'.mp4';?>">
                        <source src="<?php echo $donnees['src_ve'].'.ogg';?>">
    </video>
            </div>
            <h3 id="vid_text"> <?php echo $donnees['titre'];?></h3>
            </a>
      <?php }
    }
    $req->closeCursor();
     ?>
          </div>
      </section>
   <!--footer**************************************************************************-->
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
