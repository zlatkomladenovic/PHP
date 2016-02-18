<?php

// for($i = 0; $i < 10; $i = $i + 1){
// 	echo $i;
// 	echo "<br>";
// }

// for($i = 13; $i < 99; $i++){
// 	if ($i % 2 == 0){
// 		echo $i;
// 		echo "<br>";
// 	}
// }

// for($i = 50; $i > 30; $i--){
// 	if ($i % 2 == 1){
// 		echo $i;
// 		echo "<br>";
// 	}
// }

// $kontinenti = array();

// $kontinenti[] = "Europe";
// $kontinenti[] = "Africa";
// $kontinenti[] = "Asia";
// $kontinenti[] = "North America";
// $kontinenti[] = "South America";
// $kontinenti[] = "Antartica";
// $kontinenti[] = "Australia";

// $c = count($kontinenti);

// for ($i=0; $i < $c; $i++){
// 	echo $kontinenti[$i].'<br/>';
// }

$studenti = array(
	array(
		'ime' => 'Bojan',
		'prezime' => 'Gavrovski',
		'prosek' => '6.4'
		),
	array(
		'ime' => 'Pero',
		'prezime' => 'Perovski',
		'prosek' => '8.0'
		),
	array(
		'ime' => 'Janko',
		'prezime' => 'Jankovski',
		'prosek' => '7.3'
		),
);

// $c = count($studenti);

// for ($i=0; $i < $c; $i++) { 
// 	echo $studenti[$i]['ime'];
// 	echo '<br/>';
// }

$val = max(array(6.4, 8.0, 7.3));
echo max(6.4, 8.0, 7.3);