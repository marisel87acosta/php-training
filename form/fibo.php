
<?php
/**
*Returns a secuency oh fibonacci as an array 
*@para($limit) int
*/
function fibonacci ($limit){
	$serie = array();
	$n = 0;
	for ($i=0; $i<$limit; $i++){
		if ($i==0){
		$serie[] = 1;
		}
		if ($i==1){
		$serie[] = 1;
		}
		if ($i>1){
		$n = $serie[$i-1];
		$n1 = $n + $serie[$i-2];
		$serie[] = $n1;
	}

	}	

	return ($serie);
	//return array (1,2,3,5,);
}
?>

