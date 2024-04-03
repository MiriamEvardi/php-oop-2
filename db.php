<?php
require './Models/Category.php';
require './Models/Products.php';
require './Models/Game.php';
require './Models/Food.php';


$food1 = new Food("Croccantini per cani", 10.99, "https://content.dambros.it/uploads/2023/02/07071553/8012386390097-070.png", "Manzo", "406 Kcal/100gr");
$food1Category = new Category("dog");
$food1->category = $food1Category;

$food2 = new Food("Scatolette per gatti", 5.99, "https://www.jonicamangimi.com/2572/scatolette-per-gatti-petreet-natura-tonno-rosa-con-salmone-tr-08-70-gr.jpg", "Tonno", "406 Kcal/100gr");
$food2Category = new Category("cat");
$food2->category = $food2Category;

$game1 = new Game("Gioco per cani", 10.99, "https://impawsible.it/wp-content/uploads/2021/04/pollo-di-gomma-2.jpg", "gomma");
$game1Category = new Category("dog");
$game1->category = $game1Category;

$game2 = new Game("Gioco per gatti", 15.99,  "https://www.nunziatastore.it/ProductsResources/6020/91D85082099_0_ori.jpeg", "plastica");
$game2Category = new Category("cat");
$game2->category = $game2Category;

$products = [
    $game1,
    $game2,
    $food1,
    $food2
];
