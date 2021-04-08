<?php

$config['db'] = array(
    'host'      => 'localhost',
    'username'  => 'root',
    'password'  => '',
    'dbname'    => 'ecoservice'
);
try {

	$pdo = new PDO("mysql:host={$config['db']['host']};dbname={$config['db']['dbname']}", $config['db']['username'], $config['db']['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    var_dump($pdo); die;
}

catch (PDOException $e) {
	die  ("Echec de connexion : " . utf8_encode($e->getMessage()) . "\n");
}

?>