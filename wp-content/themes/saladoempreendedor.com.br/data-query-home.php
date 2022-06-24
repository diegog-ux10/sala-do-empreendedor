<?php

function dataQueryCards($posts, $name) {

$query = new WP_Query(array(
    'posts_per_page' => $posts,
    'post_type' => $name,
    'orderby'=> 'post_date', 
    'order' => 'DESC',
));

return $query;
};

//Consulta de dados de Informacaon

$information = dataQueryCards(16, 'information');

//Consulta de dados de Escritório de Compras

$shopping = dataQueryCards(16, 'shopping');

//Consulta de dados de Atendimentos

$attendance = dataQueryCards(16, 'attendance');


// consulta de dados de serviços
$services = dataQueryCards(16, 'services');

// consulta de dados de nota fiscal
$nota = dataQueryCards(16, 'nota');

// consulta de dados de nota fiscal
$tutorial = dataQueryCards(16, 'tutorial');

// consulta de dados de certidoe
$certificate = dataQueryCards(16, 'certificates');

// consulta de dados de credito
$credit = dataQueryCards(16, 'credits');


?>