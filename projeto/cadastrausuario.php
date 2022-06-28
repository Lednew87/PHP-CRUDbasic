<?php
	$html = <<<html
	
	 <head>
      
		<meta charset = "utf-8">
		<title> Projeto User </title>
		<style>
		
 		    #botao {
			 
			 position: relative;
			 width: 300px;
			 height: 50px;
			 background: lightblue;
			 font-size: 30px;
			 font-color: darkblack;
			 padding: 2px
			 bolder: 1px;
			 border-radius: 7px;
		    }
			
			#grad {
                background-image: linear-gradient(to right, darkcyan,cyan,lightcyan,white,lightgray,gray,darkgray);
				font-size: 50px;
            }
		
		</style>

        <body id = "grad">
	</head>

        <body>
	<form  method="POST">
		 

		<div class="container">
		<label for="uname"><center><b>Nome do Usuário</b></center></label>
		<center><input type="text" placeholder="digite seu nome" name="nome" required/></center></br>

		<label for=""><center><b>Email do Usuário</b></center</label>
		<center><input type="text" placeholder="digite seu email" name="email" required/></center></br>	
		
		 <label for=""><center><b>Senha do Usuário</b></center</label>
		<center><input type="text" placeholder="digite sua senha" name="senha" required/></center></br>	

		<button type="submit" name= "botao" id= "botao">Confirmar Cadastro</button>
	
		</div>
    </form>
html;

	echo $html;
		include "funconexao.php";
	if (isset($_POST['botao'])){
		
		mysqli_query(sucesso(),"INSERT INTO usuarios(nome,usuario,status,senha_usuario) VALUES ('".$_POST['nome']."','".$_POST['email']."','1','".$_POST['senha']."')"); 
		echo '<script type="text/javascript">alert("Dados inseridos com sucesso!"); window.location.href = "login.php"</script>';
	}
	
	