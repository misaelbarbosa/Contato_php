<?php
 
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['mensagem'];

 
 
$headers = "From: ". $nome;
$header .= "MIME-Version: 1.0\n";
$header .="Content-type:text/html; charset=iso-8859-1\n";
$header .="From: $email\n";
 
$corpoemail = 'Novo usuario mandou um recado
               Nome: '   .$nome.' 
               Email:'   .$email.'
               Assunto:' .$assunto.' 
               Mensagem:'.$msg.' ';


 
 
 
 
if(mail("misael_webmaster@hotmail.com", "Fale Conosco",$corpoemail,$headers)){
 
 
       echo "<script>alert('Mensagem enviada com sucesso!');</script>"; 
       header("Location: send_success.php");
 
} else{
 
      echo "<script>alert('Erro ao enviar, tente diretamente pelo email rebecatimao@zipmail.com.br');</script>";  
 
}