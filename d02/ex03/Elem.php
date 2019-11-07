<?php

class Elem {
  public $content;

  private $supportTags = array(
    "meta",
    "img",
    "hr",
    "br",
    "html",
    "head",
    "body",
    "title",
    "h1",
    "h2",
    "h3",
    "h4",
    "h5",
    "h6",
    "p",
    "span",
    "div",
  );

  function __construct($element, $text = null) {
    if (in_array($element, $this->supportTags)) {
      $this->content = "\n<$element>$text</$element>\n";
    }
  }

  public function pushElement(Elem $newTag) {
    $this->content = substr_replace($this->content, $newTag->getHTML(), strpos($this->content, '/') - 1, 0);
  }

  public function getHTML() {
    return $this->content;
  }
}
