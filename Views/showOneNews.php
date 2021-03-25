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
        /**
         * перебираем массив статьи и выводим саму статью
         */
    ?>
    <?php foreach($this->data as $dt): ?>
        <h2><?php echo $dt -> headline; ?></h2>
        <em><?php echo $dt -> content; ?></em>
        <br>
        <b>
            <?php  if(!empty($dt -> author_id)) {
                        echo("<br>");
                        $authr = App\Models\Author::findByIdAuthr($dt->author_id);
                        /**
                         * перебираем объект автора и выводим фио автора статьи 
                         */
                        foreach($authr as $auth) {
                            echo("Автор статьи: ");
                            echo $auth -> firstname;
                            echo(" ");
                            echo $auth -> lastname;
                        }

                    } else { 
                        echo("автор не известен... ");
                    } 
            ?>
        </b>
    <?php endforeach; ?>
    

</body>
</html>