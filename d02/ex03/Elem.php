<?php

class Elem {
  public $content;

  function __construct($element, $text = null) {
    $this->content = "\n<$element>$text</$element>\n";
  }

  public function pushElement(Elem $newTag) {
    $this->content = substr_replace($this->content, $newTag->getHTML(), strpos($this->content, '/') - 1, 0);
  }

  public function getHTML() {
    return $this->content;
  }
}
