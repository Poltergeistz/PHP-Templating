<?php
require_once 'vendor/autoload.php';

// Twig templating
$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader, array(
    'cache'=>false,
));

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

echo $twig->render('index.twig.html', [
    'productAdjective' => $faker->word(),
    'productMaterial' => $faker->sentence(),
    'companyName' => $faker->company(),
    'productName' => $faker->bs(),
    'catchPhrase' => $faker->catchPhrase(),
    'userName' => $faker->name(),
    'color' => $faker->safeColorName(),
    'price'=> $faker->randomDigit(),
    'job' => $faker->jobTitle(),
    'url' => $faker->url()
]);
