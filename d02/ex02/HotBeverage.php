<?php

class HotBeverage {
  public $name;
  public $price;
  public $resistence;

  public function getName() {
      return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getResistence() {
    return $this->resistence;
  }

	public function __get($property)
	{
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}
}
