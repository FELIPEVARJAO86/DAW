<! DOCTYPE html >
< html >
< cabeça >
< estilo >
mesa {
  largura :  50 % ;
  colapso da fronteira : colapso;
}

tabela ,  td ,  th {
  borda :  preto sólido de 1 px ;
  preenchimento :  5 px ;
}

th { text-align : left;}
</ estilo >
</ head >
< corpo >

<? php
$ q = intval ( $ _GET [ 'q' ]);

$ con = mysqli_connect ( 'localhost' , "root" , "" , "av1" );
if (! $ con ) {
  die ( 'Erro:' . mysqli_error ( $ con ));
}

mysqli_select_db ( $ con , "ajax_demo" );
$ sql = "SELECT * FROM tb_cidades WHERE estado = '" . $ q . "'" ;
$ result = mysqli_query ( $ con , $ sql );

echo  "<table>
<tr>
<th> Cidades </th>
</tr> " ;
while ( $ row = mysqli_fetch_array ( $ result )) {
  echo  "<tr>" ;
  echo  "<td>" . $ row [ 'nome' ]. "</td>" ;
  echo  "</tr>" ;
}
echo  "</table>" ;
mysqli_close ( $ con );
?>
</ body >
</ html >
