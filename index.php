<?php
require_once("config.php");
use Cliente\Cadastro;
$cad = new Cadastro();
$cad->setNome("Bruno Emanuel");
$cad->setEmail("brunoemanuel779@gmail.com");
$cad->setDataNasc("11/01/1997");
echo $cad;
echo $cad->realizarVenda();
?>