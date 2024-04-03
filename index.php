<?php require './db.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP-2</title>


    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .image {
            width: 100px;
            height: 120px;
        }

        img {
            width: 100%;
        }

        .item {
            height: 200px;
            border: solid 1px black;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center mt-3">Prodotti per animali</h2>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4">
                    <div class="d-flex align-items-center item">
                        <div class="image">
                            <img src="<?php echo $product->image; ?>" alt="<?php echo $product->name; ?>">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name; ?></h5>
                            <p class="card-text">Prezzo: <?php echo $product->price; ?> €</p>
                            <?php if ($product instanceof Food) : ?>
                                <p class="card-text">Tipo: <?php echo $product->type; ?></p>
                                <p class="card-text">Calorie: <?php echo $product->calories; ?></p>
                            <?php elseif ($product instanceof Game) : ?>
                                <p class="card-text">Tipo: <?php echo $product->type; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>