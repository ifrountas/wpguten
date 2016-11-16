<?php

function your_own_cpt_dashboard_filtering() {
    global $typenow;
 
    $taxonomies = array('TAXONOMIES NAMES SEPARATED WITH COMMAS');
 
    if( $typenow == 'CPT NAME' ){
 
        foreach ($taxonomies as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            $tax_name = $tax_obj->labels->name;
            $terms = get_terms($tax_slug);
            if(count($terms) > 0) {
                echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
                echo "<option value=''>Show All $tax_name</option>";
                foreach ($terms as $term) { 
                    echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name. '</option>'; 
                }
                echo "</select>";
            }
        }
    }
}
add_action( 'restrict_manage_posts', 'your_own_cpt_dashboard_filtering' );

//This is awesome!

?>
