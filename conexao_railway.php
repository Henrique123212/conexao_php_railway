<?php
$link = mysql_connect("key/link api");
if (!$link) {
    die('Não pode ser conectado: ' . mysql_error());
}
echo 'Conexão com sucesso';
mysql_close($link);
?>
