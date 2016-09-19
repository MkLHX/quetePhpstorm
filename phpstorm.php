<?php
	$students = [
	"Emmanuel"  => 42,
	"Thierry"   => 51,
	"Pascal"    => 45,
	"Eric"      => 48,
	"Nicolas"   => 19
	];
	foreach($students as $key=>$value){
	    echo 'age de '.$key.' est '.$value.' ans <br/>';
	}

	function average($tab){
        $addition = '';
        $average = '';
	    foreach($tab as $key=>$value){
	        $addition += $value;
	        $average = $addition/count($tab);

	    }
	    return $average;
	}

	echo 'L\'age moyen de la classe est de :'.average($students);
?>