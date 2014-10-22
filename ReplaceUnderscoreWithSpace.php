<?php

class Underscore  {

	function ReplaceUnderscoreWithSpace($word) {
		if (justunderscore($word))  {
			echo $word;
		}
		else 
		{
			$array = str_split($word);
			$first = 0;
			$last = count($array)-1;
			
		while ($array[$first] == "_")  {
			$first++;
		}
		while ($array[$last] == "_")  {
			$last--;
		}
		
		for( $i = $first; $i < $last; $i++)  {
		
			if ($array[$i] == "_")  {
				$array[$i] = " ";
			}
		}
		echo implode("", $array) . "\n";
	}
	}
	function justunderscore($word)	{
		$array2 = str_split($word);
		$j=0;
		$underscore = true;
		while($j < count($array2) && $underscore)  {
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
