<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php foreach($this->data as $dt): ?>
        <h2><?php echo $dt -> headline; ?></h2>
        <em><?php echo $dt -> content; ?></em>
        <br>
        <b>
            <?php  if(!empty($dt -> author_id)) {
                        echo $dt -> author_id;
                        echo("<br>");
                        $auth = App\Models\Author::findById($dt->author_id);
                        print_r($auth);
                    } else { 
                        echo("author is empty...");
                    } 
            ?>
        </b>
    <?php endforeach; ?>
    

</body>
</html>