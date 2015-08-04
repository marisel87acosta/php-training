<?php

	//$_SERVER

function calculate ($edad){
	$result="";
	if (empty($edad)){
		$result= "Error!, you must enter a value";
	}else{
		if (is_numeric($edad)){
			$result="La edad ingresada fue: $edad";
		}else{
			$result= "Error!, you must enter a numeric value";
		}
	}
	return $result;
}
//usage
if ($_SERVER["REQUEST_METHOD"]=="GET"){
		$value=$_GET["edad"];
	}else{
		$value= $_POST["edad"];
	}

$res=calculate($value);
echo $res;
?>
