<?php

function dataQueryCards($posts, $name) {

$query = new WP_Query(array(
    'posts_per_page' => $posts,
    'post_type' => $name,
));

return $query;
};

//Consulta de dados de Informacaon

$information = dataQueryCards(16, 'information');

//Consulta de dados de Escritório de Compras

$shopping = dataQueryCards(16, 'shopping');

// consulta de dados de serviços
$services = new WP_Query(array(
'posts_per_page' => 16,
'post_type' => 'services',
));

// consulta de dados de nota fiscal
$nota = new WP_Query(array(
'posts_per_page' => 16,
'post_type' => 'nota',
));

// consulta de dados de nota fiscal
$tutorial = new WP_Query(array(
'posts_per_page' => 16,
'post_type' => 'tutorial',
));

// consulta de dados de certidoe
$certificate = new WP_Query(array(
'posts_per_page' => 16,
'post_type' => 'certificates',
));

// consulta de dados de credito
$credit = new WP_Query(array(
'posts_per_page' => 16,
'post_type' => 'credits',
));

// consulta de dados de credito
$credit = new WP_Query(array(
'posts_per_page' => 16,
'post_type' => 'credits',
));




?>