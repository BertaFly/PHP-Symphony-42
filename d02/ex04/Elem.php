<?php

class Elem {
  public $content;

  private $html = "";

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
    "table",
    "tr",
    "th",
    "td",
    "ul",
    "ol",
    "li",
  );

  function __construct($element, $text = null, $parameters = array()) {
    if (in_array($element, $this->supportTags)) {
      $this->content = array(
        "tagName" => $element,
        "content" => is_null($text) ? array() : array($text),
        "attributes" => $parameters
      );
    } else {
      $myException = new MyException();
      $myException->throwTagException($element);
    }
  }

  public function pushElement(Elem $element) {
    array_push($this->content["content"], $element);
  }

  private function getInlineAttributes($attributes) {
    $attrString = "";
    foreach($attributes as $key => $value) {
        $attrString .= " {$key}=\"{$value}\"";
    }
    return $attrString;
  }

  public function getHTML($html = "") {
    $tagNeedToClose = array();

    foreach ($this->content as $key => $value) {
      if ($key === "tagName") {
        $attributes = $this->getInlineAttributes($this->content["attributes"]);
        $this->html .= "\n<{$value}{$attributes}>";
        array_push($tagNeedToClose, $value);
      } elseif ($key === "content") {
        foreach ($value as $contentKey => $contentValue) {
          if ($contentValue instanceof Elem) {
            $this->html .= $contentValue->getHTML($html);
          } else {
              $this->html .=  "{$contentValue}";
              $closeTag = array_shift($tagNeedToClose);
              $this->html .=  "</{$closeTag}>\n";
          }
        }
      }
    }

    foreach ($tagNeedToClose as $value) {
      $this->html .=  "</{$value}>\n";
    }

    return $this->html;
  }
}
