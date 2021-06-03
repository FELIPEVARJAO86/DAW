<! DOCTYPE html >
< html >
< cabeça >
< script >
function  mostraCidade ( str )  {
  if  ( str == "" )  {
    documento . getElementById ( "txtHint" ) . innerHTML = "" ;
    retorno ;
  }
  var  xmlhttp = new  XMLHttpRequest ( ) ;
  xmlhttp . onreadystatechange = function ( )  {
    if  ( this . readyState == 4  &&  this . status == 200 )  {
      documento . getElementById ( "txtHint" ) . innerHTML = this . responseText ;
    }
  }
  xmlhttp . open ( "GET" , "cidades.php? q =" + str , true ) ;
  xmlhttp . enviar ( ) ;
}
</ script >
</ head >
< corpo >

< formulário >
< select  name = " cidades " onchange = " mostraCidade (this.value) " >
< option  value = "" > Escolha o estado: </ option >
< option  value = " 01 " > Acre </ option >
< option  value = " 02 " > Alagoas </ option >
< option  value = " 03 " > Amazonas </ option >
< option  value = " 04 " > Amapá </ option >
< option  value = " 05 " > Bahia </ option >
< option  value = " 06 " > Ceará </ option >
< option  value = " 07 " > Distrito Federal </ option >
< option  value = " 08 " > Espírito Santo </ option >
< option  value = " 09 " > Goiás </ option >
< option  value = " 10 " > Maranhão </ option >
< option  value = " 11 " > Minas Gerais </ option >
< option  value = " 12 " > Mato Grosso do Sul </ option >
< option  value = " 13 " > Mato Grosso </ option >
< option  value = " 14 " > Pará </ option >
< option  value = " 15 " > Paraíba </ option >
< option  value = " 16 " > Pernambuco </ option >
< option  value = " 17 " > Piauí </ option >
< option  value = " 18 " > Paraná </ option >
< option  value = " 19 " > Rio de Janeiro </ option >
< option  value = " 20 " > Rio Grande do Norte </ option >
< option  value = " 21 " > Rondônia </ option >
< option  value = " 22 " > Roraima </ option >
< option  value = " 23 " > Rio Grande do Sul </ option >
< option  value = " 24 " > Santa Catarina </ option >
< option  value = " 25 " > Sergipe </ option >
< option  value = " 26 " > São Paulo </ option >
< option  value = " 27 " > Tocantins </ option >
</ select >
</ form >
< Br >
< div  id = " txtHint " > < b > </ b > </ div >

</ body >
</ html >
