<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/0e4b71198dc78edf/geolookup/conditions/q/IA/mugassari.json");
	$json_string2 = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/astronomy/q/IA/mugassari.json");
	$json_string3 = file_get_contents ("http://api.wunderground.com/api/a657d7d2ba430b38/planner_07010731/q/IA/mugassari.json");
	$parsed_json = json_decode ($json_string);
	$parsed_json2 = json_decode ($json_string2);
	$parsed_json3 = json_decode ($json_string3);
	$location = $parsed_json->{'response'}->{'version'};
	$test = $parsed_json2->{"moon_phase"}->{"phaseofMoon"};
	$a = $parsed_json3->{"trip"}->{"title"};
	echo "dapat dilihat dari wilayah jawa tengah,semarang";
	echo "<br>";
	echo "Current temperature in ${location}\n";
    echo "<br>";	
	echo "dilihat dari perkembangan bulan di wilayah jawa tengah:${test}\n";
	echo "<br>";
	echo "Jumlah hari di bulan mei : ${a}\n";
?>