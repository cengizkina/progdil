<?php

class Underscore  {

	function ReplaceUnderscoreWithSpace($cumle) {
		if (justunderscore($word))  {
			echo $word;
		}
		else 
		{
			$dizi = str_split($cumle);
			$first = 0;
			$last = count($dizi)-1;
			
		while ($dizi[$first] == "_")  {
			$first++;
		}
		while ($dizi[$last] == "_")  {
			$last--;
		}
		
		for( $i = $first; $i < $last; $i++)  {
		
			if ($dizi[$i] == "_")  {
				$dizi[$i] = " ";
			}
		}
		echo implode("", $dizi) . "\n";
	}
	}
	function justunderscore($word)	{
		$array2 = str_split($word);
		$j=0;
		$underscore = true;
		while($j < count($array2)&& $underscore)  {
			if($array2[$j] == "_")	{
				$j++;
				$underscore = true;
			}
			else  {
				$underscore = false;
			}
		}
		return $underscore;
	} 
	
}

$obj = new Underscore();
$obj-> ReplaceUnderscoreWithSpace($argv[1]);

?>
