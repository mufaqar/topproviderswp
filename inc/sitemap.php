<?php


function generate_custom_sitemap() {
    // Define the static service types
    $services = ['internet', 'tv', 'home-security', 'landline'];
    
    // Fetch all terms in `zone_state` and `zone_city` taxonomies
    $zone_states = get_terms(['taxonomy' => 'zone_state', 'hide_empty' => true]);
    $zone_cities = get_terms(['taxonomy' => 'zone_city', 'hide_empty' => true]);
    
    // Fetch all `area_zone` posts
    $area_zone_posts = get_posts(['post_type' => 'area_zone', 'posts_per_page' => -1]);

    // Start XML output
    $xml = new SimpleXMLElement('<urlset/>');
    $xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

    foreach ($services as $service) {
        // Pattern 4: /service
        $url = $xml->addChild('url');
        $url->addChild('loc', home_url("/$service/"));

        foreach ($zone_states as $zone_state) {
            // Pattern 3: /service/zone_state
            $url = $xml->addChild('url');
            $url->addChild('loc', home_url("/$service/{$zone_state->slug}/"));

            foreach ($zone_cities as $zone_city) {
                // Pattern 2: /service/zone_state/zone_city
                $url = $xml->addChild('url');
                $url->addChild('loc', home_url("/$service/{$zone_state->slug}/{$zone_city->slug}/"));

                foreach ($area_zone_posts as $post) {
                    // Verify the post has the current zone_state and zone_city terms
                    $post_zone_states = wp_get_post_terms($post->ID, 'zone_state', ['fields' => 'slugs']);
                    $post_zone_cities = wp_get_post_terms($post->ID, 'zone_city', ['fields' => 'slugs']);
                    
                    if (in_array($zone_state->slug, $post_zone_states) && in_array($zone_city->slug, $post_zone_cities)) {
                        // Pattern 1: /service/zone_state/zone_city/post_slug
                        $url = $xml->addChild('url');
                        $url->addChild('loc', home_url("/$service/{$zone_state->slug}/{$zone_city->slug}/{$post->post_name}/"));
                    }
                }
            }
        }
    }

    // Save the XML to a file
    $xml->asXML(ABSPATH . 'zone_sitemap.xml');
}
add_action('init', 'generate_custom_sitemap');
