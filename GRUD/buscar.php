<! DOCTYPE html >
< html >
	< cabeça >
		< title > PHP bruta </ title >

        < Vínculo  rel = " stylesheet " href =" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css " integridade =" SHA384-Gn5384xqQ1aoWXA + 058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW / dAiS6JXm " crossorigin =" anonymous " >

	</ head >
	< corpo >
		<? php  include  "connection.php" ; ?>
        <? php 
        if ( isset ( $ _POST [ 'enviar' ])) {
			$ mat = $ _POST [ 'mat' ];
        }
        ?>
        < div  class = " container " >
			
			< div  class = " card text-center mt-5 " >
				< div  class = " card-header " >
					MENU BUSCAR
				</ div >
				< div  class = " card-body " >
                    < A  href = " insere.php " class =" btn btn-primária " > Inserir Aluno </ a >
					< A  href = " lista.php " class =" btn btn-primária " > Listar Alunos </ a >

					< form  class = " mt-2 " method = " POST " action = " buscar.php " >
		
                        < input  type = " text " name = " mat " placeholder = " Entre com a matricula ... " >
                            
                        < input  type = " submit " name = " submit " value = " Buscar aluno " >
                    
                    </ form >
					
				</ div >
				< div  class = " card-footer text-muted " >
					Trabalho CRUD
				</ div >
		</ div >
        
        <? php
			if ( $ _SERVER [ "REQUEST_METHOD" ] == "POST" ) {	
				$ mat = $ _POST [ "mat" ];
                $ sql = "SELECT mat, nome, datanasc FROM Alunos onde mat = '$ mat'" ;
				$ resultado = $ con -> consulta ( $ sql );

		?>
        
       
        < table  class = " table table-sm mt-5 " >
            < thead >
                < tr >
                    < th > Nome </ th >
                    < th > Matrícula </ th >
                    < th > Data de Nascimento </ th >
                    < th > Atualização </ th >
                    < th > Excluir </ th >
                </ tr >
            </ thead >
            < tbody >
                <? php
                if ( $ resultado -> num_rows > 0 ) {
                    while ( $ linha = mysqli_fetch_assoc ( $ resultado )) {
                        ?>
                        < tr >
                            < td > <? php  echo  $ linha [ 'nome' ]; ?> </ td >
                            < td > <? php  echo  $ linha [ 'mat' ]; ?> </ td >
                            < td > <? php  echo  $ linha [ 'datanasc' ]; ?> </ td >
                            < Td > < a  class = " update " href =" update.php update_id =? <? Php  echo  $ Linha [ 'mat' ]; ?> " > Atualização </ a > </ td >
                            < Td > < a  class = " exclusão " href =" delete.php delete_id =? <? Php  echo  $ Linha [ 'mat' ]; ?> " > Excluir </ a > </ td >
                        </ tr >
                        <? php
                    }
                } else {
                    echo  "<script> alert ('Aluno não encontrado!') </script>" ;
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
