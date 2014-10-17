<?php
$cumle = $_POST['cumle'];
echo alltrire_sil($cumle);

function alltrire_sil($cumle) {
	$array = str_split($cumle);
	$first = 0;
	$last = count($array)-1;
	if ($array[$first]=="_")
		{
			$first++;
		}
	if ($array[$last]=="_") 	
		{
			$last--;
		}
	for( $i = $first; $i < $last; $i++) {
	
		if ($array[$i]=="_")
		{
			$array[$i] = " ";
		}
	}
	return  implode("",$array);
}
?>
