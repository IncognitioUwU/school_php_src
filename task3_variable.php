<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
        function areColoursTheSame($col1, $col2){
            if ($col1 != $col2){
                echo "not";
            }
        }
        $color1 = "red";
        $color2 = "blue";
        $doc = <<<TXT
        My car is $color1<br>
        My shirt is $color2<br>
        My car and shirt are 
        TXT;
        echo $doc;
        ?>
    </body>
</html>