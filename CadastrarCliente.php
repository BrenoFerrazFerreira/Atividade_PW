<?php

$dados = $_POST;
var_dump($dados);

include "Cliente.php";

extract($_POST);

$novoCadastro = new Cliente($txtNome, $txtPeso, $txtAltura, $txtTelefone);
$novoCadastro->cadastrar();
