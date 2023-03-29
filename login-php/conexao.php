<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'lucas_silva');
define('SENHA', 'pi04d688');
define('DB', 'localhostlucas_s');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');