<?php

class TemplateEngine {
  function __construct(Elem $element) {
    $this->content = $element->getHTML();
  }

  function createFile($fileName) {
    file_put_contents("$fileName.html", $this->content);
  }
}
