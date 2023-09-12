<?php
/*
Plugin Name: Video View Counter
Description: Count and display views for videos on website pages.
Version: 1.0
Author: Your Name
*/

// Add your plugin code below this comment.
function increment_video_view_count() {
    if (is_single() || is_page()) {
        global $post;

        // Check if the post content contains the YouTube video URL.
        $post_content = $post->post_content;
        if (strpos($post_content, 'https://www.youtube.com') !== false) {
            // Get the current view count or set it to 0 if it doesn't exist.
            $view_count = get_post_meta($post->ID, 'video_view_count', true);
            $view_count = empty($view_count) ? 0 : $view_count;

            // Increment the view count.
            $view_count++;

            // Update the view count in post meta.
            update_post_meta($post->ID, 'video_view_count', $view_count);

            // Log the view count for debugging (check your error log).
            error_log("View count updated for post {$post->ID}: {$view_count}");
        }
    }
}
add_action('wp_footer', 'increment_video_view_count');




function display_video_view_count($atts) {
    if (isset($atts['post_id'])) {
        $view_count = get_post_meta($atts['post_id'], 'video_view_count', true);
        return "View Count: " . ($view_count ? $view_count : 0);
    }
}

add_shortcode('video_view_count', 'display_video_view_count');
