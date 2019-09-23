<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "test";
$con = new mysqli($servidor, $usuario, $senha, $banco);
$res = $con->query("SELECT titulo, autor FROM livros");
$num_linhas = $res->num_rows;
for ($i = 0; $i < $num_linhas; $i++) {
    $dados = $res->mysqli_fetch_row();
    $titulo = $dados[0];
    $autor = $dados[1];
    echo "$titulo . $autor <br>";
}
$con->close();
