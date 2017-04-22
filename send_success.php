<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Início</title>
<style>
	form { width: 80%; background: #17F0BF ; text-align: center; margin: 0 auto; margin-top: 50px;padding: 20px; border-radius: 5px;}

</style>

</head>
<body>
<h1>Seu e-mail foi enviado com sucesso, em breve retornaremos o contato</h1>
	<form action="enviar.php" method="post">
	<label>Nome</label><br>
		<input type="text" name="nome" placeholder="Digite seu nome" required><br>

		<label>E-mail</label><br>
		<input type="email" name="email" placeholder="Digite seu E-mail" required><br>

		<label>Assunto</label><br>
		<input type="text" name="assunto" placeholder="" required><br>
		 <label>Mensagem</label><br>
		 <textarea name="mensagem" rows="10" cols="50"></textarea><br><br>
		 <input type="submit" value="Enviar">
		 <input type="reset" value="Limpar dados">
		
		
	</form>
</body>
</html>