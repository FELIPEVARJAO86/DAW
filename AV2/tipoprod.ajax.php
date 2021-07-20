<? php

	$ servername = "localhost" ;
	$ username = "root" ;
	$ senha = "" ;
	$ dbname = "loja" ;

	// Criar conexão
	$ conn = new mysqli ( $ servername , $ username , $ password , $ dbname );

	// Verifique a conexão
	if ( $ conn -> connect_error ) {
		die ( "Conexão falhou:" . $ conn -> connect_error );
	}	

	$ cod_categoria = $ _GET [ 'cod_categoria' ];

	$ sql = "SELECT cod_tipoprod, nome FROM tipo_prod WHERE categoria_cod_categoria = '$ cod_categoria' ORDER BY nome" ;

	$ res = mysqli_query ( $ conn , $ sql );

	$ lista = array ();

	while ( $ row = mysqli_fetch_assoc ( $ res )) {
		$ tipo_prod = array (
			'cod_tipoprod'   => $ row [ 'cod_tipoprod' ],
			'nome'       => $ row [ 'nome' ],
		);
		array_push ( $ lista , $ tipo_prod );
	}

	echo ( json_encode ( $ lista ));
?>
