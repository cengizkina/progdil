<?php

class Underscore{

	function ReplaceUnderscoreWithSpace($cumle) {
		
		$dizi = str_split($cumle);
		$first = 0;
		$last = count($dizi)-1;
		
		if ($dizi[$first] == "_"){
			$first++;
		}
		elseif ($dizi[$last] == "_"){
			$last--;
		}
		
		for( $i = $first; $i < $last; $i++) {
		
			if ($dizi[$i] == "_"){
				$dizi[$i] = " ";
			}
		}
		echo implode("", $dizi) . "\n";
	}
}

$obj = new Underscore();
$obj-> ReplaceUnderscoreWithSpace($argv[1]);

?>
