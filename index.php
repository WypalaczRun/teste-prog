<?php

require_once('class/Cozinha.php');
require_once('class/Ingrediente.php');

$mineira = new Cozinha("Cozinha Mineira", "Feijoada", 14, 20);

$dateNow = new DateTime('NOW');

$feijao = new Ingrediente();
$feijao->setExpireDate($dateNow);
$feijao->setName("Feijão");
$mineira->addIngredient($feijao);

$farinha = new Ingrediente();
$farinha->setExpireDate($dateNow);
$farinha->setName("Farinha");
$mineira->addIngredient($farinha);

$arroz = new Ingrediente();
$arroz->setExpireDate($dateNow);
$arroz->setName("Arroz");
$mineira->addIngredient($arroz);

$carneporco = new Ingrediente();
$carneporco->setExpireDate($dateNow);
$carneporco->setName("Carne de Porco");
$mineira->addIngredient($carneporco);

$linguica = new Ingrediente();
$linguica->setExpireDate($dateNow);
$linguica->setName("Linguiça");
$mineira->addIngredient($linguica);

echo $mineira;

echo "<br><br>";

$chinesa = new Cozinha("Cozinha Chinesa", "Yakissoba", 10, 23);

$champignon = new Ingrediente();
$champignon->setExpireDate($dateNow);
$champignon->setName("Champignon");
$chinesa->addIngredient($champignon);

$brocolis = new Ingrediente();
$brocolis->setExpireDate($dateNow);
$brocolis->setName("Brocolis");
$chinesa->addIngredient($brocolis);

$macarrao = new Ingrediente();
$macarrao->setExpireDate($dateNow);
$macarrao->setName("Macarrao");
$chinesa->addIngredient($macarrao);

$carne = new Ingrediente();
$carne->setExpireDate($dateNow);
$carne->setName("Carne");
$chinesa->addIngredient($carne);

echo $chinesa;
?>