html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Index.css">
</head>
<body>
</body>
</html>
<?php
			$nome= strip_tags($_POST["nome"]);
			$usuario= strip_tags($_POST["usuario"]);
			$senha= strip_tags($_POST["senha"]);
			$CPF=$_POST["CPF"];
			$email=$_POST["email"];
			$confirmar=$_POST["confirmar"];
			$data= strip_tags($_POST["data"]);
			$sexo=$_POST["sexo"];
			$estado=$_POST["estados"];
            $cidade=$_POST["cidade"];
			
			$erro = 0;

				if(empty($nome) || strstr($nome, ' ')==FALSE){
					echo "Você deve preencher o nome corretamente.<br>";
					$erro = 1;
				} 
				
						
				if(strlen($senha) < 5){
					echo "Coloque uma senha adequada (acima de 5 caracteres).<br>";
					$erro = 1;
				}	
				
				if(strlen($usuario) < 5 || strlen($usuario) > 10){
					echo "Coloque um nome de usuario adequado(entre 5 e 10 letras).<br>";
					$erro = 1;
				}
				
				if(strlen($CPF) != 11){
					echo "Você deve preencher o CPF corretamente(11 números).<br>";
					$erro = 1;
				}

				if(strlen($email) < 3 || strstr($email, '@')==FALSE){
					echo "Você deve preencher o e-mail corretamente.<br>";
					$erro = 1;
				}
                if ($confirmar=!$email){
                    echo "O email digitado tem que ser identico ao email inserido anteriormente.<br>";
                    $erro = 1;
                }
                
                if(empty($sexo)){
                    echo "Você deve selecionar um sexo.<br>";
                    $erro = 1;
                    
                }
                
				if(empty($data)) {
					echo "Você deve preencher a data de nascimento corretamente.<br>";
					$erro = 1;
				}
				
				
				if(empty($estado)) {
					echo "Você deve selecionar um estado corretamente.<br>";
					$erro = 1;
				}
				if(empty($cidade)) {
					echo "Você deve selecionar uma cidade corretamente.<br>";
					$erro = 1;
				}
				
				if ($erro==0) {
					$senha = sha1(strip_tags($_POST["senha"]));
					$CPF =sha1(strip_tags($_POST["CPF"]));
					include 'inserir.php';
				}
		?>
