? php
	$ con = mysqli_connect ( "localhost" , "root" , "" , "dawalunos" );
	if ( isset ( $ _POST [ 'update' ])) {
		$ NOME = $ _POST [ 'NOME' ];
		$ MATRICULA = $ _POST [ 'MATRICULA' ];
		$ ESCOLA = $ _POST [ 'ESCOLA' ];
		$ ORIENTADOR = $ _POST [ 'ORIENTADOR' ];
		$ query = mysqli_query ( $ con , "UPDATE alunos SET NOME = '$ NOME', MATRICULA = '$ MATRICULA', ESCOLA = '$ ESCOLA', ORIENTADOR = '$ ORIENTADOR' WHERE MATRICULA = '$ MATRICULA'" );
		if ( $ query ) {
			cabeçalho ( "local: lista.php" );
		}
		else {
			echo  "<script> alert ('Desculpe, atualizar a consulta não funciona') </script>" ;
		}
	}

	$ MATRICULA = $ _GET [ 'update_MATRICULA' ];

	$ query = mysqli_query ( $ con , "SELECT * FROM alunos WHERE MATRICULA = '$ MATRICULA'" );
	$ r = mysqli_fetch_array ( $ query );
	$ NOME = $ r [ 'NOME' ];
	$ MATRICULA = $ r [ 'MATRICULA' ];
	$ ESCOLA = $ r [ 'ESCOLA' ];
	$ ORIENTADOR = $ r [ 'ORIENTADOR' ];

?>
<! DOCTYPE html >
< html >
    < cabeça >
        < Vínculo  rel = " stylesheet " href =" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css " integridade =" SHA384-Gn5384xqQ1aoWXA + 058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW / dAiS6JXm " crossorigin =" anonymous " >
    </ head >
    < corpo >

        < div  class = " container " >                
            < div  class = " card text-center mt-5 " >                
                < div  class = " card-body " >                    
                    < form  class = " mt-2 " method = " POST " action = " update.php " >
                        < input  type = " text " name = " NOME " placeholder = " Nome " value = " <? php  echo  $ NOME ; ?> " >
                        < input  type = " text " name = " ESCOLA " placeholder = " Escola " value = " <? php  echo  $ ESCOLA ; ?> " >						
						< input  type = " text " name = " ORIENTADOR " placeholder = " Orientador " value = " <? php  echo  $ ORIENTADOR ; ?> " >                        
                        < input  type = " hidden " name = " MATRICULA " value = " <? php  echo  $ MATRICULA ; ?> " >
                        < input  type = " submit " name = " update " value = " Atualizar " >                        
                    </ form >                    
                </ div >
                < div  class = " card-footer text-muted " >                
                    < A  href = " index.php " class =" btn btn-primária " > Início </ a >
                </ div >
            </ div >
        </ div >	
  </ body >
</ html >
