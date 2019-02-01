<?php
require_once("config.php");

$spl = new Sql();

$usuarios = $spl->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
?>