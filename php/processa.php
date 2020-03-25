<?php

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['mensagem'])) {

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

$to = "stellanacleto@gmail.com";
$subject = "Mensagem de contato - Dreams Turismo";
$body = "Nome: ".$nome."\r\n\r\n".
        "Email: ".$email."\r\n\r\n".
        "Assunto: ".$assunto."\r\n\r\n".
        "Mensagem: ".$mensagem;
$header = "From: stellanacleto@hotmail.com"."\r\n".
            "Reply-to:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)) {
    
    echo '<script>alert("E-mail enviado com sucesso!");
          history.go(-1);
    </script>';

}else {
    echo '<script>alert("O e-mail não pode ser enviado.");
          history.go(-1);
    </script>';
}

}else {
    echo '<script>alert("A mensagem não foi enviada! Tente preencher todos os campos vazios.");
          history.go(-1);
    </script>';
}

?>