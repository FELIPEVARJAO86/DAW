<! DOCTYPE html >
< html >
	< cabeça >
		< title > PHP bruta </ title >
		< Vínculo  rel = " stylesheet " href =" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css " integridade =" SHA384-Gn5384xqQ1aoWXA + 058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW / dAiS6JXm " crossorigin =" anonymous " >
        < script  src = " https://kit.fontawesome.com/e7a1dc7285.js " crossorigin = " anonymous " > </ script >
	</ head >
	< corpo >

		
		<? php
			inclua  "connection.php" ;
			
			if ( isset ( $ _POST [ 'enviar' ])) {
				$ nome = $ _POST [ 'nome' ];
				$ cpf = $ _POST [ 'cpf' ];
				$ endereco = $ _POST [ 'endereco' ];
				$ cep = $ _POST [ 'cep' ];
				$ cidade = $ _POST [ 'cidade' ];
				$ estado = $ _POST [ 'estado' ];
				$ nomeValido = 0 ;
				$ cpfValido = 0 ;
				$ enderecoValido = 0 ;
				$ cpfValido = 0 ;
				$ cidadeValida = 0 ;
				$ estadoValido = 0 ;
			
				if ( $ nome ! = "" ) {
					$ nomeValido = 1 ;
				}
				if ( $ cpf ! = "" ) {
					$ cpfValido = 1 ;
				}
				if ( $ endereco ! = "" ) {
					$ enderecoValido = 1 ;
				}
				if ( $ cep ! = "" ) {
					$ cepValido = 1 ;
				}
				if ( $ cidade ! = "" ) {
					$ cidadeValida = 1 ;
				}
				if ( $ estado ! = "" ) {
					$ estadoValido = 1 ;
				}

				if ( $ nomeValido == 1 && $ cpfValido == 1 && $ enderecoValido == 1 && $ cepValido == 1 && $ cidadeValida == 1 && $ estadoValido == 1 ) {
					$ Query = mysqli_query ( $ con , "INSERT INTO clientes (nome, cpf, endereco, cep, cidade, estado) VALUES ('$ nome', '$ cpf', '$ endereco', '$ cep', '$ cidade ',' $ estado ') " );
					if ( $ Query ) {
						echo  "<script> alert ('Registro do cliente foi inserido com sucesso!') </script>" ;
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
		< A  href = " menu_cli.php " > < i  class =" fas fa-home " estilo =" margin-top: 2% " > </ i > </ a >
			< div  class = " card text-center mt-3 " >
				< div  class = " card-header " >
					INSERÇÃO DE CLIENTE
				</ div >
				< div  class = " card-body " >					
					< A  href = " lista.php " class =" btn btn-primária " > Listar Clientes </ a >
					< A  href = " buscar.php " class =" btn btn-primária " > Exibir hum Cliente </ a >

					< form  class = " mt-4 " method = " POST " action = "" >
			
							< input  type = " text " name = " nome " placeholder = " Entre com o nome ... " >
							
							< input  type = " text " name = " cpf " placeholder = " Entre com o cpf ... " >
											
							< input  type = " text " name = " endereco " placeholder = " Entre com o endereco ... " >
							
							< input  type = " text " name = " cep " placeholder = " Entre com o cep ... " >
							< Br > < br >
							< input  type = " text " name = " cidade " placeholder = " Entre com a cidade ... " >
							
							< input  type = " text " name = " estado " placeholder = " Entre com o estado ... " >
							
							< input  type = " submit " name = " submit " value = " Adicionar cliente " >
						
					</ form >
					
				</ div >
				< div  class = " card-footer text-muted " >
					AV1 3DAW - CRUD
				</ div >
			</ div >
			
		</ div >	
		
		
		
		< Roteiro  src = " https://code.jquery.com/jquery-3.2.1.slim.min.js " integridade =" SHA384-KJ3o2DKtIkvYIK3UENzmM7KCkRr / RE9 / Qpg6aAZGJwFDMVNA / GpGFF93hXpG5KkN " crossorigin =" anonymous " > </ script de >
		< Roteiro  src =" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integridade =" SHA384-ApNbgh9B + Y1QKtv3Rn7W3mgPxhU9K / ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin =" anonymous " > </ script >
		< Roteiro  src = " https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integridade =" SHA384-JZR6Spejh4U02d8jOt6vLEHfe / JQGiRRSQQxSfFWpi1MquVdAyjUar5 + 76PVCmYl " crossorigin =" anonymous " > </ script de >

	</ body >
</ html >
