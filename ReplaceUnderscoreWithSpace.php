<?php
class Underscore  {
	function ReplaceUnderscoreWithSpace($word) {
		if ($this-> justunderscore($word))  {
			echo $word;
		}
		else {
			$array = str_split($word);
			$first = 0;
			$last = count($array)-1;
			
			while ($array[$first] == "_")  {
				$first++;
			}
			while ($array[$last] == "_")  {
				$last--;
			}
			
			for ($i = $first; $i < $last; $i++)  {
			
				if ($array[$i] == "_")  {
					$array[$i] = " ";
				}
			}
			return implode("", $array);
	}
	}
	function justunderscore($word)	{
		$array = str_split($word);
		$i  =0;
		$underscore = true;
		while ($i < count($array) && $underscore)  {
			if ($array2[$i] == "_")	{
				$i++;
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
