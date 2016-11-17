<html>
<body>
<?php

//conexao com o banco de dados-> mysqli_connect()
//definir a SQL a ser usada SELECT por exemplo
//executar a SQL -> mysqli_querry()
//fechar a conexao ->mysqli_close()

$conexao=mysqli_connect("127.0.0.1:3306","root","" , "arquivo");

if(mysqli_connect_errno())
{
 echo "não foi possível conectar".mysqli_connect_error();    
}



?>
</body>
</html>
