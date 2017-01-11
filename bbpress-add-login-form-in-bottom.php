<?php

    //this adds the login form on a single topic so someone can leave a reply. It uses the same logic as form-reply
    function wpgc_new_reply_login(){
        if( !bbp_current_user_can_access_create_reply_form() && !bbp_is_topic_closed() && !bbp_is_forum_closed( bbp_get_topic_forum_id() ) ){
            bbp_get_template_part('form', 'user-login');
        }
    }

    add_action('bbp_template_after_single_topic', 'wpgc_new_reply_login');

    //this adds the login form on a single forum so someone can start a topic. It uses the same logic as form-topic
    function wpgc_new_topic_login(){
        if( !bbp_current_user_can_access_create_topic_form() && !bbp_is_forum_closed() ){
            bbp_get_template_part('form', 'user-login');
        }
    }

    add_action('bbp_template_after_single_forum', 'wpgc_new_topic_login');

?>
