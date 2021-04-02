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
        foreach($this->oneNews as $onNws) {
            ?> <b> <?php echo($onNws->headline); ?> </b> <?php            
            echo("<br>");
            echo($onNws->content);
        }
    ?>

</body>
</html>