<?php
$question = $_POST[$linecontent];
// Le tableau $_POST['prenom'] contient les valeurs des checkbox cochées
$fp = fopen("reponses.html", "rw+");
 header('Location: reponses.html');




  fputs($fp, '<!DOCTYPE html>

      <html>

      <head>

      <meta http-equiv="content-type" content="text/html; charset=utf-8" />

      <title>evaluations du 03 janvier 2017 – ville</title>

      <link rel="stylesheet" type="text/css" href="reponse1.css">

      </head>

      <body>');


foreach($_POST['choix'] as $valeur){



   echo '<p>',"La checkbox, $valeur a été cochée<br>", '<section id=heure>',$heure =date("H:i"),'</section>','</p>';
fputs($fp, '<p>');

fputs($fp, $valeur);

fputs($fp, '</p>');
}



foreach($_POST['ecrire'] as $value){

    echo '<p>',"La box, $value a été ecrite<br>", '<section id=heure>',$heure =date("H:i"),'</section>','</p>';
fputs($fp, '<p>');
fputs($fp, $linecontent);
fputs($fp, $value);
fputs($fp, '</p>');
  }

fputs($fp, '</body>');
fputs($fp, '</html>');
/*

Si l'utilisateur coche Adriana et Candice,

cet exemple va afficher:

La checkbox Adriana a été cochée

La checkbox Candice a été cochée

*/
