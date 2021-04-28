<? php 
	incluem  'connection.php' ;
	if ( isset ( $ _GET [ 'delete_id' ])) {
		$ id = $ _GET [ 'delete_id' ];
		$ query = mysqli_query ( $ con , "DELETE FROM Alunos WHERE id = '$ id'" );
		if ( $ query ) {
			cabeçalho ( "localização: index.php" );
		} else {
			echo  "<script> alert ('Desculpe, excluir a consulta não funciona!') </script>" ;
		}
	}
 ?>
