<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        foreach($this->nwsAdm as $nws) {
            ?> <b> <?php print_r($nws->headline); ?> </b> <?php
            echo "<br>";
            print_r($nws->content);
            echo "<br>";
            echo "<br>";
        }


    ?>
</body>
</html>