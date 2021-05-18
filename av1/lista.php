<! DOCTYPE html >
< html >
	< cabeça >
		< title > PHP bruta </ title >
        
		< Vínculo  rel = " stylesheet " href =" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css " integridade =" SHA384-Gn5384xqQ1aoWXA + 058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW / dAiS6JXm " crossorigin =" anonymous " >
        < script  src = " https://kit.fontawesome.com/e7a1dc7285.js " crossorigin = " anonymous " > </ script >
    </ head >
	< corpo >
		<? php  include  "connection.php" ; ?>
        
        < div  class = " container " >
            < A  href = " menu_cli.php " > < i  class =" fas fa-home " estilo =" margin-top: 2% " > </ i > </ a >
			< div  class = " card text-center mt-3 " >
				< div  class = " card-header " >
					LISTA CLIENTES
				</ div >
				< div  class = " card-body " >
					< A  href = " insere.php " class =" btn btn-primária " > Inserir Cliente </ a >
					< A  href = " buscar.php " class =" btn btn-primária " > Exibir hum Cliente </ a >

                    < table  class = " table table-sm mt-5 " >
                        < thead >
                            < tr >
                                < th > Nome </ th >
                                < th > CPF </ th >
                                < th > Endereço </ th >
                                < th > CEP </ th >
                                < th > Cidade </ th >
                                < th > Estado </ th >
                                < th > Atualização </ th >
                                < th > Excluir </ th >
                            </ tr >
                        </ thead >
                        < tbody >
                            <? php
                                $ Show = mysqli_query ( $ con , "SELECT * FROM clientes" );
                                while ( $ r = mysqli_fetch_array ( $ Show )): ?>
                                    < tr >
                                        < td > <? php  echo  $ r [ 'nome' ]; ?> </ td >
                                        < td > <? php  echo  $ r [ 'cpf' ]; ?> </ td >
                                        < td > <? php  echo  $ r [ 'endereco' ]; ?> </ td >
                                        < td > <? php  echo  $ r [ 'cep' ]; ?> </ td >
                                        < td > <? php  echo  $ r [ 'cidade' ]; ?> </ td >
                                        < td > <? php  echo  $ r [ 'estado' ]; ?> </ td >
                                        < Td > < a  href = " update.php update_id =? <? Php  echo  $ r [ 'id' ]; ?> " > Atualização </ a > </ td >
                                        < Td > < a  href = " delete.php delete_id =? <? Php  echo  $ r [ 'id' ]; ?> " > Excluir </ a > </ td >
                                    </ tr >
                            <? php  endwhile ; ?>
                        </ tbody >
                    </ mesa >

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
