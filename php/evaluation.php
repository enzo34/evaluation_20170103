<?php

$file = fopen("question.qs", "r" );

$lines=file("question.qs");$theme = "##";

$question = "#";

$possibilites = array();

$tableau= file("question.qs");

$numero=0;

echo '<!DOCTYPE html>'.

   '<html>'.

   '<head>'.

   '<meta http-equiv="content-type" content="text/html; charset=utf-8" />'.

   '<title>evaluations du 03 janvier 2017 – Beziers</title>'.

   '<link rel="stylesheet" type="text/css" href="style.css">'.

   '</head>'.

   '<body>'.

   '<article>'.

   '<h1>evaluations du 03 janvier 2017 – Beziers</h1>'.

   '<h2>CLAVELLOUX Enzo</h2>'.

   '<section id="bloc1">';

   echo "\n";

foreach ($lines as $linenumber => $linecontent) {

 if (empty($linecontent) or strlen($linecontent) < 2) continue;

 if (substr($linecontent, 0, 2) == "##") {

     // On reinitialise les variables quand on detecte un nouveau theme

     $question = "";

     $possibilites = array();

echo '</article><article>';

     $tableau1 = $linecontent;

echo '<h3>',$tableau1,'</h3>'."\n";

 }

 elseif ($linecontent[0] == '#' and $linecontent[1] != '#') {

     // On reinitialise notre variable possibilité quand on detecte une nouvelle question

     $possibilites = array();

     $tableau2 = $linecontent;

echo '<section id=bloc1><h4><span>',$numero, $tableau2,'</span></h4>', "\n";

if ($tableau[$linenumber+1][0]== "#") {
echo 'test :
<textarea " name="'.$linecontent.'" rows="2" cols="500"></textarea>';
}

     $numero ++;    }    elseif ($linecontent[0] == '-')

 {

   $possibilites = $linecontent;
// echo '<li>'.$possibilites.'</li>'."\n";
echo '<form method="POST" action="reponses.php">
    <input type="checkbox" name="choix[]" value="'.$tableau2.$linecontent.'">'.$possibilites.'<br>';
    //print"$str";
        // <input type="checkbox" name="choix[]" value="2"> nom 2<br>
    // <input type="checkbox" name="choix[]" value="3"> nom 3<br>
    // <input type="checkbox" name="choix[]" value="4"> nom 4<br>
    // <input type="checkbox" name="choix[]" value="5"> nom 5<br>

  }

}

echo '<input type="submit" value="envoyé">';
echo '</form>';
