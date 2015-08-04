<?php

	//$_SERVER

function compare($edad){
	$result="";
	if (empty($edad)){
		$result= "Error!, you must enter a value";
	}else{
		if (is_numeric($edad)){
			if ( ($edad>=18) && ($edad<=65)){
				$result="Adulto";
			}else{
				if($edad<18){
					$result="Joven";
				}else{
					$result="Jubilado";
				}
			}
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

$res=compare($value);
echo $res;
?>
