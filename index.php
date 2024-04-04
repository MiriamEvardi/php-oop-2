<?php require './db.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP-2</title>

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        .card {
            height: 100%;

            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Prodotti per animali</h1>
        <div class="row">
            <?php if ($error) : ?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                </div>
            <?php else : ?>
                <?php foreach ($products as $product) : ?>
                    <div class="col-sm-4 mb-3">
                        <div class="card">
                            <img src="<?= $product->image ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5><?= $product->name ?></h5>
                                <div class="mb-2"><?= '€ ' . $product->price ?></div>
                                <h6><?= $product->category->getCategoryIcon() ?></h6>
                                <?php if ($product instanceof Food) : ?>
                                    <p class="card-text">Gusto: <?= $product->protein ?></p>
                                    <p class="card-text">Calorie: <?= $product->calories ?></p>
                                <?php elseif ($product instanceof Game) : ?>
                                    <p class="card-text">Materiale: <?= $product->material ?></p>
                                <?php endif; ?>
                                <div><?= 'Peso: ' . $product->getWeight() ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>