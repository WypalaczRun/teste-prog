<?php

require __DIR__ . '/vendor/autoload.php';

use Restaurante\Cozinha;
use Restaurante\Ingrediente;

$mineira = new Cozinha("Cozinha Mineira", "Feijoada", 14, 20);

$feijao = new Ingrediente("Feijao", new DateTime('2023-08-23'));
$mineira->addIngredient($feijao);

$farinha = new Ingrediente("Farinha", new DateTime('2022-12-15'));
$mineira->addIngredient($farinha);

$arroz = new Ingrediente("Arroz", new DateTime('2024-06-09'));
$mineira->addIngredient($arroz);

$carneporco = new Ingrediente("Carne de Porco", new DateTime('2022-03-29'));
$mineira->addIngredient($carneporco);

$linguica = new Ingrediente("Linguiça", new DateTime('2025-07-12'));
$mineira->addIngredient($linguica);

// you can add multiple ingredients at once too if you want
// $ingredients = array($feijao, $farinha, $arroz, $carneporco, $linguica);
// $mineira->addIngredients($ingredients);

echo $mineira;

echo "<br>";

$chinesa = new Cozinha("Cozinha Chinesa", "Yakissoba", 10, 23);

$champignon = new Ingrediente("Champignon", new DateTime('2023-01-12'));
$chinesa->addIngredient($champignon);

$brocolis = new Ingrediente("Brocolis", new DateTime('2023-05-08'));
$chinesa->addIngredient($brocolis);

$macarrao = new Ingrediente("Macarrão", new DateTime('2025-05-05'));
$chinesa->addIngredient($macarrao);

$carne = new Ingrediente("Carne", new DateTime('2022-10-17'));
$chinesa->addIngredient($carne);

// you can add multiple ingredients at once too if you want
// $ingredients = array($champignon, $brocolis, $macarrao, $carne);
// $chinesa->addIngredients($ingredients);

echo $chinesa;