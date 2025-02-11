<?php


add_filter('wpseo_sitemap_index', function ($sitemap_index) {
    $base_url = 'https://topproviders.net/sitemaps/';
    $types =  ['internet', 'tv', 'internet-tv'];
    $number_of_sitemaps = 2; // Generate 6 sitemaps for each type
    $prefixes = ['zipcode', 'cities']; // Define prefixes to loop through

    // Get the current date in the specified format
    $current_date = gmdate('Y-m-d H:i +0 0:00');

    // Add the static sitemap with modification date at the top
    $static_sitemap_url = $base_url . 'states.xml';
    $sitemap_index .= '<sitemap><loc>' . esc_url($static_sitemap_url) . '</loc><lastmod>' . esc_html($current_date) . '</lastmod></sitemap>';

    // Add dynamic sitemaps
    foreach ($prefixes as $prefix) {
        foreach ($types as $type) {
            for ($i = 1; $i <= $number_of_sitemaps; $i++) {
                $sitemap_url = $base_url . $prefix . '_' . $type . '-' . $i . '.xml';
                $sitemap_index .= '<sitemap><loc>' . esc_url($sitemap_url) . '</loc><lastmod>' . esc_html($current_date) . '</lastmod></sitemap>';
            }
        }
    }

    return $sitemap_index;
});


//SiteMapByState(); Sitemap for States
function SiteMapByState() {
    $sitemap_folder = ABSPATH . 'sitemaps';
    $sitemap_file = $sitemap_folder . '/states.xml';
    if (!file_exists($sitemap_folder)) {
        mkdir($sitemap_folder, 0755, true);
    }
    $file = fopen($sitemap_file, 'w');
    // XML header
    $xml_content = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
    $xml_content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
    // Types to iterate
    $types =  ['internet', 'tv', 'internet-tv'] ;  
    foreach ($types as $type) {
     
        $terms = get_terms(array(
            'taxonomy'   => 'zone_state',
            'hide_empty' => false,
            'posts_per_page' => -1,
        ));
        if (!empty($terms) && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                $url = home_url($type . '/' . $term->slug);
                if (strpos($url, 'www.') === false) {
                    $url = str_replace('://', '://www.', $url);
                }
                $xml_content .= '<url>' . PHP_EOL;
                $xml_content .= '<loc>' . esc_url($url) . '</loc>' . PHP_EOL;
                // $xml_content .= '<lastmod>' . wp_date('c') . '</lastmod>' . PHP_EOL; // Using wp_date for current date in ISO 8601 format
                // $xml_content .= '<priority>0.8</priority>' . PHP_EOL; // Setting priority to 0.8
                $xml_content .= '</url>' . PHP_EOL;
            }
        }
    }
    $xml_content .= '</urlset>' . PHP_EOL;
    fwrite($file, $xml_content);
    fclose($file);
}


// SiteMapByZipCode(); Sitemap for ZipCode
function SiteMapByZipCode() {
    set_time_limit(0);
    $services =  ['internet', 'tv', 'internet-tv'];
    $sitemap_folder = ABSPATH . 'sitemaps';
    $posts_per_file = 30000;

    if (!file_exists($sitemap_folder)) {
        mkdir($sitemap_folder, 0755, true);
    }

    foreach ($services as $service) {
        $file_index = 1;
        $offset = 0;
        
        while (true) {
            $sitemap_file = "{$sitemap_folder}/zipcode_{$service}-{$file_index}.xml";
            $file = fopen($sitemap_file, 'w');
            $xml_content = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
            $xml_content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

            $args = array(
                'post_type'      => 'area_zone',
                'posts_per_page' => $posts_per_file,
                'offset'         => $offset,
                'order'          => 'DESC',
            );

            $providers_query = new WP_Query($args);

            if (!$providers_query->have_posts()) {
                fclose($file);
                break;
            }

            while ($providers_query->have_posts()) {
                $providers_query->the_post();
                $post_slug = get_post_field('post_name', get_the_ID());
                $zone_city_terms = get_the_terms(get_the_ID(), 'zone_city');
                $zone_state_terms = get_the_terms(get_the_ID(), 'zone_state');
                $zone_city = $zone_city_terms && !is_wp_error($zone_city_terms) ? $zone_city_terms[0]->slug : '';
                $zone_state = $zone_state_terms && !is_wp_error($zone_state_terms) ? $zone_state_terms[0]->slug : '';

                $link = home_url("/{$service}/{$zone_state}/{$zone_city}/{$post_slug}");
                if (strpos($link, 'www.') === false) {
                    $link = str_replace('://', '://www.', $link);
                }

                $xml_content .= "<url>" . PHP_EOL;
                $xml_content .= "<loc>" . esc_url($link) . "</loc>" . PHP_EOL;
                // $xml_content .= "<lastmod>" . wp_date('c') . "</lastmod>" . PHP_EOL;
                // $xml_content .= "<changefreq>monthly</changefreq>" . PHP_EOL;
                // $xml_content .= "<priority>0.8</priority>" . PHP_EOL;
                $xml_content .= "</url>" . PHP_EOL;
            }

            wp_reset_postdata();
            $xml_content .= '</urlset>' . PHP_EOL;

            fwrite($file, $xml_content);
            fclose($file);
            echo 'Sitemap for ' . esc_html($service) . " generated and saved as " . esc_html($sitemap_file) . '<br>';

            $offset += $posts_per_file;
            $file_index++;
        }
    }
}


function SiteMapByCity() {
    set_time_limit(0);
    $services =  ['internet', 'tv', 'internet-tv'];
    $sitemap_folder = ABSPATH . 'sitemaps';
    $posts_per_file = 30000;
    $total_records = 0; // Initialize counter for total records

    if (!file_exists($sitemap_folder)) {
        mkdir($sitemap_folder, 0755, true);
    }

    foreach ($services as $service) {
        $file_index = 1;
        $offset = 0;
        
        while (true) {
            $sitemap_file = "{$sitemap_folder}/cities_{$service}-{$file_index}.xml";
            $file = fopen($sitemap_file, 'w');
            $xml_content = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
            $xml_content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

            $args = array(
                'post_type'      => 'area_zone',
                'posts_per_page' => $posts_per_file,
                'offset'         => $offset,
                'order'          => 'DESC',
            );

            $providers_query = new WP_Query($args);
            $displayed_cities = array();

            if (!$providers_query->have_posts()) {
                fclose($file);
                break;
            }

            while ($providers_query->have_posts()) {
                $providers_query->the_post();
                $zone_city_terms = get_the_terms(get_the_ID(), 'zone_city');
                $zone_state_terms = get_the_terms(get_the_ID(), 'zone_state');
                $zone_city = $zone_city_terms && !is_wp_error($zone_city_terms) ? $zone_city_terms[0]->slug : '';
                $zone_state = $zone_state_terms && !is_wp_error($zone_state_terms) ? $zone_state_terms[0]->slug : '';

                // Unique city-state key
                $city_state_key = $zone_city . '|' . $zone_state;

                if (!in_array($city_state_key, $displayed_cities) && $zone_city && $zone_state) {
                    $displayed_cities[] = $city_state_key;

                    $link = home_url("/{$service}/{$zone_state}/{$zone_city}/");
                    if (strpos($link, 'www.') === false) {
                        $link = str_replace('://', '://www.', $link);
                    }

                    $xml_content .= "<url>" . PHP_EOL;
                    $xml_content .= "<loc>" . esc_url($link) . "</loc>" . PHP_EOL;
                    // $xml_content .= "<lastmod>" . wp_date('c') . "</lastmod>" . PHP_EOL;
                    // $xml_content .= "<changefreq>monthly</changefreq>" . PHP_EOL;
                    // $xml_content .= "<priority>0.8</priority>" . PHP_EOL;
                    $xml_content .= "</url>" . PHP_EOL;

                    $total_records++; // Increment the total records count
                }
            }

            wp_reset_postdata();
            $xml_content .= '</urlset>' . PHP_EOL;

            fwrite($file, $xml_content);
            fclose($file);
            echo 'Sitemap for ' . esc_html($service) . " generated and saved as " . esc_html($sitemap_file) . '<br>';

            $offset += $posts_per_file;
            $file_index++;
        }
    }

    echo "Total records added: " . $total_records . "<br>";
}


