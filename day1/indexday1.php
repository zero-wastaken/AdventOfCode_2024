<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $myfile = fopen("input1.txt", "r") or die("Unable to open file!");
    $col= [];
    $col2= [];
    $diff = [];
    while(!feof($myfile)) {
        $riga= fgets($myfile);
        $exploded = explode("   ", $riga);
        $col[] = $exploded [0];
        $col2[] = $exploded [1];
      }
      sort($col);
      sort($col2);
      for($i=0;$i<count($col);$i++){
        $diff[$i] = $col[$i]-$col2[$i];
        $absdiff[$i]= abs($diff[$i]);
      }
       echo array_sum($absdiff);
      
    fclose($myfile);
    ?>
</body>
</html>