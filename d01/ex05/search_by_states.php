<?php

function search_by_states($strArg) {
  $states = [
    'Oregon' => 'OR',
    'Alabama' => 'AL',
    'New Jersey' => 'NJ',
    'Colorado' => 'CO',
    ];

  $capitals = [
    'OR' => 'Salem',
    'AL' => 'Montgomery',
    'NJ' => 'trenton',
    'KS' => 'Topeka',
    ];

  $townRegion = explode(',', $strArg);
  foreach ($townRegion as $key => $value) {
		$townRegion[$key] = trim($value);
  }

  foreach ($townRegion as $key => $value) {
    $find = false;

    if (isset($states[$value]) && isset($capitals[$states[$value]])) {
      echo $capitals[$states[$value]] . " is the capital of $value.\n";
    } else {
      foreach ($capitals as $key2 => $val) {
				if ($value == $val) {
					$isCapital = $key2;
					foreach ($states as $k => $v) {
						if ($isCapital == $v) {
							$isCapital = $k;
							$find = true;
							break ;
						}
					}
					break ;
				} else {
					$isCapital = false;
				}
      }

			if ($find) {
				echo $value . " is the capital of " . $isCapital . ".\n";
			} else {
				echo "$value is neither a capital nor a state.\n";
			}
    }
  }
}
