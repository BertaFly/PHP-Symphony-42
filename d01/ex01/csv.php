<?php
  $fileName = 'ex01.txt';

  if (file_exists($fileName)) {
    $contentString = file_get_contents($fileName);
    $contentArr = explode(',', $contentString);

    if (count($contentArr)) {
      foreach ($contentArr as $key => $value) {
        echo "$value\n";
      }
      exit;
    }
  }
