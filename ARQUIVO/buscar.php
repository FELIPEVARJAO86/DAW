<! DOCTYPE html >
< html >
	< cabeça >
        < Vínculo  rel = " stylesheet " href =" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css " integridade =" SHA384-Gn5384xqQ1aoWXA + 058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW / dAiS6JXm " crossorigin =" anonymous " >
	</ head >
	< corpo >
        < div  class = " container " >
			
			< div  class = " card text-center mt-5 " >				
				< div  class = " card-body " >
					< form  class = " mt-2 " method = " POST " action = " buscar.php " >		
                        < input  type = " text " name = " matrícula " placeholder = " Matrícula " >                            
						< input  type = " text " name = " nome " placeholder = " Nome " >                            
						< input  type = " text " name = " escola " placeholder = " Escola " >                            
						< input  type = " text " name = " orientador " placeholder = " Orientador " >                       
                        < input  type = " submit " name = " submit " value = " Buscar " >                    
                    </ form >					
				</ div >
				< div  class = " card-footer text-muted " >
					< A  href = " index.php " class =" btn btn-primária " > Início </ a >
				</ div >
		</ div >        
		
		
<? php
$ con = mysqli_connect ( "localhost" , "root" , "" , "dawalunos" );

if (( $ _POST ) && ( $ _POST [ 'enviar' ]))
{
    $ matrícula = $ _POST [ "matrícula" ];
    $ nome = $ _POST [ "nome" ];
    $ escola = $ _POST [ "escola" ];
    $ orientador = $ _POST [ "orientador" ];
    $ sql = "SELECT
				MATRICULA,
				NOME,
				ORIENTADOR,
				ESCOLA
			A PARTIR DE
				alunos
			ONDE
			(MATRICULA = '$ matrícula'
				OR NOME = '$ nome'
				OR ESCOLA = '$ escola'
				OR ORIENTADOR = '$ orientador'
			) " ;

    $ resultado = $ con -> consulta ( $ sql );
?>
        < table  class = " table table-sm mt-5 " >
            < thead >
                < tr >
                    < th > Nome </ th >
                    < th > Matrícula </ th >
                    < th > Orientador </ th >
					< th > Escola </ th >
                    < th > Atualização </ th >
                    < th > Excluir </ th >
                </ tr >
            </ thead >
            < tbody >
				<? php
    if ( $ resultado -> num_rows > 0 )
    {
        while ( $ linha = mysqli_fetch_assoc ( $ resultado ))
        {
?>
					< tr >
						< td > <? php  echo  $ linha [ 'NOME' ]; ?> </ td >
                        < td > <? php  echo  $ linha [ 'MATRICULA' ]; ?> </ td >
						< td > <? php  echo  $ linha [ 'ORIENTADOR' ]; ?> </ td >
						< td > <? php  echo  $ linha [ 'ESCOLA' ]; ?> </ td >
						< Td > < a  class = " update " href =" update.php update_MATRICULA =? <? Php  echo  $ Linha [ 'MATRICULA' ]; ?> " > Atualização </ a > </ td >
						< Td > < a  class = " exclusão " href =" delete.php delete_MATRICULA =? <? Php  echo  $ Linha [ 'MATRICULA' ]; ?> " > Excluir </ a > </ td >
					</ tr >
				<? php
        }
    }
    senão
    {
        echo  "<script> alert ('Nome não encontrado!') </script>" ;
    }
?>
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
