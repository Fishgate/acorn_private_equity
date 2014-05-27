<?php
/*============================================
                SHORTCODES
 ============================================*/

//------------------------- PRIMARY FUNCTIONS
function colleft($atts, $content = null){
    return '<div class="left m-all t-1of2 d-1of2 team">'.$content.'</div>';
}

function colright($atts, $content = null){
    return '<div class="left m-all t-1of2 d-1of2 team">'.$content.'</div>';
}
function hr(){
    return '<br clear="all" /><hr />';
}

//------------------------- HOOKS
add_shortcode('colleft', 'colleft');
add_shortcode('colright', 'colright');
add_shortcode('hr', 'hr');
?>
