<! DOCTYPE html >
< html >
	< cabeça >
		< title > PHP bruta </ title >

        < Vínculo  rel = " stylesheet " href =" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css " integridade =" SHA384-Gn5384xqQ1aoWXA + 058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW / dAiS6JXm " crossorigin =" anonymous " >
        < script  src = " https://kit.fontawesome.com/e7a1dc7285.js " crossorigin = " anonymous " > </ script >
	</ head >
	< corpo >
		<? php  include  "connection.php" ; ?>
        <? php 
        if ( isset ( $ _POST [ 'enviar' ])) {
			$ cpf = $ _POST [ 'cpf' ];
        }
        ?>
        < div  class = " container " >
            < A  href = " menu_cli.php " > < i  class =" fas fa-home " estilo =" margin-top: 2% " > </ i > </ a >
			< div  class = " card text-center mt-3 " >
				< div  class = " card-header " >
					BUSCAR CLIENTE
				</ div >
				< div  class = " card-body " >
                    
                    < A  href = " insere.php " class =" btn btn-primária " > Inserir Cliente </ a >
					< A  href = " lista.php " class =" btn btn-primária " > Listar Clientes </ a >

					< form  class = " mt-2 " method = " POST " action = " buscar.php " >
		
                        < input  type = " text " name = " cpf " placeholder = " Entre com o cpf ... " >
                            
                        < input  type = " submit " name = " submit " value = " Buscar cliente " >
                    
                    </ form >
					
				</ div >
				< div  class = " card-footer text-muted " >
                    AV1 3DAW - CRUD
				</ div >
		</ div >
        
        <? php
			if ( $ _SERVER [ "REQUEST_METHOD" ] == "POST" ) {	
				$ cpf = $ _POST [ "cpf" ];
                $ sql = "SELECT nome, cpf, endereco, cep, cidade, estado FROM clientes onde cpf = '$ cpf'" ;
				$ resultado = $ con -> consulta ( $ sql );

		?>
        
       
        < table  class = " table table-sm mt-5 " >
            < thead >
                < tr >
                    < th > Nome </ th >
                    < th > CPF </ th >
                    < th > Endereço </ th >
                    < th > CEP </ th >
                    < th > Cidade </ th >
                    < th > Estado </ th >
                </ tr >
            </ thead >
            < tbody >
                <? php
                if ( $ resultado -> num_rows > 0 ) {
                    while ( $ linha = mysqli_fetch_assoc ( $ resultado )) {
                        ?>
                        < tr >
                            < td > <? php  echo  $ linha [ 'nome' ]; ?> </ td >
                            < td > <? php  echo  $ linha [ 'cpf' ]; ?> </ td >
                            < td > <? php  echo  $ linha [ 'endereco' ]; ?> </ td >
                            < td > <? php  echo  $ linha [ 'cep' ]; ?> </ td >
                            < td > <? php  echo  $ linha [ 'cidade' ]; ?> </ td >
                            < td > <? php  echo  $ linha [ 'estado' ]; ?> </ td >
                        </ tr >
                        <? php
                    }
                } else {
                    echo  "<script> alert ('Cliente não encontrado!') </script>" ;
                } ?>
            </ tbody >
        </ mesa >
        <? php
			}
		?>

        < Roteiro  src = " https://code.jquery.com/jquery-3.2.1.slim.min.js " integridade =" SHA384-KJ3o2DKtIkvYIK3UENzmM7KCkRr / RE9 / Qpg6aAZGJwFDMVNA / GpGFF93hXpG5KkN " crossorigin =" anonymous " > </ script de >
		< Roteiro  src =" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integridade =" SHA384-ApNbgh9B + Y1QKtv3Rn7W3mgPxhU9K / ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin =" anonymous " > </ script >
		< Roteiro  src = " https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integridade =" SHA384-JZR6Spejh4U02d8jOt6vLEHfe / JQGiRRSQQxSfFWpi1MquVdAyjUar5 + 76PVCmYl " crossorigin =" anonymous " > </ script de >
    </ body >
</ html >
