<?php

require_once __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Alimenti disponibili:</h2>
            <!-- ciclo -->
                <?php foreach( $foods as $food ) { ?>
                    <div class="card" style="width: 18rem;">
                    <img src="<?php echo $food->imgurl?>" class="card-img-top" alt="<?php echo $food->getName()?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $food->getName();?></h5>
                            <h6><?php echo $food->brand;?></h6>
                            <h5 class="card-title">Per: <?php foreach ( $food->categories as $category) {?>
                                <span><?php echo $category->getGraphic($category->animal_name);?></span>
                            <?php }?> </h5>                        
                            <h5 class="card-title">Prezzo: <?php echo $food->getCost();?>€</h5>
                        </div>
                    </div>
                <?php } ?>
        </div>
        <div class="row">
            <h2>Giochi disponibili:</h2>
            <!-- ciclo -->
                <?php foreach( $games as $game ) { ?>
                    <div class="card" style="width: 18rem;">
                    <img src="<?php echo $game->imgurl?>" class="card-img-top" alt="<?php echo $game->getName()?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $game->getName();?></h5>
                            <h6><?php echo $game->brand;?></h6>
                            <h5 class="card-title">Per: <?php foreach ( $game->categories as $category) {?>
                                <span><?php echo $category->getGraphic($category->animal_name);?></span>
                            <?php }?> </h5>                        
                            <h5 class="card-title">Prezzo: <?php echo $game->getCost();?>€</h5>
                            <p><?php echo $game->description; ?></p>
                        </div>
                    </div>
                <?php } ?>
        </div>
        <div class="row">
            <h2>Cucce disponibili:</h2>
            <!-- ciclo -->
                <?php foreach( $houses as $house ) { ?>
                    <div class="card" style="width: 18rem;">
                    <img src="<?php echo $house->imgurl?>" class="card-img-top" alt="<?php echo $house->getName()?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $house->getName();?></h5>
                            <h6><?php echo $house->brand;?></h6>
                            <h5 class="card-title">Per: <?php foreach ( $house->categories as $category) {?>
                                <span><?php echo $category->getGraphic($category->animal_name);?></span>
                            <?php }?> </h5>                        
                            <h5 class="card-title">Prezzo: <?php echo $house->getCost();?>€</h5>
                            <p>Dimensioni:<?php echo $house->size; ?></p>
                        </div>
                    </div>
                <?php } ?>
        </div>
    </div>
</body>
</html>