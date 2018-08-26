<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>T-MySQL - Sistema De Teste Para Servidor MySQL.</TITLE>
<link href="https://fonts.googleapis.com/css?family=Courgette&amp;subset=latin-ext" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Arial&amp;subset=latin-ext" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body BGCOLOR=#D8D8D8>
	
		<div id="login" class="bradius">
			<div class="acomodar">
		<!---acomodar--->

<?php

include 'db.php';

# Titulo da página
echo "<CENTER><h1><B>T-MySQL</B></h1></CENTER><P>";

# Sub Titulo da pagina
echo "<CENTER><h3><B>Sistema De Teste Para Servidor MySQL</B></h3></CENTER><P><BR />"; 

# Se conectando ao SGBD MySQL...
@$conexao = mysql_pconnect("$host","$usuario","$senha");

if ($conexao)  // SE a conexao ao banco de dados foi efetuada com sucesso ENTAO...
  {
    echo "<CENTER><B>Conexão C/ Usuario:<BR><FONT COLOR=green>Consegui me conectar ao MySQL com o usuário ". $usuario .".<BR /> Parabéns!</B></FONT></CENTER><P><BR />";  // exibe esta mensagem no navegador web
  }
else // SENAO...
  {
    echo "<CENTER><B>Conexão C/ Usuario:<BR><FONT COLOR=red>Erro! Não pude me conectar ao servidor MySQL.<BR>Por favor, cheque se o usuario ". $usuario ." está rodando no servidor.</FONT></B></CENTER><P><BR />";  // exibe esta mensagem no navegador web
  }

# Selecionando o banco de dados...
@$selecao = mysql_select_db("$nomedobancodedados");

if ($selecao)  // SE a selecao ao banco de dados foi efetuada com sucesso ENTAO...
  {
    echo "<CENTER><B>Conexão C/ Bancos De Dados:<BR><FONT COLOR=green>Consegui selecionar o banco de dados chamado ". $nomedobancodedados ." com sucesso.<BR /> Parabéns!</B></FONT></CENTER><BR />";  // exibe esta mensagem no navegador web
  }
else // SENAO...
  {
    echo "<CENTER><B>Conexão C/ Bancos De Dados:<BR><FONT COLOR=red>Erro! Não pude selecionar o banco de dados chamado ". $nomedobancodedados .".<BR>Por favor, cheque se este banco de dados existe no servidor MySQL.</FONT></B></CENTER><BR />";  // exibe esta mensagem no navegador web
  }

echo "<P>";
echo "<HR SIZE=4 WIDTH=85%>";
echo "<BR /><CENTER><FONT SIZE=3 COLOR=black><f1><B><b>T-MySQL</b> in <b>2016</b> - Todos Direitos Reservados.</B></FONT></f1></CENTER><P>";

?>

			</div>
		</div>
</body>
</html>