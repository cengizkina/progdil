<?php

echo ReplaceUnderscoreWithSpace($cumle);

function ReplaceUnderscoreWithSpace($cumle) {
	$dizi = str_split($cumle);
	$first = 0;
	$last = count($dizi)-1;
	if ($dizi[$first] == "_"){
		$first++;
	}
	if ($dizi[$last] == "_"){
		$last--;
	}
	for( $i = $first; $i < $last; $i++) {
	
		if ($dizi[$i] == "_"){
			$dizi[$i] = " ";
		}
	}
	return  implode("", $dizi);
}
?>
