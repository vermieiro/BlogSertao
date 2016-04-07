<html><img src="http://192.168.10.35/blog/wp-content/uploads/2016/02/Rede_Azul.png"></html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?

$nome=$_POST['nome'];

$email=$_POST['email'];

$titulo=$_POST['titulo'];

$texto=$_POST['texto'];


$Destinatario="allan.matriz@sertao.com.br";


$Titulo="$titulo";


$mensagem1="

Uma mensagem enviada do blog !

Algum vistante mandou essa duvida pelo blog.

Nome: $nome

Email: $email

Duvida: $texto";


mail("$Destinatario","$Titulo", "$mensagem1","From:$email,$texto");

?>

<html>
	<head>
		<link rel="stylesheet" type="text/css"  href="csscontato.css" />
		<title> Processos Sertao e SuperPRO</title>
	</head>
	<body>
		<div class="menuprincipal">
			<nav>
				<ul class="menu">                  
					<li><a href="http://192.168.10.35/blog"><b>Blog</b></a></li>
                    <li><a href="http://sertao.com.br/"><b>Site Sert&atilde;o</b></a></li>
                    <li><a href="http://superpro.com.br/"><b>Site Super PR&Oacute;</b></a></li>					               
				</ul>
			</nav>
			<br>
			<br>
			<br>
			<div class="but4">
				<h3><p align="center">Sua d&uacute;vida foi enviado com sucesso !</P>
				<br>
				<p align="center">Clica em voltar para retornar a pagina de processos</p>
				<div class="but2"><a href="http://192.168.10.35/blog/processos/2016/Home.html"><b>Voltar</b></a></div>
			</div>
		</div>
	</body>
</html>
