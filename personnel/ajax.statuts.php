<?php
/*
Planning Biblio, Version 1.9.5
Licence GNU/GPL (version 2 et au dela)
Voir les fichiers README.md et LICENSE
Copyright (C) 2011-2015 - Jérôme Combes

Fichier : personnel/ajax.statuts.php
Création : 15 février 2014
Dernière modification : 9 avril 2015
Auteur : Jérôme Combes, jerome@planningbilbio.fr

Description :
Enregistre la liste des statuts dans la base de données
Appelé lors du clic sur le bouton "Enregistrer" de la dialog box "Liste des statuts" à partir de la fiche agent
*/

ini_set('display_errors',0);

session_start();

include "../include/config.php";
$tab=json_decode($_POST['tab']);

$db=new db();
$db->delete("select_statuts");
foreach($tab as $elem){
  $db=new db();
  $db->insert2("select_statuts",array("valeur"=>$elem[0],"categorie"=>$elem[1],"rang"=>$elem[2]));
}
?>