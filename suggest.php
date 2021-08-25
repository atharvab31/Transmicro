<?php


$Company[] ="BTB: is a situation where one business makes a commercial transaction with another.";
$Company[] ="BTC: refers to the process of selling products and services directly between a business and clients who are the end-users of its products or services. ";
$Company[] ="CTC: is a business model whereby customers can trade with each other, typically in an online environment.";


//get query string
$q= $_REQUEST['q'];

$suggestion = "";

//get suggestions
if($q !== ""){
$q= strtolower($q);
$len = strlen($q);
foreach ($Company as $c2) {
	if(stristr($q, substr($c2, 0,$len))){
		if($suggestion === ""){
			$suggestion = $c2;
		}else{
			$suggestion .= ", $c2";
		}

	}
}
}

echo $suggestion === "" ? "No Information" : $suggestion;
