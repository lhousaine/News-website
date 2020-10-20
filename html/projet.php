<?php
include("../database/connexion.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/project.css">
    <script src="../js/project.js">  </script>
    <link rel="icon" type="image/jpeg" href="../images/logo.png">
         <script>
            bt=document.getElementById("numero_ev");
            var i="";
             bt.onClick=function(){
               i=this.innerHTML-1;
             <?php $i?>=i;
             <?php
                 $rb = $bdd->prepare("SELECT titre,src_image,contenu FROM News WHERE Id=?");
                  $rb->execute(array($i));
                    $do = $rb->fetch();
                       ?>
              document.getElementById("event_title").innerHTML="<?php echo htmlspecialchars($do['titre']);?>";
               document.getElementById("im_pr").setAttribute("src","<?php echo htmlspecialchars($do['src_image']);?>");
               document.getElementById("ev_desc").innerHTML="<?php echo htmlspecialchars($do['contenu']);?>";
             <?php
               $rb->closeCursor();
                ?>
            }
         </script>
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
         </span></a></p>
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
       <?php
       $rp = $bdd->query('SELECT Id,titre,src_image,contenu FROM News where imp=1 ORDER BY date_event LIMIT 0,10');
        $rp->setFetchMode(PDO::FETCH_ASSOC);
        $rp->execute();
        $do = $rp->fetchAll();
            ?>
        <div class="principe_info">
          <h2 id="event_title"><?php echo htmlspecialchars($do[0]['titre']); ?></h2>
          <img id="im_pr" src="<?php echo htmlspecialchars($do[0]['src_image']); ?>"
          alt="image extraite de chaque information">
          <p id="ev_desc"><?php echo htmlspecialchars($do[0]['contenu']); ?></p>
              <div id="first">
                 <span><a href="info_details.php?new=<?php echo $do[0]['Id'];?>&vid=null" target="_blank">details...</a> </span>
                   <div class="numero">
                  <div id="numero_ev" >1</div>   <div id="numero_ev" >2</div>
                   <div id="numero_ev" >3</div>   <div id="numero_ev" >4</div>
                  <div id="numero_ev" >5</div>   <div id="numero_ev" >6</div>
                  <div id="numero_ev" >7</div>   <div id="numero_ev" >8</div>
                   <div id="numero_ev" >9</div>   <div id="numero_ev" >10</div>
                   </div>
                 <?php
                 $rp->closeCursor();
                 ?>
              <div class="p_s">
                 <p id="p_t">opinion des scientistes sur des anciens articles</p>
                 <?php
                      $req = $bdd->query("SELECT Id,src_image,titre FROM News WHERE Type='op_scient' LIMIT 0,1");
                      $donnees = $req->fetch();
                 ?>
                   <a href="info_details.php?new=<?php echo $donnees['Id'] ?>&vid=null" class="opinion">
                  <img id="im_info" src="<?php    echo htmlspecialchars($donnees['src_image']); ?>" alt="">
                  <p id="op_title"><?php    echo htmlspecialchars($donnees['titre']); ?></p>
                </a>
                <?php
                $req->closeCursor();
                ?>
              </div>
              <div class="p_s">
                 <p id="p_t">histoire de jour</p>
                 <?php
                      $req = $bdd->query("SELECT Id,src_image,titre FROM News WHERE Type='hist' ORDER by date_event LIMIT 0,1");
                      $donnees = $req->fetch();
                 ?>
                 <a href="info_details.php?new=<?php echo $donnees['Id'] ?>&vid=null" class="story_day">
                <img id="im_info" src="<?php    echo htmlspecialchars($donnees['src_image']); ?>" alt="">
            <p id="story_title"><?php    echo htmlspecialchars($donnees['titre']); ?></p>
            </a>
                <?php
                $req->closeCursor();
                ?>
              </div>
              <div class="p_s">
                 <p id="p_t">article scinetifique ou philosophique</p>
                 <?php
                      $req = $bdd->query("SELECT Id,src_image,titre FROM News WHERE Type='art_scien' ORDER by date_event LIMIT 0,1");
                      $donnees = $req->fetch();
                 ?>
               <a href="info_details.php?new=<?php echo $donnees['Id'] ?>&vid=null" class="story_day">
                  <img id="im_info" src="<?php    echo htmlspecialchars($donnees['src_image']); ?>" alt="">
                  <p id="art_title"><?php    echo htmlspecialchars($donnees['titre']); ?></p>
                </a>
                <?php
                $req->closeCursor();
                ?>
              </div>
              </div>
        </div>
          <!--video_photo*****************************************************************************-->
          <?php
          $req = $bdd->query("SELECT Id,titre,src_image,src_ve,contenu FROM News WHERE src_ve is not null
             and Type in('soc_p','interna','eco','cul','sp') ORDER BY date_event DESC LIMIT 0,5");
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
