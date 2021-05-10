<! DOCTYPE html >
< html >
	< cabeça >		
		< Vínculo  rel = " stylesheet " href =" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css " integridade =" SHA384-Gn5384xqQ1aoWXA + 058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW / dAiS6JXm " crossorigin =" anonymous " >
	</ head >
	< corpo >
		<? php
			$ con = mysqli_connect ( "localhost" , "root" , "" , "dawalunos" );		
			if ( isset ( $ _POST [ 'enviar' ])) {
					$ NOME = $ _POST [ 'NOME' ];
					$ ORIENTADOR = $ _POST [ 'ORIENTADOR' ];
					$ ESCOLA = $ _POST [ 'ESCOLA' ];				
					echo ( $ NOME ! = "" && $ ORIENTADOR ! = "" && $ ESCOLA ! = "" )?
					( mysqli_query ( $ con , "INSERT INTO alunos (NOME, ORIENTADOR, ESCOLA) VALUES ('$ NOME', '$ ORIENTADOR', '$ ESCOLA')" ))?
							"<script> alert ('Aluno inserido com sucesso!') </script>" :
								"<script> alert ('Erro, aluno não inserido!') </script>" :
									"<script> alert ('Preencha os campos!') </script>" ;
				}
		?>
		< div  class = " container " >			
			< div  class = " card text-center mt-5 " >			
				< div  class = " card-body " >					
					< form  class = " mt-4 " method = " POST " action = "" >			
						< input  type = " text "		 name = " NOME " 		 placeholder 	= " Nome " >						
						< input  type = " text "		 name = " ORIENTADOR "	 placeholder 	= " Orientador " >							
						< input  type = " text "		 name = " ESCOLA "		 placeholder 	= " Escola " >
						< input  type = " submit "	 name = " submit " 		 value 		= " Adicionar aluno " >
					</ form >					
				</ div >
				< div  class = " card-footer text-muted " >
					< A  href = " index.php "				 class =" btn btn-primária "	 > Início </ a > < br > < br >
					< A  href = " inserirArquivo.php "	 class =" btn btn-primária "	 > Preço total: Adicionar POR Arquivo </ a >
				</ div >
			</ div >
		</ div >
		< Roteiro  src = " https://code.jquery.com/jquery-3.2.1.slim.min.js " integridade =" SHA384-KJ3o2DKtIkvYIK3UENzmM7KCkRr / RE9 / Qpg6aAZGJwFDMVNA / GpGFF93hXpG5KkN " crossorigin =" anonymous " > </ script de >
		< Roteiro  src =" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integridade =" SHA384-ApNbgh9B + Y1QKtv3Rn7W3mgPxhU9K / ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin =" anonymous " > </ script >
		< Roteiro  src = " https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integridade =" SHA384-JZR6Spejh4U02d8jOt6vLEHfe / JQGiRRSQQxSfFWpi1MquVdAyjUar5 + 76PVCmYl " crossorigin =" anonymous " > </ script de >
	</ body >
</ html >
