<?php
//echo randomName("en",5);
$class = New OOP();
$class->randomName("en",5);

class OOP{
public $gecmis = ["kontrol","debem"];
function randomName($language, $adet)
{

	$isim = ["kedi","insan","deniz","masa","dolap","bilgisayar",
	"kapi","pencere","hafta","gece","gunduz","marti","kazak",
	"sarisin","sahil","merdiven","ahmet","yol","araba","agac",
	"yaprak","dal","adam","konuk","ahmet","koca","kadin"];
    
	$sifat=["iyi","guzel","hizli","yavas","yakisikli","mert",
	"cimri","kel","masmavi","ucan","kac","yarim","bu","su"];

	$names = ["baby","child","man","main","house","sea","car",
	"computer","pencil","pen","doctor","window","line"];
	
    $adjectives = ["good","beatiful","long","small","nice",
	"micke","bad","slow","green","blue","hard"];

	$sozluk = array(
	"tr" => array($isim, $sifat),
	"en" => array($names, $adjectives)
	);
	
	
	$i = 0;
	$isim_boyut = count($sozluk[$language][0]);
	$sifat_boyut = count($sozluk[$language][1]);
	$gecmis = [];
	
		while($i <= $adet)
		{
			$index_isim = rand(0,$isim_boyut-1);
			$index_sifat = rand(0,$sifat_boyut-1);
			$kelime = $sozluk[$language][1][$index_sifat]. " " . $sozluk[$language][0][$index_isim] . "</br>";
			if ($this->kelimeKontrol($kelime)) {
			array_push($this->gecmis,$kelime);
			$i++;
			echo $kelime;
			}
		}
		print_r ($this->gecmis);
}

function kelimeKontrol($kelime) {
	for ($i=0; i<count($this->gecmis); $i++) {
		return ($kelime != $this->gecmis[$i]);
	
	
	}
	
		
}
}
?>
