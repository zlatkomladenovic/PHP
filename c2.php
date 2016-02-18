<?php
// 	function parnepar($a) {
// 		return $a % 2;
// 	}

// 	echo parnepar(2);

// 	$a = 10;

// 	if($a == 10){
// 		echo "a e 10";
// 	} else {
// 		echo "a ne e 10";
// 	}

// 	$b = 5;

// 	if($b == 2){
// 		echo "2";
// 	} else if($b == 3){
// 		echo "3";
// 	} else if($b == 4){
// 		echo "4";
// 	} else if($b == 5){
// 		echo "5";
// 	} else {
// 		echo "Nepoznat broj!";
// 	}

// $b = 1001;
// $c = 30;

// if($c > 10 && $b < 10000){
// 	echo "Vistina!";
// }

// pogolempomal(10);

// function pogolempomal($a) {
// 	if ($a < 10) {
// 		echo "pomal";
// 	} else if ($a > 10) {
// 		echo "pogolem";
// 	} else {
// 		echo "ednakov";
// 	}
// }



// $den = 'ponedelnik';

// switch ($den) {
// 	case 'ponedelnik':
// 		echo "Prv den od nedelata!";
// 		break;
// 	case 'vtornik':
// 		echo "Vtor den od nedelata!";
// 		break;
// 	case 'sreda':
// 		echo "Tret den od nedelata!";
// 		break;
// 	case 'cetvrtok':
// 		echo "Cetvrt den od nedelata!";
// 		break;
// 	case 'petok':
// 		echo "Petti den od nedelata!";
// 		break;
// 	case 'sabota':
// 		echo "Sesti den od nedelata!";
// 		break;
// 	case 'nedela':
// 		echo "Sedmi den od nedelata!";
// 		break;
// 		default:
// 			echo "Nepoznat den";
// 		break;
// }


// par_nepar_switch(22); 
// par_nepar_switch(27);


// function par_nepar_switch($a){
	
// 	$vrednost = $a % 2;

// 	switch ($vrednost) {
// 		case 0:
// 			return 'par';
// 		break;
		
// 		case 1:
// 			return 'nepar';
// 		break;
// 	}
// }

// echo "<br>";
// echo par_nepar_switch(22); 
// echo "<br>";
// echo par_nepar_switch(27);


// ovoshje('banana'); //ubavo ovoshje
// ovoshje('jabolko'); //neubavo ovoshje

// function ovoshje($a){
// 	$dolzina = strlen($a);
// 	$vrednost = $dolzina % 2;

// 	if($vrednost == 0){
// 		echo "ubavo ovoshje";
// 	} else {
// 		echo "neubavo ovoshje";
// 	}
// }

denovi('ponedelnik');
denovi('vtornik');
denovi('sreda');
denovi('cetvrtok');
denovi('petok');
denovi('sabota');
denovi('nedela');


function denovi($a){
	
	

	if ($a == 'ponedelnik'){
		echo "raboten den";
	}

	if ($a == 'vtornik'){
		echo "raboten den";
	}

	if ($a == 'sreda'){
		echo "raboten den";
	}
	
	if ($a == 'cetvrtok'){
		echo "raboten den";
	}

	if ($a == 'petok'){
		echo "raboten den";
	}

	if ($a == 'sabota'){
		echo "neraboten den";


	if ($a == 'nedela'){
		echo "neraboten den";
	}
}

}
?>