<?php

function capital_city_from($state) {
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

  $town = 'Unknown';

	if (isset($states[$state]) && isset($capitals[$states[$state]])) {
		$town = $capitals[$states[$state]];
	}

  return ($town . "\n");
}
