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
        foreach($this->news as $new) {            
            ?> <b><?php echo($new -> headline); ?></b> <?php
            echo("<br>");
            echo($new -> content);
            echo("<br>");
            echo("<br>");
        }
    ?>
    
</body>
</html>