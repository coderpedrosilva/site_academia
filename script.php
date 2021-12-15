<?php

$assunto      =   $POST['assunto'];
$corpo        =   "
	Nome: 	  "	.$_POST['nome']. "
    Email:	  "	.$_POST['email']. "
	Mensagem: "	.$_POST['mensagem']. "
";

mail('prezadopedro@hotmail.com', $assunto, $corpo, 'prezadopedro@hotmail.com');
echo 'E-mail enviado com sucesso';

?>