<html>
     <head>
          <title>Vida OS/Sistema/verificar!</title>
		  <meta charset="utf-8">         
          <link rel="stylesheet" type="text/css" href="Index.css">
     </head>
     <body>
     </body>
</html> 
<?php
    
    session_start();
	$user = strip_tags($_POST['user']);
	$senha = strip_tags($_POST['senha']);
	echo $senha."<br>";
    $senha = sha1(strip_tags($_POST['senha']));
    // conctando ao BD
    include "conectar.php";

	$query="SELECT * from cadastro WHERE  usuario=? AND senha=?";

	if($stmt = mysqli_prepare($conexao, $query)) {
		mysqli_stmt_bind_param($stmt, "ss", $user, $senha);	
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt,$id,$nome,$usuario,$senha,$CPF,$email,$data,$sexo,$estado,$cidade);
		mysqli_stmt_fetch($stmt);
	  
		if ($user == $usuario && $senha == $senha) {
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha'] = $senha;
			header('location:logado.php');
		}	  
		else {
			echo "Usuario ou senha incorretos";
		}
		mysqli_stmt_close($stmt);
	} else {
		echo "Falha no statment";
	}
	mysqli_close($conexao);
?>
