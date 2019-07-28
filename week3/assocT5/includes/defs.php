<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";

/* Search sample data for $name or $year or $state from form. */
function search($name, $year, $state) {
		global $pms; 
		
		
		//If all input fields are empty, display message
		if (empty($name) && empty($year) && empty($state)) {
			echo "At least one field must contain value.";
		}

		//If year is not an integer and input only contains year, display message
		if ($year !== strval(intval($year)) && empty($name) && !empty($year) && empty($state)) {
			echo "Year must be a number."; 
		}


    // Filter $pms by $name
    if (!empty($name)) {
		$results = array();
		foreach ($pms as $pm) {
			if (stripos($pm['name'], $name) !== FALSE) {
				$results[] = $pm;
			}
		}
		$pms = $results;
    }

    // Filter $pms by $year
    if (!empty($year)) {
		$results = array();
		foreach ($pms as $pm) {
			if (strpos($pm['from'], $year) !== FALSE || 
				strpos($pm['to'], $year) !== FALSE) {
				$results[] = $pm;
			}
		}
		$pms = $results;
    }

    // Filter $pms by $state
    if (!empty($state)) {
		$results = array();
		foreach ($pms as $pm) {
			if (stripos($pm['state'], $state) !== FALSE) {
				$results[] = $pm;
			}
		}
		$pms = $results;
	}

    return $pms;
}
?>
