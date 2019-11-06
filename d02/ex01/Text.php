<?php

class Text {
  public $content;

  public function __construct($strings) {
    $this->content = $strings;
  }

  public function addStrings($newStr) {
    foreach ($newStr as $key => $value) {
      array_push($this->content, $value);
    }
  }

  public function render() {
    foreach ($this->content as $key => $value) {
      echo "\t\t<p>$value</p>\n";
    }
  }
}
