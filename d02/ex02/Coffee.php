<?php

class Coffee extends HotBeverage {
  public $description;
  public $comment;

  public function getDescription() {
    return $this->description;
  }

  public function getComment() {
    return $this->comment;
  }
}
