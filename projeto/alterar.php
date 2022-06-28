<!DOCTYPE html>
      
	 <meta charset = "utf-8">
     <title> Projeto User </title> 
	 
	 <body id = "grad">

	 <head>
		 
	 <style>
		
 		    .botao {
			 
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

        </head>
       

		<form  method="POST">
		 

		<div class="container"> 

        <label for="uname"><center><b>ID do Usuário</b></center></label>
		<center><input type="text" placeholder="digite seu nome" name="nome" value="<?php echo $_REQUEST["id"]?>" required/></center></br>

		<label for="uname"><center><b>Nome do Usuário</b></center></label>
		<center><input type="text" placeholder="digite seu nome" name="nome" value="<?php echo $_REQUEST["nome"]?>" required/></center></br>

		<label for=""><center><b>Email do Usuário</b></center</label>
		<center><input type="text" placeholder="digite seu email" name="email" value="<?php echo $_REQUEST["usuario"]?>" required/></center></br>	
		
		 <label for=""><center><b>Senha do Usuário</b></center</label>
		<center><input type="text" placeholder="digite sua senha" name="senha"></center></br>	

		<button type="submit" name="botao" id="botao">Confirmar Alteração</button>
	
		</div>
    </form>
	</body>
</html>
   
<?php
	include "funconexao.php";
	if (isset($_POST['botao'])){
		if(isset($_POST['senha']) and empty($_POST['senha'])){
		mysqli_query(sucesso(), "UPDATE usuarios SET nome = '".$_POST['nome']."', usuario = '".$_POST['email']."', status = 1 WHERE id = ". $_REQUEST["id"]);
		
		echo '<script type="text/javascript">alert("Dados alterados com sucesso!"); window.location.href = "listausuario.php"</script>';
		}else{
		mysqli_query(sucesso(), "UPDATE usuarios SET nome = '".$_POST['nome']."', usuario = '".$_POST['email']."', senha_usuario = '".$_POST['senha']."' , status = 1 WHERE id = ". $_REQUEST["id"]);
		echo '<script type="text/javascript">alert("Dados alterados com sucesso!"); window.location.href = "listausuario.php"</script>';
		}
	}
	
 ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                   