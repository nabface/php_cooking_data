<?php
// exercice 1

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

$mots = count($dico);
echo $mots.'<br>'.'<br>';

//Resultat : 336532


//exercice 2

$mot_quinze = array();

foreach ($dico as $mot){

	if (strlen($mot) == 15){
		array_push($mot_quinze, $mot);
	}
}

	echo count($mot_quinze).'<br>'.'<br>';

//Resultat : 12298


//Exercice 3

$mot_w = array();

for ($i = 0 ; $i <= count($dico); $i++) {
	strtolower($i);
	if (substr_count($dico[$i],'w')) {
		
	array_push($mot_w, $i);
		
	}
}
echo count($mot_w).'<br>'.'<br>';

//Resultat : 537


//Exercice 4

$mot_q = array();

foreach ($dico as $char){

	if (substr( $char , -1 ) == 'q'){

		array_push( $mot_q, $char);
		
	}

}
echo count($mot_q).'<br>'.'<br>';

//Resultat : 8
	








/*for($i=0; $i<=count($dico); $i++)
{
	echo count_chars ( $i [, int $mode = 0 ] );

	
	if(count($mots) == 15){
	$mot_quinze = $mots;
	array_search($mot_quinze, $dico);
		echo $mot_quinze;
	}*/
?>
