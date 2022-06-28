<!DOCTYPE html>

<html>

	<head>

	 <meta charset = "utf-8">
     <title> Projeto User </title> 
	 
	 <body id = "grad">
	
	 </head>
    
      
	 <meta charset = "utf-8">
     <title>Projeto User </title> 
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
            }
		
		</style>
		
		
		<form  method="POST">

		<button type="submit" name="botao" id="botao">Cancelar</button>
		<button type="submit" name="botao" id="botao">Confirmar Exlusão</button>

		</form>

		</body>
		
</html>
   

       

<?php

include "funconexao.php";

$id = $_REQUEST ["id"];  
$nome = $_REQUEST["nome"];
$usuario = $_REQUEST["usuario"];

 
echo $id;
echo " - ";
echo $nome;
echo " - ";
echo $usuario;
echo "<br/>";
echo "<br/>";

	if (isset($_POST['botao'])){
		echo '<script type="text/javascript">confirm("Dados excluidos com sucesso!"); window.location.href = "listausuario.php"</script>';
		mysqli_query(sucesso()," DELETE FROM usuarios WHERE id = ".$id);
	
	 }

 ?>                                                                                           