<! DOCTYPE html >
< html  lang = " pt-br " >
    < cabeça >
        < meta  charset = " utf-8 " />
        < meta  name = " viewport " content = " width = device-width, initial-scale = 1, shrink-to-fit = no " />
        < meta  name = " descrição " content = "" />
        < meta  name = " autor " content = "" />
        < title > Loja Ximbolé Bahiano </ title >
        <! - CSS do tema central (inclui Bootstrap) ->
        < link  href = " css / styles.css " rel = " stylesheet " />
    </ head >
    < corpo >
        <! - Navegação ->
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
        <! - Cabeçalho ->
        < header  class = " bg-dark py-5 " >
            < div  class = " container px-4 px-lg-5 my-5 " >
                < div  class = " text-center text-white " >
                    < h1  class = " display-4 fw-bolder " > Loja Ximbolé Bahiano </ h1 >
                    < p  class = " lead fw-normal text-white-50 mb-0 " > Loja voltada para artigos tecnologicos </ p >
                </ div >
            </ div >
        </ header >
        <? php  include  "connection.php" ; ?>
        < seção  classe = " mb-4 " >
            < div  class = " container px-4 px-lg-5 mt-5 " >
                <? php  if ( $ _SERVER [ "REQUEST_METHOD" ] == "POST" ) {	
                    $ cod_barra = $ _POST [ "cod_barra" ];
                }
                ?>
                < table  class = " table table-sm " >
                    < thead >
                        < tr >
                            < th > Código de Barra </ th >
                            < th > Nome </ th >
                            < th > Categoria </ th >
                            < th > Preço </ th >
                            < th > Estoque </ th >
                        </ tr >
                    </ thead >
                    < tbody >
                        <? php
                            $ Show = mysqli_query ( $ con , "SELECT nome, categoria, preco_venda, qtd_estoque, cod_barra FROM produtos WHERE ativo = 's'" );
                            while ( $ r = mysqli_fetch_array ( $ Show )): ?>
                                < tr >
                                    < td > <? php  echo  $ r [ 'cod_barra' ]; ?> </ td >
                                    < Td > < a  href = " <? Php  echo  $ r [ 'cod_barra' ] >? Php " > <? Php  echo  $ r [ 'Nome' ]; ?> </ a > </ td >
                                    < td > <? php  echo  $ r [ 'categoria' ]; ?> </ td >
                                    < td > <? php  echo  $ r [ 'preco_venda' ]; ?> </ td >
                                    < td > <? php  echo  $ r [ 'qtd_estoque' ]; ?> </ td >
    
                                </ tr >
                        <? php  endwhile ; ?>
                    </ tbody >
                </ mesa >
            </ div >
        </ seção >
         <! - Rodapé ->
         < footer  id = " footer " class = " p-2 bg-dark " >
            < div  class = " container " > < p  class = " m-0 text-center text-white " > Direitos autorais e cópia; Seu site 2021 </ p > </ div >
        </ rodapé >
        <! - Bootstrap core JS ->
        < script  src = " https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " > </ script >
        <! - Tema principal JS ->
        < script  src = " js / scripts.js " > </ script >
    </ body >
</ html >
