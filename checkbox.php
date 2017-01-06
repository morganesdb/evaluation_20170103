<?php

// Le tableau $_POST['prenom'] contient les valeurs des checkbox cochées
$fp = fopen("reponse.html", "w+");



  fputs($fp, '<!DOCTYPE html>



      <html>



      <head>



      <meta http-equiv="content-type" content="text/html; charset=utf-8" />



      <title>evaluations du 03 janvier 2017 – ville</title>



      <link rel="stylesheet" type="text/css" href="reponse.css">



      </head>



      <body>');





foreach($_POST as $key => $value){







   echo $key . '<p>', " response :  $value<br>", '</p>';
fputs($fp, '<p>La checkbox $valeur a été cochée<br><section id=heure>$heure =date("H:i")</section></p>');

fputs($fp, $valeur);

}







//foreach($_POST['ecrire'] as $value){



    //echo '<p>',"La box, $value a été ecrite<br>", '<section id=heure>',$heure =date("H:i"),'</section>','</p>';

//fputs($fp, '<p>La box $value a été ecrite<br> <section id=heure>$heure =date("H:i")</section></p>');

  //}





/*



Si l'utilisateur coche Adriana et Candice,



cet exemple va afficher:



La checkbox Adriana a été cochée



La checkbox Candice a été cochée
