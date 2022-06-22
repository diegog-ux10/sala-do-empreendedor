<?php

    //Registro do tipo de postagem para serviços
    function register_services_post_type() {

        $services_labels = array(
            'name'               => __( 'Serviços' ),
            'singular_name'      => __( 'Serviço' ),
            'add_new'            => __( 'Adicionar Novo Serviço' ),
            'add_new_item'       => __( 'Adicionar Novo Serviços' ),
            'edit_item'          => __( 'Editar' ),
            'new_item'           => __( 'Novo Serviços' ),
            'all_items'          => __( 'Listar Todos os Serviços' ),
            'view_item'          => __( 'Ver Serviço Anterior' ),
            'search_items'       => __( 'Buscar' ),
            'featured_image'     => 'Imagem Destacada',
            'set_featured_image' => 'Adicionar Imagem'
        );

        $servicesConfig = array(
            'labels'            => $services_labels,
            'description'       => '',
            'public'            => true,
            'menu_position'     => 30,
            'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'has_archive'       => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'menu_icon'         => 'dashicons-welcome-write-blog'
        );

        register_post_type( 'services', $servicesConfig );

    }

    add_action( 'init', 'register_services_post_type' );


    //Registro do tipo de postagem para Nota Fiscal

    function register_nota_post_type() {

        $nota_labels = array(
            'name'               => __( 'Nota Fiscal' ),
            'singular_name'      => __( 'Nota' ),
            'add_new'            => __( 'Adicionar Novo Nota' ),
            'add_new_item'       => __( 'Adicionar Novo Nota' ),
            'edit_item'          => __( 'Editar' ),
            'new_item'           => __( 'Novo Nota' ),
            'all_items'          => __( 'Listar Todos as Notas Fiscales' ),
            'view_item'          => __( 'Ver Nota Anterior' ),
            'search_items'       => __( 'Buscar' ),
            'featured_image'     => 'Imagem Destacada',
            'set_featured_image' => 'Adicionar Imagem'
        );

        $notaConfig = array(
            'labels'            => $nota_labels,
            'description'       => '',
            'public'            => true,
            'menu_position'     => 30,
            'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'has_archive'       => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'menu_icon'         => 'dashicons-welcome-write-blog'
        );

        register_post_type( 'nota', $notaConfig );

    }

    add_action( 'init', 'register_nota_post_type' );

       //Registro do tipo de postagem para certidões

       function register_certificates_post_type() {

        $certificates_labels = array(
            'name'               => __( 'Certidões' ),
            'singular_name'      => __( 'Certidõe' ),
            'add_new'            => __( 'Adicionar Novo Certidõe' ),
            'add_new_item'       => __( 'Adicionar NovoCertidõe' ),
            'edit_item'          => __( 'Editar' ),
            'new_item'           => __( 'Novo Certidõe' ),
            'all_items'          => __( 'Listar Todos os Certidões' ),
            'view_item'          => __( 'Ver Certidõe Anterior' ),
            'search_items'       => __( 'Buscar' ),
            'featured_image'     => 'Imagem Destacada',
            'set_featured_image' => 'Adicionar Imagem'
        );

        $certificatesConfig = array(
            'labels'            => $certificates_labels,
            'description'       => '',
            'public'            => true,
            'menu_position'     => 30,
            'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'has_archive'       => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'menu_icon'         => 'dashicons-welcome-write-blog'
        );

        register_post_type( 'certificates', $certificatesConfig );

    }

    add_action( 'init', 'register_certificates_post_type' );


         //Registro do tipo de postagem para Tutoriais

         function register_tutorial_post_type() {

            $tutorial_labels = array(
                'name'               => __( 'Tutoriais' ),
                'singular_name'      => __( 'Tutoriais' ),
                'add_new'            => __( 'Adicionar Novo Tutoriais' ),
                'add_new_item'       => __( 'Adicionar Novo Tutoriais' ),
                'edit_item'          => __( 'Editar' ),
                'new_item'           => __( 'Novo Tutoriais' ),
                'all_items'          => __( 'Listar Todos os Tutoriais' ),
                'view_item'          => __( 'Ver Tutoriais Anterior' ),
                'search_items'       => __( 'Buscar' ),
                'featured_image'     => 'Imagem Destacada',
                'set_featured_image' => 'Adicionar Imagem'
            );
    
            $tutorialConfig = array(
                'labels'            => $tutorial_labels,
                'description'       => '',
                'public'            => true,
                'menu_position'     => 30,
                'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
                'has_archive'       => true,
                'show_in_admin_bar' => true,
                'show_in_nav_menus' => true,
                'menu_icon'         => 'dashicons-welcome-write-blog'
            );
    
            register_post_type( 'tutorial', $tutorialConfig );
    
        }
    
        add_action( 'init', 'register_tutorial_post_type' );

         //Registro do tipo de postagem para Credito

         function register_credits_post_type() {

            $credits_labels = array(
                'name'               => __( 'Créditos' ),
                'singular_name'      => __( 'Crédito' ),
                'add_new'            => __( 'Adicionar Novo Crédito' ),
                'add_new_item'       => __( 'Adicionar NovoCrédito' ),
                'edit_item'          => __( 'Editar' ),
                'new_item'           => __( 'Novo Crédito' ),
                'all_items'          => __( 'Listar Todos os Créditos' ),
                'view_item'          => __( 'Ver Crédito Anterior' ),
                'search_items'       => __( 'Buscar' ),
                'featured_image'     => 'Imagem Destacada',
                'set_featured_image' => 'Adicionar Imagem'
            );
    
            $creditsConfig = array(
                'labels'            => $credits_labels,
                'description'       => '',
                'public'            => true,
                'menu_position'     => 30,
                'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
                'has_archive'       => true,
                'show_in_admin_bar' => true,
                'show_in_nav_menus' => true,
                'menu_icon'         => 'dashicons-welcome-write-blog'
            );
    
            register_post_type( 'credits', $creditsConfig );
    
        }
    
        add_action( 'init', 'register_credits_post_type' );

        //Registro do tipo de postagem para Informacaos

        function register_information_post_type() {

            $information_labels = array(
                'name'               => __( 'Informações' ),
                'singular_name'      => __( 'Informaçõe' ),
                'add_new'            => __( 'Adicionar Novo Informaçõe' ),
                'add_new_item'       => __( 'Adicionar NovoInformaçõe' ),
                'edit_item'          => __( 'Editar' ),
                'new_item'           => __( 'Novo Informaçõe' ),
                'all_items'          => __( 'Listar Todos os Informações' ),
                'view_item'          => __( 'Ver Informaçõe Anterior' ),
                'search_items'       => __( 'Buscar' ),
                'featured_image'     => 'Imagem Destacada',
                'set_featured_image' => 'Adicionar Imagem'
            );
    
            $informationConfig = array(
                'labels'            => $information_labels,
                'description'       => '',
                'public'            => true,
                'menu_position'     => 30,
                'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
                'has_archive'       => true,
                'show_in_admin_bar' => true,
                'show_in_nav_menus' => true,
                'menu_icon'         => 'dashicons-welcome-write-blog'
            );
    
            register_post_type( 'information', $informationConfig );
    
        }
    
        add_action( 'init', 'register_information_post_type' );

        //Registro do tipo de postagem para Escritorio de Compras

        function register_shopping_post_type() {

            $shopping_labels = array(
                'name'               => __( 'Compra' ),
                'singular_name'      => __( 'Compra' ),
                'add_new'            => __( 'Adicionar Novo Compra' ),
                'add_new_item'       => __( 'Adicionar NovoCompra' ),
                'edit_item'          => __( 'Editar' ),
                'new_item'           => __( 'Novo Compra' ),
                'all_items'          => __( 'Listar Todos os Compras' ),
                'view_item'          => __( 'Ver Compra Anterior' ),
                'search_items'       => __( 'Buscar' ),
                'featured_image'     => 'Imagem Destacada',
                'set_featured_image' => 'Adicionar Imagem'
            );
    
            $shoppingConfig = array(
                'labels'            => $shopping_labels,
                'description'       => '',
                'public'            => true,
                'menu_position'     => 30,
                'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
                'has_archive'       => true,
                'show_in_admin_bar' => true,
                'show_in_nav_menus' => true,
                'menu_icon'         => 'dashicons-welcome-write-blog'
            );
    
            register_post_type( 'shopping', $shoppingConfig );
    
        }
    
        add_action( 'init', 'register_shopping_post_type' );


         //Registro do tipo de postagem para Atendimentos

         function register_attendance_post_type() {

            $attendance_labels = array(
                'name'               => __( 'Atendimentos' ),
                'singular_name'      => __( 'Atendimentos' ),
                'add_new'            => __( 'Adicionar Novo Atendimentos' ),
                'add_new_item'       => __( 'Adicionar Novo Atendimentos' ),
                'edit_item'          => __( 'Editar' ),
                'new_item'           => __( 'Novo Atendimentos' ),
                'all_items'          => __( 'Listar Todos os Atendimentos' ),
                'view_item'          => __( 'Ver Atendimentos Anterior' ),
                'search_items'       => __( 'Buscar' ),
                'featured_image'     => 'Imagem Destacada',
                'set_featured_image' => 'Adicionar Imagem'
            );
    
            $attendanceConfig = array(
                'labels'            => $attendance_labels,
                'description'       => '',
                'public'            => true,
                'menu_position'     => 30,
                'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
                'has_archive'       => true,
                'show_in_admin_bar' => true,
                'show_in_nav_menus' => true,
                'menu_icon'         => 'dashicons-welcome-write-blog'
            );
    
            register_post_type( 'attendance', $attendanceConfig );
    
        }
    
        add_action( 'init', 'register_attendance_post_type' );

