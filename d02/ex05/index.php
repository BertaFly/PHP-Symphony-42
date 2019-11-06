<?php

include 'Elem.php';
include 'TemplateEngine.php';

$elem = new Elem('html');

$body = new Elem('body');
$head = new Elem('head');
$table = new Elem('table');
$tr1 = new Elem('tr');
$ul = new Elem('ul');
$head->pushElement(new Elem('meta', '', ["charset" => "UTF-8"]));
$head->pushElement(new Elem('title', 'Page title'));
$tr1->pushElement(new Elem('th', 'Here th'));
$table->pushElement($tr1);
$ul->pushElement(new Elem('li', 'li 1'));
$ul->pushElement(new Elem('li', 'li 2'));
$body->pushElement(new Elem('p', 'Next tag is ul:', ['class' => 'text-muted']));
$body->pushElement($ul);
$body->pushElement($table);
$elem->pushElement($head);
$elem->pushElement($body);
$template = new TemplateEngine($elem);
if ($elem->validPage()) {
    $template->createFile("test");
} else {
    echo "\nIt's not valid page\n";
}
