<?php
   //Variáveis que recebem os dados digitados no formulário pelo id atribuído nos input
   $nome = $POST[nome]; 
   $email = $POST[email]; 
   $mensagem = $POST[mensagem];

mail (
    "bruno_dps@hotmail.com", //Endereço que vai receber a mensagem
    "Nome: $nome
     Email: $email   
     Mensagem: $mensagem", "FROM:$nome<$email>");
?>
