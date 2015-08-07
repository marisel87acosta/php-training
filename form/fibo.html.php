<html>
<head></head>
<body>
  <?php
   include("./fibo.php");
    $value= (int)($_GET["limite"]);
    if (empty($value)){
      echo "Error!, no puede quedar vacio";
    }else{
      if ($value<=0) {
        echo "No se puede mostrar 0 o menos elementos, elige un numero";
      }else{
        $fib= fibonacci($value); 
    ?>
        <th> </th>
        <tbody>
           <table border="1" bordercolor=Lightblue>
            <?php foreach ($fib as $fibNum){
              echo "<tr><td style = border-style: solid;>". $fibNum. "</td></tr>";
            }?>
          </table>
          </tbody>
  </body>
</html>