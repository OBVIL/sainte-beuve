<?php
ini_set('display_errors', '1');
error_reporting(-1);
return array(
  "title" => "Sainte-Beuve", // Nom du corpus
  "srcdir" => realpath(dirname(__FILE__).'/../critique/'), // Dossier source, depuis lequel exécuter la commande de mise à jour
  "cmdup" => "git pull 2>&1", // Commande de mise à jour des sources
  "user" => "", // Code utilisateur, à renseigner obligatoirement à l’installation
  "pass" => "", // Mot de passe, à renseigner obligatoirement à l’installation
  "srcglob" => array( "../critique/sainte-beuve/*.xml" ), // sources XML à publier
  "sqlite" => "sainte-beuve.sqlite", // nom de la base avec les métadonnées
  "formats" => "article, toc, epub, kindle, html, markdown, iramuteq", // formats générés
);
?>
