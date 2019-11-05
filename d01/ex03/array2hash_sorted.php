<?php

function array2hash_sorted($someAgr) {
	$res = array();
	if (count($someAgr)) {
    usort($someAgr, function ($item1, $item2) {
	    if ($item1[0] == $item2[0]) return 0;
	    return $item1[0] > $item2[0] ? -1 : 1;
    });

		foreach($someAgr as $key => $value) {
			if (isset($value[0]) && isset($value[1])) {
				$res[$value[0]] = $value[1];
			}
		}
	}
	return ($res);
}
