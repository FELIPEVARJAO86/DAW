<? php 
	incluem  'connection.php' ;
	if ( isset ( $ _GET [ 'delete_id' ])) {
		$ id = $ _GET [ 'delete_id' ];
		$ query = mysqli_query ( $ con , "DELETE FROM clientes WHERE id = '$ id'" );
		if ( $ query ) {
			cabeçalho ( "localização: menu_cli.php" );
		} else {
			echo  "<script> alert ('Desculpe, excluir a consulta não funciona!') </script>" ;
		}
	}
 ?>
