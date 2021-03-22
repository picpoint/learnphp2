<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    


    <h3>Товары</h3>
    <table class="table table-striped">   
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Товар</th>
            <th scope="col">Цена</th>
        </tr>
        
        <?php foreach($this->data['products'] as $prod) { ?>
            <tr>
                <td> <?php echo $prod -> id ?> </td>
                <td> <?php echo $prod -> title ?> </td>
                <td> <?php echo $prod -> price ?> </td>
            </tr> 
        <?php } ?>

    </table>

    
    <?php 
        echo("<br>");
        echo("<br>");
        echo("<br>");    
    ?>


    <h3>Услуги</h3>
    <table class="table table-striped">   
        <tr>
            <th>Id</th>
            <th>Услуга</th>
            <th>Цена</th>
        </tr>

        <?php foreach($this->data['services'] as $serv) { ?>
            <tr>
                <td> <?php echo $serv -> id ?> </td>
                <td> <?php echo $serv -> title ?> </td>
                <td> <?php echo $serv -> price ?> </td>
            </tr> 
        <?php } ?>


    </table>



</body>
</html>