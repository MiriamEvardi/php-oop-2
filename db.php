<?php
require './Models/Category.php';
require './Models/Products.php';
require './Models/Game.php';
require './Models/Food.php';


$food1 = new Food("Croccantini per cani", 10.99, "https://content.dambros.it/uploads/2023/02/07071553/8012386390097-070.png", "Proteine Animali", "406 Kcal/100gr");
$food2 = new Food("Scatolette per gatti", 5.99, "https://content.dambros.it/uploads/2023/02/07071553/8012386390097-070.png", "Proteine Animali", "406 Kcal/100gr");

$game1 = new Game("Croccantini per cani", 10.99, "https://content.dambros.it/uploads/2023/02/07071553/8012386390097-070.png", "gomma");
$game2 = new Game("Scatolette per gatti", 5.99,  "https://content.dambros.it/uploads/2023/02/07071553/8012386390097-070.png", "gomma");

$products = [
    $game1,
    $game2,
    $food1,
    $food2
];
