<?php

use Jenssegers\Date\Date;

function usesas($ctrl, $fun, $as = null)
{
	if ($as) {
		return ['uses' => "$ctrl@$fun", 'as' => $as];
	}

	return ['uses' => "$ctrl@$fun", 'as' => $fun];
}

function drawHeader(...$columns)
{
	echo "<template slot=\"header\"><tr>";
	foreach ($columns as $column) {
		echo "<th>" . ucfirst($column) . "</th>";
	}
	echo "</tr></template>";
}

function fdate($original_date, $format = 'Y-m-d', $original_format = 'Y-m-d H:i:s')
{
	if ($original_date) {
		$date = Date::createFromFormat($original_format, $original_date);
		return $date->format($format);
	}

	return 'no original date';
}