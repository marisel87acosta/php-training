<?php

	//$_SERVER

function compare($edad){
	$result="";
	$error="";
	if (empty($edad)){
		$error= "Error!, you must enter a value";
	}else{
		if (is_numeric($edad)){
			if ( ($edad>=18) && ($edad<=65)){
				$result="Adulto, tiene $edad años";
			}else{
				if($edad<18){
					$result="Joven, tiene $edad años";
				}else{
					$result="Jubilado, tiene $edad años";
				}
			}
		}else{
			$error= "Error!, you must enter a numeric value";
		}
	}
	$response= array();
	if ($error==null){
		$response=array(
			"status"=>true,
			"data"=>$result);
	}else{
		$response=array("status"=>false, 
			"data"=>$error);
	}
	return $response;
}
//usage
if ($_SERVER["REQUEST_METHOD"]==="GET"){
		$value=$_GET["edad"];
	}else{
		$value= $_POST["edad"];
	}

$res=compare($value);
?>

<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<select> 
			<?php for ($i=1;$i>10;$i++){
				echo "<option>$i</option>";
			}?>
		</select>
	<?php  if ($res["status"]){ ?>
	Exito: <b><?php  echo $res["data"];?></b>
	<?php } else { ?>
	Error: <p style="color:red;">
		<?php echo $res["data"];?>
	</p> 
	<?php } ?> 
	</div>
</body>
</html>


