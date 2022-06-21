<!DOCTYPE html>
<html lang="pr">
<head>
    <?php wp_head() ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala do Empreendedor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Cabeçalho do site principal -->
    <header>
        <nav class="menu">
            <!-- logotipo do cabeçalho -->
            <a href="<?php echo get_site_url() ?>">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/logo.png' ?> " alt="">
            </a>
            <!-- menu de navegação do cabeçalho -->
            <ul class="menu-items">
                <!-- Itens do menu de navegação -->
                <li class="active"><a href="#"><?php echo __('Home') ?></a></li>
                <li><a href="#"><?php echo __('Agenda') ?></a></li>
                <li><a href="#"><?php echo __('Serviços') ?></a></li>
                <li><a href="#"><?php echo __('Sala Digital') ?></a></li>
                <li><a href="#"><?php echo __('MEI') ?></a></li>
                <li><a href="#"><?php echo __('Minha Empresa Legal') ?></a></li>
                <li><a href="#"><?php echo __('Salas nos CRAS') ?></a></li>
                <li><a href="#"><?php echo __('Ferramentas de gestão') ?></a></li>
                <li><a href="#"><?php echo __('Conteudos') ?></a></li>
            </ul>
            <!-- ícone de menu responsivo -->
            <span class="btn-menu">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/bars-solid.svg' ?>" alt="">
            </span>
        </nav>        
    </header>