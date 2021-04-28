<! DOCTYPE html >
< html >
	< cabeça >
		< title > PHP bruta </ title >
		< Vínculo  rel = " stylesheet " href =" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css " integridade =" SHA384-Gn5384xqQ1aoWXA + 058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW / dAiS6JXm " crossorigin =" anonymous " >
	</ head >
	< corpo >

		
		<? php
			inclua  "connection.php" ;
			
			if ( isset ( $ _POST [ 'enviar' ])) {
				$ nome = $ _POST [ 'nome' ];
				$ mat = $ _POST [ 'mat' ];
				$ datanasc = $ _POST [ 'datanasc' ];
				$ nomeValido = 0 ;
				$ matriculaValida = 0 ;
				$ dataValida = 0 ;
			
				if ( $ nome ! = "" e ctype_alpha ( $ nome )) {
					$ nomeValido = 1 ;
				}
				if ( $ mat ! = "" ) {
					$ matriculaValida = 1 ;
				}
				if ( $ datanasc ! = "" ) {
					$ dataValida = 1 ;
				}

				if ( $ nomeValido == 1 && $ matriculaValida == 1 && $ dataValida == 1 ) {
					$ Query = mysqli_query ( $ con , "INSERT INTO Alunos (nome, mat, datanasc) VALUES ('$ nome', '$ mat', '$ datanasc')" );
					if ( $ Query ) {
						echo  "<script> alert ('Registro do aluno foi inserido com sucesso!') </script>" ;
					} else {
						echo  "<script> alert ('Desculpe, ocorreu um erro!') </script>" ;
					}
				}
				else {
					echo  "<script> alert ('Preencha os campos!') </script>" ;
				}
			
				
			}
		?>

		

		< div  class = " container " >
			
			< div  class = " card text-center mt-5 " >
				< div  class = " card-header " >
					MENU INSERSÃO
				</ div >
				< div  class = " card-body " >
					< A  href = " lista.php " class =" btn btn-primária " > Listar Alunos </ a >
					< A  href = " buscar.php " class =" btn btn-primária " > Exibir hum Aluno </ a >

					< form  class = " mt-4 " method = " POST " action = "" >
			
							< input  type = " text " name = " nome " placeholder = " Entre com o nome ... " >
						
							< input  type = " text " name = " mat " placeholder = " Entre com a matricula ... " >
						
							< input  type = " date " name = " datanasc " placeholder = " Entre com a data de nascimento ... " >
						
							< input  type = " submit " name = " submit " value = " Adicionar aluno " >
						
					</ form >
					
				</ div >
				< div  class = " card-footer text-muted " >
					Trabalho CRUD
				</ div >
			</ div >
			
		</ div >	
		
		
		
		< Roteiro  src = " https://code.jquery.com/jquery-3.2.1.slim.min.js " integridade =" SHA384-KJ3o2DKtIkvYIK3UENzmM7KCkRr / RE9 / Qpg6aAZGJwFDMVNA / GpGFF93hXpG5KkN " crossorigin =" anonymous " > </ script de >
		< Roteiro  src =" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integridade =" SHA384-ApNbgh9B + Y1QKtv3Rn7W3mgPxhU9K / ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin =" anonymous " > </ script >
		< Roteiro  src = " https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integridade =" SHA384-JZR6Spejh4U02d8jOt6vLEHfe / JQGiRRSQQxSfFWpi1MquVdAyjUar5 + 76PVCmYl " crossorigin =" anonymous " > </ script de >

	</ body >
</ html >
