<?php
    if(isset($_POST['nome']) && (isset($_POST['idade']))){
        $nome = htmlspecialchars($_POST['nome']);
        $idade = (int)$_POST['idade'];
            echo" Olá, $nome! Você tem $idade anos.";
    }else{
        echo "Dados vazios, favor preencher!";
    }


?>