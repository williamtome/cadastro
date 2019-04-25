<?php

$con = new mysqli("localhost", "root", "", "cadastro");

if ($con->connect_error) {
	die("Falhou: ".$con->connect_error);
}