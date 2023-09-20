<?php
function itnt_ppa_menu()
{
    add_menu_page(
        'ITNT PDF Processing Assistent', 
        'ITNT PPA', 
        'manage_options', 
        'itnt_ppa', 
        'itnt_ppa_main', 
        99 
    );
    
}
add_action('admin_menu', 'itnt_ppa_menu');

function itnt_ppa_main()
{
    
    echo '<div class="wrap"><h2>Dein Plugin</h2></div>';
}


?>