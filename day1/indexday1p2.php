<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $myfile = fopen("input1p2.txt", "r") or die("Unable to open file!");
        $col= [];
        $col2= [];
        $similarity = [];

        $counter = 0;
        while(!feof($myfile)) {
            $riga= fgets($myfile);
            $exploded = explode("   ", $riga);
            $col[] = $exploded [0];
            $col2[] = $exploded [1];
          }
        for($i=0;$i<count($col);$i++){
            $counter = 0;
            for($j=0;$j<count($col);$j++){
                if($col[$i]==$col2[$j]){
                    $counter++;
                }
                
            }
            $similarity[$i] = $col[$i]*$counter;
            
        }
        echo array_sum($similarity);

    ?>
</body>
</html>