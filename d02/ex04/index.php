<?php

include 'Elem.php';
include 'TemplateEngine.php';

$elem = new Elem('html');

$body = new Elem('body');
$body->pushElement(new Elem('p', 'Lorem ipsum', ['class' => 'text-muted', 'id' => 'test-id']));
$elem->pushElement($body);

$template = new TemplateEngine($elem);
$template->createFile('other');
