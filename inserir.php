<html>
<head>
 <meta charset="UTF-8">
</head>
<body>
<?php

include "conectar.php";
$sql="INSERT INTO cadastro(nome,usuario,senha,CPF,email,data,sexo,estado,cidade) VALUES('$nome','$usuario','$senha','$CPF','$email','$data','$sexo','$estado','$cidade')";
$resultado=mysqli_query($conexao,$sql) or die('Erro: '.mysqli_error($conexao));

echo "informações inseridas corretamente";

mysqli_close($conexao);

?>
</body>
</html>