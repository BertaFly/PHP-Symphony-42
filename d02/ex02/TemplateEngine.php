<?php

class TemplateEngine {
  private $templateName;
  private $fileName;

  function __construct($templateName)	{
		$this->templateName = $templateName;
  }

  function createFile(HotBeverage $text) {
    $oReflectionClass = new ReflectionClass($text);

    $this->fileName = $oReflectionClass->getName() . '.html';

    if (file_exists($this->templateName)) {
			$content = file_get_contents($this->templateName);
    }

    $parameters = array();
    preg_match_all('/{.*?}/', $content, $parameters);
    $parameters = $parameters[0];

    foreach ($parameters as $value) {
      switch ($value) {
        case '{nom}':
          $key = 'name';
          break;
        case '{prix}':
					$key = 'price';
          break;
        case '{resistance}':
					$key = 'resistence';
					break;
				case '{description}':
					$v = 'description';
					break;
				case '{commentaire}':
					$key = 'comment';
					break;
				default:
					break;
      }

      $content = str_replace($value, $text->$key, $content);
    }

    file_put_contents($this->fileName, $content);
  }
}
