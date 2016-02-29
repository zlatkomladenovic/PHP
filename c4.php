<?php

// $niza = array(
// 	"A" => "eden",
// 	"B" => "dva",
// 	"C" => "tri",
// 	"D" => "chetiri",
// 	"E" => "pet",
// 	"F" => "shest",
// 	"G" => "sedum",
// 	"H" => "osum",
// 	"I" => "devet",
// 	"J" => "deset",
// );

// foreach ($niza as $element){
// 	echo $element ."<br/>";
// }



// $broevi = [2, 4, 7, 9, 23, 32, 65, 987, 32, 11];

// $c = count($broevi);
// $zbir = 0;

// foreach ($broevi as $broj) {
// 	$zbir += $broj;
// }

// echo $zbir / $c;



$tekst = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla turpis in sem malesuada tempor. 
Maecenas posuere hendrerit sem quis fringilla. Curabitur fringilla imperdiet lacus, vel accumsan ex pulvinar at. 
Maecenas at luctus sem, vel tincidunt arcu. Quisque molestie sit amet nulla consectetur rhoncus. 
Pellentesque scelerisque, ante sit amet aliquam aliquet, libero elit pharetra diam, a congue lorem turpis porta nulla. 
Morbi efficitur velit nec est luctus, nec egestas augue iaculis. Donec nec orci turpis. Morbi ultrices lacinia turpis id fermentum. 
Quisque malesuada mi nec purus maximus ultricies sed non lorem. 

Vestibulum varius, dui ut facilisis auctor, velit augue placerat libero, sed placerat est ex varius quam. 
Curabitur tortor risus, euismod et lacus in, semper vulputate nisi.

Nam orci metus, tempor quis tristique ac, ornare ut justo. Quisque quis porta sapien. Morbi sollicitudin venenatis pulvinar. 
Mauris ac vulputate libero, sit amet tempor purus. Etiam nec quam sed nisi auctor sollicitudin. In sodales quam tincidunt consequat euismod. 
Morbi facilisis condimentum viverra.

Vivamus placerat tortor sit amet orci blandit, id aliquam massa fermentum. Cras dignissim risus dapibus turpis tempor ullamcorper. 
Aliquam erat volutpat. Aenean ut euismod velit, in consequat ipsum. Suspendisse elementum eu diam sed lobortis. 
Phasellus euismod volutpat orci non auctor. Vivamus varius lectus sit amet quam pharetra, gravida dictum mauris maximus. 
Phasellus porta velit sit amet erat tempor facilisis. Morbi facilisis pretium convallis. Vivamus egestas efficitur urna et ullamcorper. 
Duis consequat ultrices felis, ultricies aliquet velit. Phasellus dolor nibh, eleifend sagittis consectetur id, sagittis et ante.

Nulla bibendum porta sapien. Nam sollicitudin ac enim sit amet ultricies. Etiam convallis est at urna hendrerit, sed malesuada lacus laoreet. 
Aenean enim nisl, placerat quis dui non, commodo elementum libero. Sed dictum quam neque, et auctor nunc congue vitae. 
Aliquam finibus eros eu enim sagittis, sit amet gravida augue consectetur. Pellentesque pellentesque convallis metus eget ullamcorper. 
Donec imperdiet hendrerit urna, nec tempor elit gravida non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
Aenean dignissim tempus leo luctus tempor. Nullam varius nunc ligula, porta congue turpis eleifend in. Praesent a orci sit amet lectus suscipit aliquam. 
Sed id interdum lectus. Nam in dui eget dui hendrerit aliquet. Aenean aliquam ante nulla, sit amet tincidunt est dapibus et. Nullam a purus libero.

Nunc eget porta tortor. Vivamus posuere arcu at nulla pharetra, at convallis lorem egestas. 
Maecenas faucibus, massa sit amet interdum vestibulum, mi ligula tincidunt mauris, sit amet convallis nulla est a massa. 
Curabitur faucibus est sit amet tristique hendrerit. Vestibulum aliquet, magna molestie sodales pulvinar, diam ante pulvinar orci, vel placerat velit lacus at nisl. 
Nunc vitae leo dolor. Morbi sit amet enim ante. Suspendisse tincidunt sit amet elit non fermentum. 
Vivamus dignissim justo leo, ut aliquam neque convallis sed. Curabitur ac pharetra urna. In a nisi et libero lacinia tincidunt non quis leo. 
Nulla nec gravida turpis.";


$recenici = explode('. ', $tekst);
$recenici_count = 0;

$zborovi = explode(' ', $tekst);
$zborovi_count = 0;

foreach ($recenici as $r) {
	$recenici_count++;
}

foreach ($zborovi as $r) {
	$zborovi_count++;
}

echo "Zborovi: ".$zborovi_count;
echo "<br/>";
echo "Recenici: ".$recenici_count;


$reverse = '';

for($i = count($recenici) - 1; $i >= 0; $i--){
	$reverse .= ' '.$recenici[$i].'.';
}

echo $reverse;


?>