<?php
$word = $_POST['cumle'];
echo ReplaceUnderscoreWithSpace($word);

function ReplaceUnderscoreWithSpace($word) {
	$array = str_split($word);
	$first = 0;
	$last = count($array)-1;
	while($array[$first]=="_")
	//if ($array[$first]=="_") //ilk harf "_" mi?
		{
			$first++;	//ilkini atla
		}
	while ($array[$last]=="_")
	//if ($array[$last]=="_")  //son harf "_" mi?
		{
			$last--;	//sonuncusunu atla
		}
	for( $i = $first; $i < $last; $i++) {  //baştan sona kadar ilerle
	
		if ($array[$i]=="_")		//karakter "_" ise
		{
			$array[$i] = " "; 		//boşlukla değiştir.
		}
	}
	return  implode("",$array);
}
?>
