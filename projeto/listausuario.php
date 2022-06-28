<?php
	$html = <<<html

    <head>
      
	 <meta charset = "utf-8">
     <title>Projeto User </title> 
	 <style>
		

			#grad {
                background-image: linear-gradient(to right, darkcyan,cyan,lightcyan,white,lightgray,gray,darkgray);
            }
		
		</style>
		</head>
        <body id = "grad">
		</body>

   

       
html;
echo $html;
		
		 include "funconexao.php";
		 $query = mysqli_query(sucesso(),"SELECT * FROM usuarios");
		 while($dados = mysqli_fetch_array($query)){
			 echo $dados["id"];
			 echo " - ";
			 echo $dados["nome"];
			 echo " - ";
			 echo $dados["usuario"];
			 echo "<br/>";
			 echo "<br/>";
			 echo '<p><a href = alterar.php?id='.$dados["id"].'&nome='.$dados["nome"].'&usuario='.$dados["usuario"].'>ALTERAR</a></p>';
			 echo '<p><a href = excluir.php?id='.$dados["id"].'&nome='.$dados["nome"].'&usuario='.$dados["usuario"].'>EXCLUIR</a></p>';
			}
				

?>
