<?php
	$html = <<<html


    <head>
      
	 <meta charset = "utf-8">
     <title> Projeto User </title> 
	  </head>
	  
	<style>
		
 		    #btn {
			 
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
   

       
		<form  method="POST">
		
        </body>

html;


				echo $html;
		    	include "funconexao.php";
				
						if (isset($_POST["listar"])) {
						header ("Location: listausuario.php");}
						
						echo "<center><input type = 'submit' value = 'Listar Usuários' name = 'listar' id = 'btn'></center></br>";
						
						if (isset($_POST["cadastrar"])) {
						header ("Location: cadastrausuario.php");}	
						
						echo "<center><input type = 'submit' value = 'Cadastrar Usuários' name = 'cadastrar' id = 'btn'></center></br>";
						
						if (isset($_POST["sair"])) {
						header ("Location: sair.php");}
						echo "<center><input type = 'submit' value = 'Sair' name = 'sair' id = 'btn'></center></br>";		
			 ?>
			