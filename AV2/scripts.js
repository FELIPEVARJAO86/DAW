
// ************************************************* *****************************
// Metodo que inclui / altera acoes de elementos da pagina depois que a pagina foi carregada
//
janela . onload  =  function ( )  {
	// script para mostrar um preview da imagem do upload
	documento . getElementById ( "foto" ) . onchange  =  function  ( )  {
		var  reader  =  new  FileReader ( ) ;

		leitor . onload  =  função  ( e )  {
			documento . getElementById ( "imagem" ) . src  =  e . alvo . resultado ;  // obter informações do campo foto
		} ;
		// carrega a imagem na tela
		leitor . readAsDataURL ( este . arquivos [ 0 ] ) ;
	} ;

	// prepara botao Limpar na acao de Editar produto
	documento . getElementById ( "btnLimpar" ) . onclick  =  function  ( )  {
		restauraForm ( ) ;
	} ;
}

function  restauraForm ( )  {
	// limpa imagem de visualização de quadro
	documento . getElementById ( 'imagem' ) . src  		=  '' ;
	// limpa os campos id e nomeFoto usados ​​no update
	documento . getElementById ( 'id' ) . valor   		=  "-1" ;
	documento . getElementById ( 'nomeFoto' ) . valor   	=  "" ;
	// retorna o rótulo original dos botoes
	documento . getElementById ( 'btnLimpar' ) . valor  	=  "Limpar" ;
	documento . getElementById ( 'btnSalvar' ) . valor  	=  "Salvar" ;
}

// ************************************************* *****************************
// Metodo que altera a cor do input quando recebe o foco
//
function  inputOn (  obj  )  {
	obj . estilo . backgroundColor  =  "#ffffff" ;
}

// ************************************************* *****************************
// Método que altera a cor do input quando perde o foco
//
function  inputOff (  obj  )  {
	obj . estilo . backgroundColor  =  "# 7e83a2" ;
}

// ************************************************* *****************************
// Metodo que carrega lista de produtos cadastrados
//
function  carregarLista ( )  {
	var  xhttp ;
	xhttp  =  new  XMLHttpRequest ( ) ;
	xhttp . onreadystatechange  =  function ( )  {
    	if  ( this . readyState  ==  4  &&  this . status  ==  200 )  {
      		documento . getElementById ( 'lista' ) . innerHTML  =  this . responseText ;
    	}  else  {
    		documento . getElementById ( 'lista' ) . innerHTML  =  "Erro na execucao do Ajax" ;
    	}
  	} ;
  	xhttp . abrir ( "POST" ,  "crud.php" ,  verdadeiro ) ;
  	xhttp . setRequestHeader ( "Content-type" ,  "application / x-www-form-urlencoded" ) ;
  	xhttp . enviar ( "ação = lista" ) ;
}

// ************************************************* *****************************
// Metodo que carrega lista de produtos cadastrados
//
function  carregarProduto (  obj  )  {
	var  xhttp ;
	xhttp  =  new  XMLHttpRequest ( ) ;
	xhttp . onreadystatechange  =  function ( )  {
    	if  ( this . readyState  ==  4  &&  this . status  ==  200 )  {
      		var  resultado  =  JSON . parse (  this . responseText  ) ;
      		// formulário preenche com dados do produto para alteração
      		documento . getElementById ( 'id' ) . valor  		=  resultado [ 0 ] . id ;
			documento . getElementById ( 'cod_barra' ) . valor   =  resultado [ 0 ] . cod_barra ;
      		documento . getElementById ( 'nome' ) . valor  		=  resultado [ 0 ] . nome ;
      		documento . getElementById ( 'fabricante' ) . valor  =  resultado [ 0 ] . fabricante ;
      		documento . getElementById ( 'categoria' ) . valor  	=  resultado [ 0 ] . categoria ;
			documento . getElementById ( 'tipo_prod' ) . valor  	=  resultado [ 0 ] . tipo_prod ;
			documento . getElementById ( 'preco_venda' ) . valor  =  resultado [ 0 ] . preco_venda ;
			documento . getElementById ( 'qtd_estoque' ) . valor  =  resultado [ 0 ] . qtd_estoque ;
			documento . getElementById ( 'peso_gramas' ) . valor  =  resultado [ 0 ] . peso_gramas ;
			documento . getElementById ( 'descricao' ) . valor  =  resultado [ 0 ] . descricao ;
			documento . getElementById ( 'data_inclusao' ) . valor  =  resultado [ 0 ] . data_inclusao ;
      		documento . getElementById ( 'imagem' ) . src  		=  "/ AV2 / imagens /" + resultado [ 0 ] . foto ;
      		documento . getElementById ( 'nomeFoto' ) . valor  	=  resultado [ 0 ] . foto ;
			documento . getElementById ( 'ativo' ) . valor  =  resultado [ 0 ] . ativo ;
      		// deixa o foco no campo nome para educação
      		documento . getElementById ( 'nome' ) . foco ( ) ;
      		// modifica ação do botao limpar para voltar
      		documento . getElementById ( 'btnLimpar' ) . valor  	 =  "Voltar" ;
      		// modifica ação do botao salvar para atualizar
      		documento . getElementById ( 'btnSalvar' ) . valor  	 =  "Atualizar" ;
    	}  else  {
    		documento . getElementById ( 'msg-php' ) . innerHTML  =  "Erro na execucao do Ajax" ;
    	}
  	} ;
  	xhttp . abrir ( "POST" ,  "crud.php" ,  verdadeiro ) ;
  	xhttp . setRequestHeader ( "Content-type" ,  "application / x-www-form-urlencoded" ) ;
  	xhttp . enviar ( "ação = buscar & id =" + obj ) ;
}

function  isValidCod ( cod_barra ) {
    var  sum ;
    var  rest ;
    soma  =  0 ;
    if  ( cod_barra  ==  "00000000000" )  retorna  falso ;

    para  ( i = 1 ;  i <= 9 ;  i ++ )  soma  =  soma  +  parseInt ( cod_barra . substring ( i - 1 ,  i ) )  *  ( 11  -  i ) ;
    resto  =  ( soma  *  10 )  %  11 ;

    if  ( ( repouso  ==  10 )  ||  ( repouso  ==  11 ) )   repouso  =  0 ;
    if  ( rest  ! =  parseInt ( cod_barra . substring ( 9 ,  10 ) )  )  retorna  falso ;

    soma  =  0 ;
    para  ( i  =  1 ;  i  <=  10 ;  i ++ )  soma  =  soma  +  parseInt ( cod_barra . substring ( i - 1 ,  i ) )  *  ( 12  -  i ) ;
    resto  =  ( soma  *  10 )  %  11 ;

    if  ( ( repouso  ==  10 )  ||  ( repouso  ==  11 ) )   repouso  =  0 ;
    if  ( rest  ! =  parseInt ( cod_barra . substring ( 10 ,  11 )  )  )  retorna  falso ;
    return  true ;
}

// ************************************************* *****************************
// Metodo que salva (ou atualiza) do cadastro do produto
//
function  salvarForm ( )  {
	var  xhttp ;
	xhttp  =  new  XMLHttpRequest ( ) ;
	xhttp . onreadystatechange  =  function ( )  {
    	if  ( this . readyState  ==  4  &&  this . status  ==  200 )  {
    		// limpa o formulario
    		restauraForm ( ) ;
    		documento . getElementById ( 'frmCrud' ) . reset ( ) ;
    		// exibe mensagem de sucesso na tela por alguns segundos
      		documento . getElementById ( 'msg-php' ) . innerHTML  =  this . responseText ;
      		documento . getElementById ( 'msg-php' ) . classList . remover ( "sem exibição" ) ;
      		documento . getElementById ( 'msg-php' ) . classList . add ( "msg-php" ) ;
      		hideMsg ( ) ;
  			// atualiza lista de produtos
  			carregarLista ( ) ;
    	}  else  {
    		documento . getElementById ( 'msg-php' ) . innerHTML  =  "Erro na execucao do Ajax" ;
    	}
  	} ;
  	// recupera valores do formulário para enviar via ajax
  	var  formData  =  novo  FormData ( ) ;
  	formData . append ( "id" ,  document . getElementById ( "id" ) . value ) ;
	formData . append ( "cod_barra" ,  document . getElementById ( "cod_barra" ) . value ) ;
  	formData . append ( "nome" ,  document . getElementById ( "nome" ) . value ) ;
  	formData . append ( "fabricante" ,  document . getElementById ( "fabricante" ) . value ) ;
  	formData . append ( "categoria" ,  document . getElementById ( "categoria" ) . value ) ;
	formData . append ( "tipo_prod" ,  document . getElementById ( "tipo_prod" ) . value ) ;
	formData . append ( "preco_venda" ,  document . getElementById ( "preco_venda" ) . value ) ;
	formData . append ( "qtd_estoque" ,  document . getElementById ( "qtd_estoque" ) . value ) ;
	formData . append ( "peso_gramas" ,  document . getElementById ( "peso_gramas" ) . value ) ;
	formData . append ( "descricao" ,  document . getElementById ( "descricao" ) . value ) ;
	formData . append ( "data_inclusao" ,  document . getElementById ( "data_inclusao" ) . value ) ;
  	formData . append ( "foto" ,  document . getElementById ( "foto" ) . files [ 0 ] ) ;
  	formData . append ( "nomeFoto" ,  document . getElementById ( "nomeFoto" ) . value ) ;
	formData . append ( "ativo" ,  documento . getElementById ( "ativo" ) . valor ) ;
  	// submete para server-side
  	//xhttp.setRequestHeader("Content-type "," application / x-www-form-urlencoded ");
  	xhttp . open ( "POST" ,  "crud.php? action = salvar" ,  true ) ;
  	xhttp . enviar (  formData  ) ;
}

// ************************************************* *****************************
// Metodo que oculta como mensagens de alerta na tela
//
function  hideMsg ( )  {
	setTimeout ( function ( )  {
      	documento . getElementById ( 'msg-php' ) . classList . add ( "sem exibição" ) ; 
    } ,  5000 ) ;
}
