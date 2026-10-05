<?php

echo 'PHP: ' . PHP_VERSION . '<br>';
echo 'SAPI: ' . PHP_SAPI . '<br>';
echo 'SQLSRV loaded: ';
var_dump(extension_loaded('sqlsrv'));

echo '<br>sqlsrv_connect exists: ';
var_dump(function_exists('sqlsrv_connect'));

echo '<br>Loaded ini: ' . php_ini_loaded_file();
