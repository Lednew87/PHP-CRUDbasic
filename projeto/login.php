<?php
	$html = <<<html
	
	<head>
      
		<meta charset = "utf-8">
		<title> Projeto User </title>
		</head>

        <body>
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
		
		</style>
		
		<form  method="POST">
		 

  
    <label for="uname"><center><b>Usuário</b></center></label>
    <center><input type="text" placeholder="digite seu email" name="usuario" required/></center></br>

    <label for=""><center><b>Senha</b></center</label>
    <center><input type="password" placeholder="digite sua senha" name="senha" required/></center></br>	

    <button type="submit" name="botao" id= "botao">Entrar</button>
   
    </form>
html;

echo $html;
include "funconexao.php";
	
if (isset($_POST['botao'])){
	
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	
	
	$query = mysqli_query(sucesso(), "SELECT status FROM usuarios WHERE usuario = '".$usuario."' and senha_usuario = '".$senha."'");

	$dados = mysqli_fetch_array($query);

		if ($dados['status'] == 1){
				header("Location: menu.php");
		}else{
			echo '<script type="text/javascript">alert("Acesso Negado!"); window.location.href = "login.php"</script>';
	}
	
}
?>
