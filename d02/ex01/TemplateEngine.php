<?php

class TemplateEngine {
	function createFile($fileName, Text $text) {
    $head = "<!DOCTYPE html><html><head><title>ex04</title></head><body>";

    ob_start();
		$text->render();
		$body = ob_get_contents();
    ob_end_clean();

    $footer = "</body></html>";

		file_put_contents($fileName, $head . $body . $footer);
	}
}
