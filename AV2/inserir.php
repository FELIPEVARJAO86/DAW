<? php
    // dados de conexão com banco de dados do sistema
    $ host    = "localhost" ;
    $ user    = "root" ;
    $ pass    = "" ;
    $ db      = "loja" ;

    global  $ host , $ user , $ pass , $ db ;
    $ mysqli = new mysqli ( $ host , $ user , $ pass , $ db );
    if ( $ mysqli -> connect_errno ) { printf ( "Conexão falhou:% s \ n" , $ mysqli -> connect_error ); sair (); }  
?>
<! DOCTYPE html >
< html  lang = " pt-br " >
< cabeça >
    < título > </ título >
    < link  rel = " stylesheet " type = " text / css " href = " styles.css " async >
    < link  rel = " stylesheet " type = " text / css " href = " css / styles.css " async >
    < script  src = " scripts.js " > </ script >
</ head >
< body  style = " background: # 212529! important; " >
    < nav  class = " navbar navbar-expand-lg navbar-light bg-light " >
        < div  class = " container px-4 px-lg-5 " >
            < A  class = " navbar-brand " href =" index.php " > Ximbolé Bahiano </ a >
            < button  class = " navbar-toggler " type = " button " data-bs-toggle = " collapse " data-bs-target = " #navbarSupportedContent " aria-controls = " navbarSupportedContent " aria- extended = " false " aria-label = " Alternar navegação " > < span  class = " navbar-toggler-icon " > </ span > </ botão >
            < div  class = " collapse navbar-collapse " id = " navbarSupportedContent " >
                < ul  class = " navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 " >
                    < Li  class = " nav-ponto " > < a  class =" nav-link ativo " aria-current =" página " href =" index.php " > Início </ a > </ li >
                    < Li  class = " nav-ponto " > < a  class =" nav-link " href =" listaprod.php " > Lista dos Produtos </ a > </ li >
                    < Li  class = " nav-ponto " > < a  class =" -link nav " href =" buscar.php " > Buscar PRODUTO POR código de barra </ a > </ li >
                    < Li  class = " nav-ponto " > < a  class =" nav-link " href =" inserir.php " > Inserir PRODUTO </ a > </ li >
                </ ul >
            </ div >
        </ div >
    </ nav >
    < div  id = " conteudo " style = " margin-top: 20px; " >
    < div  id = " msg-php " class = " no-display " > </ div >

    < form  style = " font-size: 14px; " method = " POST " enctype = " multipart / form-data " onSubmit = " salvarForm (); return false; " onsubmit = " isValidCod (); " id = " frmCrud " >
        < fieldset >
            < legend  style = " font-size: 16px; " > Código de Barra: </ legend >
            < input  id = " cod_barra " type = " text " class = " input-text " placeholder obrigatório  = " Digite o código de barra do produto ... " name = " cod_barra " onFocus = " inputOn (this) " onBlur = " inputOff (this) "/>
            < legend  style = " font-size: 16px; " > Nome: </ legend >
            < input  id = " nome " type = " text " class = " input-text " placeholder obrigatório  = " Digite seu nome aqui ... " name = " nome " onFocus = " inputOn (this) " onBlur = " inputOff (this ) "/>
            < legend  style = " font-size: 16px; " > Fabricante: </ legend >
            < input  id = " fabricante " type = " text " class = " input-text " required  placeholder = " Digite o fabricante do produto aqui ... " name = " fabricante " onFocus = " inputOn (this) " onBlur = " inputOff (este) "/>
            < legend  style = " font-size: 16px; " > Categoria: </ legend >
            < select  name = " categoria " id = " categoria " onFocus = " inputOn (this) " onBlur = " inputOff (this) " >
                < opção  valor = "" > - Escolha uma categoria - </ opção >
                    <? php
                        $ res = mysqli_query ( $ mysqli , "SELECT cod_categoria, nome FROM categoria ORDER BY nome" );
                        while ( $ row = mysqli_fetch_assoc ( $ res )) {
                            echo  '<option value = "' . $ row [ 'cod_categoria' ]. '">' . $ row [ 'nome' ]. '</option>' ;
                        }
                    ?>
            </ select >
            < legend  style = " font-size: 16px; " > Tipo de Produto: </ legend >
            < select  name = " tipo_prod " id = " tipo_prod " onFocus = " inputOn (this) " onBlur = " inputOff (this) " >
                < opção  valor = "" > - Escolha o tipo de produto - </ opção >
                <? php
                        $ res = mysqli_query ( $ mysqli , "SELECT cod_tipoprod, nome FROM tipo_prod ORDER BY nome" );
                        while ( $ row = mysqli_fetch_assoc ( $ res )) {
                            echo  '<option value = "' . $ row [ 'cod_tipoprod' ]. '">' . $ row [ 'nome' ]. '</option>' ;
                        }
                    ?>
            </ select >
            < legend  style = " font-size: 16px; " > Preço: </ legend >
            < input  id = " preco_venda " type = " int " class = " input-text " obrigatório  placeholder = " Digite preço do produto aqui ... " name = " preco_venda " onFocus = " inputOn (this) " onBlur = " inputOff ( este) "/>
        </ fieldset >
        < fieldset >    
            < legend  style = " font-size: 16px; " > Quantidade em Estoque: </ legend >
            < input  id = " qtd_estoque " type = " int " class = " input-text " placeholder obrigatório  = " Digite quantidade de produto em estoque aqui ... " name = " qtd_estoque " onFocus = " inputOn (this) " onBlur = " inputOff (this) "/>
            < legend  style = " font-size: 16px; " > Peso em gramas: </ legend >
            < input  id = " peso_gramas " type = " int " class = " input-text " placeholder obrigatório  = " Digite o peso em gramas do produto aqui ... " name = " peso_gramas " onFocus = " inputOn (this) " onBlur = " inputOff (this) " />
            < legend  style = " font-size: 16px; " > Descrição: </ legend >
            < input  id = " descricao " type = " text " class = " input-text " obrigatório  placeholder = " Digite a descrição do produto aqui ... " name = " descricao " onFocus = " inputOn (this) " onBlur = " inputOff (este) "/>
            < legend  style = " font-size: 16px; " > Dados da Inclusão: </ legend >
            < input  id = " data_inclusao " type = " date " class = " input-text " placeholder obrigatório  = " Digite a data de hoje aqui ... " name = " data_inclusao " onFocus = " inputOn (this) " onBlur = " inputOff (este) "/>
            < legend  style = " font-size: 16px; " > Ativo: </ legend >
            < select  style = " margin-bottom: 20px " name = " ativo " id = " ativo " onFocus = " inputOn (this) " onBlur = " inputOff (this) " >
                < option  value = "" > - O produto está ativo? - </ opção >
                < option  value = " s " > Sim </ option >
                < option  value = " n " > Não </ option >
        </ fieldset >
        < fieldset >
            < legenda > Foto: </ legend >
            < input  type = " file " id = " foto " name = " foto " class = " input-text " accept = " image / png, image / jpeg " />
            < img  id = " image " class = " thumb " />
        </ fieldset >
        < input  id = " id " type = " hidden " value = " -1 " />
        < input  id = " nomeFoto " type = " hidden " value = "" />
        < input  type = " reset " class = " button " id = " btnLimpar " value = " Limpar " />
        < input  type = " submit " class = " button " id = " btnSalvar " value = " Salvar " />
    </ form >
</ div >

< div  id = " lista " >
    < script  type = " text / javascript " > carregarLista ( ) ; </ script >
</ div >
< script  type = " text / javascript " >
    const  categoriaSelect  =  documento . querySelector ( '#cod_categoria' ) ;
    const  tipoprodSelect  =  document . querySelector ( '#cod_tipoprod' ) ;
    categoriaSelect . addEventListener ( 'alterar' ,  e  =>  {
        fetch ( `./tipoprod.ajax.php?cod_categoria= $ { e . target . value } ` , { method : 'GET' } )
        . then ( dados  =>  dados . json ( ) )  // descodifica a resposta
        . então ( dados  =>  {
            tipoprodSelect . innerHTML  =  '' ;
            dados . forEach ( e => {
                 opção  const =  documento . createElement ( 'opção' ) ;
                opção . innerText  =  e . nome ;
                tipoprodSelect . appendChild ( opção ) ;
            } )
            console . log ( )
        } )  // exibi a resposta
        . pegar ( errar  =>  console . log ( errar ) ) ;
    } ) ;
    
</ script >

< p  class = " rodape " > </ p >
</ body >
</ html >
