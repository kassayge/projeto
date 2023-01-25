<?php

require_once("conexao.php");

$sql = "SELECT id, nome FROM teste";
$teste = $link->query($sql);

?>  