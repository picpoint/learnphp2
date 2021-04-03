<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        foreach ($this->nws as $nws) {
            ?> <b> <?php print_r($nws -> headline);?> </b> <?php
            echo "<br>";
            print_r($nws -> content);
            echo "<br>";
            echo "<br>";
        }
    ?>

</body>
</html>