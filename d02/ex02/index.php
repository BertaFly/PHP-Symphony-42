<?php

include 'HotBeverage.php';
include 'Tea.php';
include 'Coffee.php';
include 'TemplateEngine.php';

$hotDrink = new HotBeverage();
$coffee = new Coffee();
$tea = new Tea();

$template = new TemplateEngine('template.html');

$hotDrink->name = 'HotBeverage';
$hotDrink->price = '5';
$hotDrink->resistence = '2';
$template->createFile($hotDrink);

$coffee->name = 'Latte';
$coffee->price = '10';
$coffee->resistence = '8';
$coffee->description = 'Very delisious';
$coffee->comment = 'Recomended';
$template->createFile($coffee);

$tea->name = 'Lipton';
$tea->price = '8';
$tea->resistence = '5';
$tea->description = 'From China mountains';
$tea->comment = 'Recomended';
$template->createFile($tea);
