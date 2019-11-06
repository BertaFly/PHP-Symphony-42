<?php

include 'TemplateEngine.php';

$parameters = array(
  'nom' => 'Ira',
  'auteur' => 'inovykov',
  'description' => 'Cool PHP',
  'prix' => '10'
);

$a = new TemplateEngine;
$a->createFile('render.html', 'book_description.html', $parameters);
