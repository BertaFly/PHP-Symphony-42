<?php

function array2hash($someAgr) {
	$res = array();
	if (count($someAgr)) {
		foreach($someAgr as $key => $value) {
			if (isset($value[0]) && isset($value[1])) {
				$res[$value[1]] = $value[0];
			}
		}
	}
	return ($res);
}
