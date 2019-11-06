<?php

include 'TemplateEngine.php';
include 'Text.php';

$a = new TemplateEngine;
$b = new Text(array('First row - 1', 'Second row - 2'));
$b->addStrings(['Third row - 3', 'Surprise']);
$a->createFile('render.html', $b);
