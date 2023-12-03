<?php
/**
 * Template Name: custom-template
 * 
 */




 get_header();
 
 /* Start the Loop */
    if (is_front_page() || is_page('about')) {
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        );
    
        $the_query = new WP_Query($args);
    
        if ($the_query->have_posts()) {
            
            while ($the_query->have_posts()) {
                $the_query->the_post();
                if (has_post_thumbnail()) {
                    the_post_thumbnail();
                }
                the_title();
                ?>
                <br>
                <?php
                the_excerpt();
                ?>
                <br>
                <?php
                echo '<a href="' . get_permalink() . '">Read More</a>';?>
                <br>
                <?php
            }
            wp_reset_postdata();
        } else {
            echo 'No posts found';
        }
    }
 



get_footer();

?>