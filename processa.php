<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$endereço = filter_input(INPUT_POST, 'endereço', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$plano = filter_input(INPUT_POST, 'plano', FILTER_SANITIZE_STRING);