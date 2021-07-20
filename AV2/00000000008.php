<? php
    include ( 'connection.php' );
?>
<? php
    
?>
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
        <! - Seção ->
        < section  class = " py-5 " >
            < div  class = " container px-4 px-lg-5 mt-5 " >
                < div  class = " row justify-content-center " >
                    < div  class = " col-md-12 " >
                        < div  class = " card h-100 " >
                            < div  class = " card-body p-4 " >
                                < div  class = " text-center " >
                                    <! - Nome do produto ->
                                    <? php 
                                    
                                        $ sql = "SELECT * FROM produtos WHERE cod_barra = '00000000008'" ;
                                        $ resultado = $ con -> consulta ( $ sql );
                                        $ saida = "<table>" ;
                                            while ( $ d = mysqli_fetch_array ( $ resultado , MYSQLI_BOTH )) {
                                                $ saida   = $ saida . "<tr>"
                                                        . "<td> <img style = 'altura: 620px; widht: 540px;' class = thumb src = '/ 3DAW_Thales / AV2 / imagens / " . $ d [ 'foto' ]. "'/> </td>"
                                                        . "<td>"
                                                        . "<h4>" . $ d [ 'nome' ]. "</h4>"
                                                        . "<h6> Código de Barra:" . $ d [ 'cod_barra' ]. "</h6>"
                                                        . "<h6> Fabricante:" . $ d [ 'fabricante' ]. "</h6>"
                                                        . "<h6> Categoria:" . $ d [ 'categoria' ]. "</h6>"
                                                        . "<h6> Tipo de Produto:" . $ d [ 'tipo_prod' ]. "</h6>"
                                                        . "<h6> Estoque:" . $ d [ 'qtd_estoque' ]. "</h6>"
                                                        . "<h6> Pesos em gramas:" . $ d [ 'peso_gramas' ]. "</h6>"
                                                        . "<h6> Descrição:" . $ d [ 'descricao' ]. "</h6>"
                                                        . "<h4> R $" . $ d [ 'preco_venda' ]. "</h4>"
                                                        . "</td>"
                                                        . "</tr>" ;
                                            }
                                            $ saida = $ saida . "</table>" ;

                                        echo  $ saida ;
                                        $ resultado -> fechar ();
                                        $ con -> close (); ?>
                                </ div >
                            </ div >
                        </ div >
                    </ div >
                    
                </ div >
            </ div >        
        </ seção >           
        <! - Rodapé ->
        < footer  class = " py-5 bg-dark " >
            < div  class = " container " > < p  class = " m-0 text-center text-white " > Direitos autorais e cópia; AV2 3DAW 2021 </ p > </ div >
        </ rodapé >
        <! - Bootstrap core JS ->
        < script  src = " https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " > </ script >
        <! - Tema principal JS ->
        < script  src = " js / scripts.js " > </ script >
    </ body >
</ html >
