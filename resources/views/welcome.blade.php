<!DOCTYPE HTML>
<html lang="pt-br">
<head>
   <title>Exemplo</title>
   <meta charset="UTF-8">
</head>
<body>
   <form action="" method="get">
      Primeiro Número: <input name="num1" type="text"><br>
      Segundo Número: <input name="num2" type="text"><br>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">     
   </form> 
<?php
try {
    if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operacao'])) {
       $a = $_GET['num1'];
       $b = $_GET['num2'];
       $op = $_GET['operacao'];
 
       if ($op == '+')
          $c = $a + $b;
       else if ($op == '-')
          $c = $a - $b;
       else if ($op == '*')
          $c = $a * $b;
       else
          $c = $a / $b;
 
       echo "O resultado da operação é: $c";
    }
}
catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>       
</body>
</html>
