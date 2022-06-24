<!-- data -->
<?php
    // inclusão de arquivo com solicitações de dados
	include_once('data-query-home.php');
?>

<!-- chamando o cabeçalho -->
<?php get_header() ?>

<!-- banner principa -->
<section class="home-banner-section principal-container" style=" background-repeat:no-repeat; background-image: url(<?php echo get_theme_file_uri('/assets/img/home-banner.png'); ?>">
    <div class="home-banner-info secondary-container">
        <img src="" alt="">
        <h1>O <span>seu negócio</span> começa aqui!</h1>
    </div>
</section>

<!-- seção de serviço -->
<section class="principal-container services">
    <div class="secondary-container services-container">
        <h2 class="title-blue"><?php echo __('Serviços') ?></h2>
        <div class="cards-container">
            <!-- loop para exibir serviços -->
            <?php while($services->have_posts()):
                    $services->the_post(); ?>

                        <a href="<?php echo get_field('link') ?>;" target="_blank" class="card-link">
                            <div class="card">
                                <img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
                                <h3><?php echo __(the_title()) ?></h3>
                            </div> 
                        </a>

            <?php endwhile; ?>
            
        </div>
    </div>
</section>
<!-- seção de Nota Fiscal -->
<section class="principal-container nota">
    <div class="secondary-container nota-container">
        <h2 class="title-blue"><?php echo __('Nota Fiscal') ?></h2>
        <div class="cards-container">
            <!-- loop para exibir serviços -->
            <?php while($nota->have_posts()):
                    $nota->the_post(); ?>

                        <a href="<?php echo get_field('link') ?>;" target="_blank" class="card-link">
                            <div class="card">
                                <?php echo get_the_post_thumbnail(); ?>
                                <h3><?php echo __(the_title()) ?></h3>
                            </div> 
                        </a>

            <?php endwhile; ?>
            
        </div>
    </div>
</section>
<!-- seção de Tutoriais-->

<section class="principal-container tutorial">
    <div class="secondary-container tutorial-container">
        <h2 class="title-white"><?php echo __('Tutoriais') ?></h2>
        <div class="list-container">
            <!-- loop para exibir serviços -->
            <ul class="list">
                <?php while($tutorial->have_posts()):
                    $tutorial->the_post(); ?>
                        <li>                                                     
                            <a href="<?php echo get_field('link') ?>;" target="_blank" class="list-link"><?php the_title(); ?></a>
                        </li>            
                <?php endwhile; ?>                        
            </ul>
            
        </div>
    </div>
</section>

<!-- seção de Certidoe -->
<section class="principal-container certificate">
    <div class="secondary-container certificate-container">
        <h2 class="title-blue"><?php echo __('Certidões') ?></h2>
        <div class="cards-container">
            <!-- loop para exibir serviços -->
            <?php while($certificate->have_posts()):
                    $certificate->the_post(); ?>

                        <a href="<?php echo get_field('link') ?>;" target="_blank" class="card-link">
                            <div class="card">
                                <?php echo get_the_post_thumbnail(); ?>
                                <h3><?php echo __(the_title()) ?></h3>
                            </div> 
                        </a>

            <?php endwhile; ?>
            
        </div>
    </div>
</section>

<!-- seção de Credito -->
<section class="principal-container credit">
    <div class="secondary-container credit-container">
        <h2 class="title-blue"><?php echo __('Crédito') ?></h2>
        <div class="cards-container">
            <!-- loop para exibir serviços -->
            <?php while($credit->have_posts()):
                    $credit->the_post(); ?>

                        <a href="<?php echo get_field('link') ?>;" target="_blank" class="card-link">
                            <div class="card">
                                <?php echo get_the_post_thumbnail(); ?>
                                <h3><?php echo __(the_title()) ?></h3>
                            </div> 
                        </a>

            <?php endwhile; ?>
            
        </div>
    </div>
</section>

<!-- seção de Informações -->
<section class="principal-container information">
    <div class="secondary-container information-container">
        <h2 class="title-blue"><?php echo __('Informações') ?></h2>
        <div class="cards-container">
            <!-- loop para exibir serviços -->
            <?php while($information->have_posts()):
                    $information->the_post(); ?>

                        <a href="<?php echo get_field('link') ?>;" target="_blank" class="card-link">
                            <div class="card">
                                <?php echo get_the_post_thumbnail(); ?>
                                <h3><?php echo __(the_title()) ?></h3>
                            </div> 
                        </a>

            <?php endwhile; ?>
            
        </div>
    </div>
</section>

<!-- seção de Escritório de Compras -->
<section class="principal-container shopping">
    <div class="secondary-container shopping-container">
        <h2 class="title-blue"><?php echo __('Escritório de Compras') ?></h2>
        <div class="cards-container">
            <!-- loop para exibir Escritório de Compras -->
            <?php while($shopping->have_posts()):
                    $shopping->the_post(); ?>

                        <a href="<?php echo get_field('link') ?>;" target="_blank" class="card-link">
                            <div class="card">
                                <?php echo get_the_post_thumbnail(); ?>
                                <h3><?php echo __(the_title()) ?></h3>
                            </div> 
                        </a>

            <?php endwhile; ?>
            
        </div>
    </div>
</section>

<!-- seção de Atendimento-->

<section class="principal-container attendance">
    <div class="secondary-container attendance-container">
        <h2 class="title-white"><?php echo __("Atendimento aos MEI'S no Poupa Tempo") ?></h2>
        <div class="two-columns">
            <div class="list-container">
                <!-- loop para exibir serviços -->
                <ul class="list">
                    <?php while($attendance->have_posts()):
                        $attendance->the_post(); ?>
                            <li>                                                     
                                <?php the_title(); ?>
                            </li>            
                    <?php endwhile; ?>                        
                </ul>            
            </div>
            <div class="second-columns">
                <h3>Localização Poupa Tempo</h3>
                <span>Poupa Tempo São Miguel: Rua Presidente Getulio Vargas, 937</span>
                <span>Poupa Tempo Cidade Norte: Av. Atílio Fontana, 2704</span>
            </div>
        </div>        
    </div>
</section>

<!-- chamando o rodapie -->
<?php get_footer() ?>