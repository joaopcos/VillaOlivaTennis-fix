<?php
    $email = "reservas@villaolivatennis.com";
	$headers = "MIME-Version: 1.0\n";
	$headers = "Content-type: text/html; charset=iso-8859-1\n";
	$headers = "From:". $_POST['email-contato'];
	$subject = "Mensagem de". $_POST['nome-contato'];
	$mensagem = $_POST['mensagem-contato'];
	mail($email, $subject, $mensagem, $headers);
?>