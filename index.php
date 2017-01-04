<?php

$file = fopen("questions.qs", "r" );
$lines=file("questions.qs");
$theme = "##";
$question = "#";
$possibilites = array();
$tableau1= array();
$tableau2= array();
$numero=0;

echo '<!DOCTYPE html>'.
    '<html>'.
    '<head>'.
    '<meta http-equiv="content-type" content="text/html; charset=utf-8" />'.
    '<title>evaluations du 03 janvier 2017 – Beziers</title>'.
    '<link rel="stylesheet" type="text/css" href="style.css">'.
    '</head>'.
    '<body>'.
    '<section>'.
    '<h1>evaluations du 03 janvier 2017 – Beziers</h1>'.
    '<h2>Morgane SIDOBRE</h2>'.
    '<form method="POST" action="checkbox.php">';

foreach ($lines as $linenumber => $linecontent) {
  if (empty($linecontent) or strlen($linecontent) < 2) continue;
  if (substr($linecontent, 0, 2) == "##") {

      $question = "";
      $possibilites = array();

echo '</article><article>';
      $tableau1 = $linecontent;

echo '<h3>',$tableau1,'</h3>'."\n";
  }
  elseif ($linecontent[0] == '#' and $linecontent[1] != '#') {
      $possibilites = array();
      $tableau2 = $linecontent;

echo '<section id="bloc1"><h4><span>',$numero, $tableau2,'</span></h4>', "\n";
      $numero ++;    }
      elseif ($linecontent[0] == '-')
  {
      $possibilites = $linecontent;

//echo '<li>'.$possibilites.'</li>'."\n";



    echo '<input type="checkbox" name="choix[]" value="'.$tableau2.$linecontent.'">'.$possibilites.'<br>';     // <input type="checkbox" name="choix[]" value="2"> nom 2<br>

     // <input type="checkbox" name="choix[]" value="3"> nom 3<br>

     // <input type="checkbox" name="choix[]" value="4"> nom 4<br>

     // <input type="checkbox" name="choix[]" value="5"> nom 5<br>



   }



//echo'</section>';


 }

echo '<input type="submit" value="envoyé">';

echo '</form>';


echo '</section>';
echo '</body></html>';
