<?php
echo randomName("en",5);

	
	
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
	
	$gecmis = [];
	$i = 0;
	$isim_boyut = count($sozluk[$language][0]);
	$sifat_boyut = count($sozluk[$language][1]);

	
		while($i <= $adet)
		{
			$index_isim = rand(0,$isim_boyut-1);
			$index_sifat = rand(0,$sifat_boyut-1);
			echo $sozluk[$language][1][$index_sifat]." ";
			echo $sozluk[$language][0][$index_isim] . "</br>";
			$i++;
		}

	
}

?>
