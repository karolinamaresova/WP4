<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

$categories = array(
  'Domovská kategorie' => array(
    'Černé čaje' => array(
      'Čína' => array(
        "Jin Mao Feng",
        "Golden Yunnan",
      ),
      'Indie' => array(
        "Assám",
        "Nilgiri Shiva",
      ),
      'Keňa' => array(
        "Keňa",
      )
    ),
    'Zelené čaje' => array(
      'Japonsko' => array(
        "Hojicha",
        "Sencha",
        "Genmaicha",
      ),
      'Čína' => array(
        "Zhu cha",
        "Chan mei",
        "Dian Lu Cha",

      )
    )
  )
);

printCategory($categories, 0);
function printCategory($category, $level)
{
    foreach ($category as $index => $value) {
        for ($i=0; $i < $level ; $i++) {
            echo "-";
        }
        if (is_array($value) == true) {
            echo $index;
            echo "<br>";
            printCategory($value, $level
      +1);
        } else {
            echo "$index => $value";
            echo "<br>";
        }
    }
}





 ?>



  </body>
</html>
