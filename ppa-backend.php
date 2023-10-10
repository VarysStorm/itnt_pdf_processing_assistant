<?php
function itnt_ppa_menu()
{
    add_menu_page(
        'ITNT PDF Processing Assistent', 
        'ITNT PPA', 
        'manage_options', 
        'itnt_ppa', 
        'itnt_ppa_main' ,
    );
    
}
add_action('admin_menu', 'itnt_ppa_menu');

function itnt_ppa_main(){


    wp_register_style( 'ppa_css', plugins_url('/css/style.css', __FILE__), array() );
    wp_enqueue_style( 'ppa_css' );

    wp_register_script('ppa-backend_script', plugins_url('/js/ppa-backend.js', __FILE__), array());
    wp_register_script('pdfjs', plugins_url('js/pdf.js/src/pdf.js', __FILE__), array());

    wp_enqueue_script('pdfjs');
    wp_enqueue_script('ppa-backend_script');

    $output = '';
    $output .= '<div class="plugin-title">';
        $output .= '<div class="wrapper">';
            $output .= '<h1>ITNT PPA</h1>';
        $output .= '</div>'; 
    $output .= '</div>';
    $output .= '<div class="ppa-body">';
        $output .= '<div class="ppa-wrapper">';
            $output .= '<div class="row-1 half-width">';
                $output .= '<div class="ppa-wrapper-box" id="ppa-w-b-1">';
                $output .= '</div>';
                $output .= '<div class="ppa-wrapper-box" id="ppa-w-b-2">';
                $output .= '</div>';
            $output .= '</div>';
            $output .= '<div class="row-2 full-width">';
                $output .= '<div class="ppa-wrapper-box" id="ppa-w-b-3">';
                $output .= '</div>';
            $output .= '</div>';
        $output .= '</div>';
    $output .= '</div>';


    echo $output;
}
?>
