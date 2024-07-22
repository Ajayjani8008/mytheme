<?php
function set_news_post_date($post_id)
{
    //check if this is  post to apply  the logic to 

    if ('news' !== get_post_type($post_id)) {
        return;
    }
    //check if dat field is empty
    $date = get_field('publish_date', $post_id);
    if (empty($date)) {
        //set data to current date
        update_field('publish_date', current_time('Ymd'), $post_id);
    }
}

add_action('acf/save_post', 'set_news_post_date', 20);
