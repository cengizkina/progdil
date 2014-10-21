<?php


class Random{

	public $gecmis = array("ornek kelime");	
		
	function randomName($language, $adet)
	{
	
		$isim = array("kedi","insan","deniz","masa","dolap","bilgisayar",
		"kapi","pencere","hafta","gece","gunduz","marti","kazak",
		"sarisin","sahil","merdiven","ahmet","yol","araba","agac",
		"yaprak","dal","adam","konuk","ahmet","koca","kadin");
	    
		$sifat= array("iyi","guzel","hizli","yavas","yakisikli","mert",
		"cimri","kel","masmavi","ucan","kac","yarim","bu","su");
	
		$names = array("baby","child","man","main","house","sea","car",
		"computer","pencil","pen","doctor","window","line");
		
	    	$adjectives = array("good","beatiful","long","small","nice",
		"micke","bad","slow","green","blue","hard");
	
		$sozluk = array(
		"tr" => array($isim, $sifat),
		"en" => array($names, $adjectives)
		);
		
	
		
		$isim_boyut = count($sozluk[$language][0]);
		$sifat_boyut = count($sozluk[$language][1]);
	
		$i = 1;
		while($i <= $adet)
			{
			$index_isim = rand(0,$isim_boyut-1);
			$index_sifat = rand(0,$sifat_boyut-1);
			$kelime = $sozluk[$language][1][$index_sifat]. " " . $sozluk[$language][0][$index_isim] . "\n";
			
			if ($this->kelimeKontrol($kelime)) {
				array_push($this->gecmis,$kelime);
				$i++;
				echo $kelime;
			}
		}
	
	}
	
	function kelimeKontrol($kelime) {
		if (in_array($kelime, $this->gecmis)) {
			return false;
		}else{
			return true;
		}
	}
}

$obj = new Random();
$obj->randomName($argv[1], $argv[2]);

?>
