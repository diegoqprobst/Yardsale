<?php   


function plz_assets(){

    wp_register_style("google-font", "https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100;400;500;700&display=swap", array(), false,'all' );
    wp_register_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css", array(),"", 'all');

    wp_enqueue_style ("estilos", get_template_directory_uri()."/assets/css/style.css", array("google-font", "bootstrap"));

}