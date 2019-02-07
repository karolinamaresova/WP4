<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

$uploadFile =$_FILES['myfile'];


var_dump($uploadFile);




if ($uploadFile['size'] >= 524288) {
    echo "Příliš velký soubor";
} else {
    $destinationFilePath = __DIR__
  . DIRECTORY_SEPARATOR
  . "uploads"
  . DIRECTORY_SEPARATOR
  . $uploadFile['name'];
    move_uploaded_file($uploadFile['tmp_name'], $destinationFilePath);
}

     ?>
  </body>
</html>
