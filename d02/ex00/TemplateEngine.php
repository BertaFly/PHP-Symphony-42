<?php

class TemplateEngine {
  function createFile($fileName, $templateName, $parameters) {
    if (file_exists($templateName)) {
      $content = file_get_contents($templateName);
    }
    foreach ($parameters as $key => $value) {
      if (strpos($content, '{'.$key.'}') !== false) {
        $content = str_replace('{'.$key.'}', $value, $content);
      }
      file_put_contents($fileName, $content);
    }
  }
}
