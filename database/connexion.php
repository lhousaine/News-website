<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet1;charset=utf8', 'root', '');
	    $sql = "DELETE FROM News WHERE (mktime(Now())-mktime(date_event))/(3600*24)>100";
			$bdd->exec($sql);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
