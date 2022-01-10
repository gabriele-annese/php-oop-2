<?php
    require_once __DIR__ . '/oop/prodotto.php';
    require_once __DIR__ . '/oop/user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Oop2</title>
</head>
<body>
    <section class="container">
        <?php $user1 = new User('Gabriele', 'Annese' , 19 );
              $Prodotto1 = new Prodotto('MacBook Air M1', 800, 'lorem ipsum')
         ?>
        <ul>
            <li>
                <strong>
                    <?php echo $user1-> getUser() . $Prodotto1->getProdotto() . '<br>'. $user1->getSconto()?>
                </strong>
            </li>
        </ul>
    </section>

</body>
</html>