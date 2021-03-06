<?php

// Grab API
// No API at this point in time, we'll leave this part open for when they do decide to create one.


/* - OpenTable Bar -
* ---------------------------------------------
*/

function tf_opentable_bar() {
    
    ob_start();
    
    if ( get_option('tf_opentable_bar_enabled' ) == 'true') {
            $opentable = trim(get_option(tf_opentable_id));
            echo '<!-- opentable bar -->';
            echo '<div id="opentablebar">';
            echo '<div id="opentablebar-center">';
            echo '<script type="text/javascript" src="http://www.opentable.com/frontdoor/default.aspx?rid='. $opentable. '&restref='. $opentable. '&bgcolor=F6F6F3&titlecolor=0F0F0F&subtitlecolor=0F0F0F&btnbgimage=http://www.opentable.com/frontdoor/img/ot_btn_red.png&otlink=FFFFFF&icon=dark&mode=wide"></script>';
            echo '<style type="text/css">.OT_wrapper{background:none;border:none;} .OT_day, .OT_time, .OT_party, .OT_submit {border:none;}</style>';
            echo '</div></div>';
            echo '<!-- / opentable bar -->';
        } else {
            echo '<!-- opentable bar disabled  -->'; 
        }
        
    $output = ob_get_contents();
    ob_end_clean();    
    echo $output;
};

add_action('tf_body_top', 'tf_opentable_bar', 12);