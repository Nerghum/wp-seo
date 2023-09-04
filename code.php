/**
 * Function Name: custom_seo_meta_tags
 *
 * Description: Adds basic SEO meta tags to single posts and pages in WordPress.
 * This function retrieves the post's title and excerpt for the title and description tags.
 * You can customize it to fetch different content or add more SEO-related meta tags as needed.
 *
 * Usage:
 * 1. Place this function in your theme's `functions.php` file.
 * 2. Ensure your theme's header.php file has the <head> section where meta tags are placed.
 *
 * Example:
 * To add more meta tags (e.g., keywords or author), you can extend the function by echoing additional <meta> tags.
 *
 * @since 1.0
 */
function custom_seo_meta_tags() {
    // Check if the current page is a single post or page
    if (is_single() || is_page()) {
        global $post;
        
        // Get the post's title and description
        $seo_title = get_the_title();
        $seo_description = get_the_excerpt();
        
        // Output the meta tags
        echo '<meta name="title" content="' . esc_attr($seo_title) . '">';
        echo '<meta name="description" content="' . esc_attr($seo_description) . '">';
        
        // Optionally, you can add more SEO-related meta tags here
        // Example: echo '<meta name="keywords" content="keyword1, keyword2, keyword3">';
    }
}

// Hook the function to the 'wp_head' action to add meta tags to the HTML head
add_action('wp_head', 'custom_seo_meta_tags');
