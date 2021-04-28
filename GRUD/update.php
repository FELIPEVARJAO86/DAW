<? php  include  "connection.php" ;
if ( isset ( $ _POST [ 'update' ])) {
  $ nome = $ _POST [ 'nome' ];
  $ mat = $ _POST [ 'mat' ];
  $ datanasc = $ _POST [ 'datanasc' ];
  $ id = $ _POST [ 'id' ];
  $ query = mysqli_query ( $ con , "UPDATE Alunos SET nome = '$ nome', mat = '$ mat', datanasc = '$ datanasc' WHERE id = '$ id'" );
  if ( $ query ) {
    cabeçalho ( "localização: index.php" );
  } else {
    echo  "<script> alert ('Desculpe, atualizar a consulta não funciona') </script>" ;
  }
}
 ?>
<! DOCTYPE html >
< html >
    < cabeça >
        < title > PHP Crud </ title >
        < Vínculo  rel = " stylesheet " href =" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css " integridade =" SHA384-Gn5384xqQ1aoWXA + 058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW / dAiS6JXm " crossorigin =" anonymous " >
    </ head >
    < corpo >

        <? php
            if ( isset ( $ _GET [ 'update_id' ])): ?>
            <? php  $ id = $ _GET [ 'update_id' ]; ?>
            <? php  $ query = mysqli_query ( $ con , "SELECT * FROM Alunos WHERE id = '$ id'" );
            $ r = mysqli_fetch_array ( $ query );
            $ nome = $ r [ 'nome' ];
            $ mat = $ r [ 'mat' ];
            $ datanasc = $ r [ 'datanasc' ];
        ?>

        < div  class = " container " >
                
            < div  class = " card text-center mt-5 " >
                < div  class = " card-header " >
                    ATUALIZAÇÃO DO MENU
                </ div >
                < div  class = " card-body " >
                    < A  href = " insere.php " class =" btn btn-primária " > Inserir Aluno </ a >
                    < A  href = " lista.php " class =" btn btn-primária " > Listar Alunos </ a >
                    < A  href = " buscar.php " class =" btn btn-primária " > Exibir hum Aluno </ a >

                    < form  class = " mt-2 " method = " POST " action = " update.php " >

                        < input  type = " text " name = " nome " placeholder = " Entre com o nome ... " value = " <? php  echo  $ nome ; ?> " >
                        
                        < input  type = " text " name = " mat " placeholder = " Entre com a matricula ... " value = " <? php  echo  $ mat ; ?> " >
                    
                        < input  type = " text " name = " datanasc " placeholder = " Entre com a data de nascimento ... " value = " <? php  echo  $ datanasc ; ?> " >
                        
                        < input  type = " hidden " name = " id " value = " <? php  echo  $ id ; ?> " >

                        < input  type = " submit " name = " update " value = " Atualizar " >
                        
                    </ form >
                    
                </ div >
                < div  class = " card-footer text-muted " >
                    Trabalho CRUD
                </ div >
            </ div >
        </ div >   
    <! - formulário ->
  <? php  endif ; ?>

  </ body >

</ html >
