<?php
class Random  {
	public $word_list = array();	
	function randomName ($language, $adet)  {
		$isim = array(
			"kedi","insan","deniz","masa","dolap","bilgisayar",
			"kapi","pencere","hafta","gece","gunduz","marti","kazak",
			"sarisin","sahil","merdiven","ahmet","yol","araba","agac",
			"yaprak","dal","adam","konuk","ahmet","koca","kadin"
		);
	    
		$sifat= array(
			"iyi","guzel","hizli","yavas","yakisikli","mert",
			"cimri","kel","masmavi","ucan","kac","yarim","bu","su"
		);
	
		$names = array(
			"baby","child","man","main","house","sea","car",
			"computer","pencil","pen","doctor","window","line"
		);
		
	    	$adjectives = array(
	    		"good","beatiful","long","small","nice",
			"micke","bad","slow","green","blue","hard"
		);
	
		$sozluk = array(
			"tr" => array($isim, $sifat),
			"en" => array($names, $adjectives)
		);
		
		$isim_boyut = count($sozluk[$language][0]);
		$sifat_boyut = count($sozluk[$language][1]);
	
		$i = 1;
		while ($i <= $adet)  {
			$index_isim = rand(0,$isim_boyut-1);
			$index_sifat = rand(0,$sifat_boyut-1);
			$kelime = $sozluk[$language][1][$index_sifat]. " " . $sozluk[$language][0][$index_isim];
			
			if ($this->checkWord($kelime)) {
				array_push($this->word_list, $kelime);
				$i++;
				return $kelime;
			}
		}
	
	}
	function checkWord($kelime) {
		if (in_array($kelime, $this->word_list)) {
			return false;
		}
		else  {
			return true;
		}
	}
}
$obj = new Random();
$obj -> randomName ($argv[1], $argv[2]);

?>
