<?php
    $conexao = mysqli_connect("127.0.0.1", "root", "");
               mysqli_select_db($conexao, "renard_site2");
               mysqli_set_charset($conexao, "UTF8");

               //echo ($conexao)?"Ok":"Falha";
?>