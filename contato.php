<?php


$emailEnviar = "genealogiars@gmail.com";
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$pais= $_POST["pais"];
$ramo = $_POST["ramo"];
$familia = $_POST["familia"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

if($_POST['enviar']){

	mail("$emailEnviar","$texto","
	
Nome: $nome
E-mail: $email
Telefone: $telefone
Cidade: $cidade
Estado: $estado
Pais: $pais
Ramo: $ramo
Familia: $familia
Assunto: $assunto
Mensagem: $mensagem
");

echo '<script>alert("Mensagem enviada! Obrigado!");</script>';


}

            


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contato</title>
<link href="../Estilos/geral3.css" rel="stylesheet" type="text/css">

<style type="text/css">
#sobreregioesintro {
	text-align: center;
	width:auto;
	clear:both;
}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/abril-fatface:n4:default;atomic-age:n4:default;bowlby-one:n4:default;droid-sans-mono:n4:default;ultra:n4:default.js" type="text/javascript"></script>


</head>

<body>



<div id="wrapper">

<header id="header">
  
  	<div id="titlediv">
  	  <h3 id="title">Rocha e Silva </h3>
  	</div>
  
  	<nav id="mainnav">
      <ul>
        <li><a href="graficos.html">Gráficos</a></li>
        <li><a href="familiasprinc.html">Pessoas</a></li>
        <li><a href="regioes.html">Regiões</a> </li>
        <li><a href="apesquisa.html">A Pesquisa</a></li>
        <li><a href="index.html">Home</a></li>
      </ul>
  	</nav>

  </header>





<div class="banner_tecnologia" style="background-image:url(../Imagens/bannerregioes4.jpg);">
  </div>
  


  <div id="regioesmenu" align="center"> 
    <p><strong>Envie o seu comentário ou dúvida por aqui ou por e-mail</strong></p>
    <p><strong>para genealogiars@gmail.com</strong> </p>
    <p>&nbsp;</p>

  </div>

  
<div id="faleconosco" style="margin-left:200px;">     
 <form id="FrmContato" name="FrmContato" method="post" action="">
<p>&nbsp;</p>
<table width="1000" border="0" cellspacing="0" cellpadding="0" id="FrmContact">
  
  <tr>
        <td width="27%" height="50">Nome:</td>
        <td width="13%">&nbsp;</td>
        <td width="60%"><input type="text" name="nome" id="Nome" required /></td>
      </tr>
      
      <tr>
        <td height="50">E-mail:</td>
        <td>&nbsp;</td>
        <td><input type="email" name="email" id="Email" required/></td>
      </tr>
      <tr>
        <td height="50">Telefone:</td>
        <td>&nbsp;</td>
        <td><input type="text" name="telefone" id="Telefone"/></td>
      </tr>
      
           <tr>
        <td height="50" valign="middle">Cidade:</td>
        <td>&nbsp;</td>
        <td><input type="text" name="cidade" id="Cidade"/></td>
      </tr>
      
                <tr>
        <td height="50" valign="middle">Estado:</td>
        <td>&nbsp;</td>
        <td><input type="text" name="estado" id="Estado"/></td>
      </tr>
      
                      <tr>
        <td height="50" valign="middle">PaÍs:</td>
        <td>&nbsp;</td>
        <td><input type="text" name="pais" id="Pais"/></td>
      </tr>
      
                            <tr>
        <td height="50" valign="middle">Voce pertence a algum dos Ramos Pereira da Silva ou Pereira da Rocha?</td>
        <td>&nbsp;</td>
        <td>    
         <select name="ramo" id="Ramo" style="width:25%;">
        
                    <option value="Sim">Sim</option>
                    <option value="Nao">Não</option>

                    
         </select>
         Se sim, qual a sua família?
         <input type="text" name="familia" id="Familia"/>
         </td>
      </tr>
            <tr>
        <td width="27%" height="50">Assunto:</td>
        <td width="13%">&nbsp;</td>
        <td>
        
         <select name="assunto" id="Assunto" style="width:25%;">
        
                    <option value="Pesquisa">Pesquisa</option>
                    <option value="Parentesco">Parentesco</option>
                    <option value="Regioes">Regiões</option>
				    <option value="Outros">Outros</option>
                    
         </select>
      </td>
      </tr>
      <tr>
        <td height="50" valign="middle">Mensagem:</td>
        <td>&nbsp;</td>
        <td><textarea name="mensagem" id="Mensagem" class="textarea" required rows="4" cols="50"></textarea></td>
      </tr>

  

   
      <tr>
        <td height="50">&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="enviar" id="enviar"/></td>
      </tr>
</table>

 </form>


    <h1>
    <h1>&nbsp;</h1>
  </div>




>
 

 

  <div>

  </div>




 

  <footer id="footer">
   
    <section class="footerlinks">
      <p><a href="fontes.html">Fontes</a></p>
    </section>
    <section class="footerlinks">
      <p><a href="imagens.html">Imagens</a></p>
    </section>
      <section class="footerlinks">
      <p><a href="#">Contato</a></p>
    </section>
  </footer>
  
     <table width="1400" align="center" style="font-size:7pt; border=non; margin-top:0px; color:rgba(153,153,153,1); font-family:Verdana, Geneva, sans-serif;">

        <tr style="border:none">
          <td width="50%" style="border:none"><span style="text-align:left;">É permitida a reprodução do conteúdo deste site, por qualquer meio, desde que informado por escrito aos autores.</span></td>
          <td width="20%" style="border:none">&nbsp;</td>
                                  <td width="30%">| Site produzido por Guilherme Rocha da Cruz</td>
        </tr>
        <tr style="border:none">
      	  <td colspan="2" style="border:none; text-align:left;">  Pesquisa, coleta de dados e arquivamento de documentos: Guilherme Rocha da Cruz e Sandra Helena Rocha da Cruz</td>
                     <td>| Todas as fontes de pesquisa estão devidamente listadas no menu Fontes.</td>
        <tr>
          <td style="color:black;"></td>          

          <td style="color:black;"></td>
                    <td></td>
        </tr>
          
      </table>
</div>
</body>
</html>
