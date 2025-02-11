<?php

function cptui_register_my_cpts() {

    /**
     * Post Type: Zones.
     */
    $labels = [
        "name" => esc_html__( "Zones", "custom-post-type-ui" ),
        "singular_name" => esc_html__( "Zone", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => esc_html__( "Zones", "custom-post-type-ui" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "rewrite" => [ "slug" => "area_zone", "with_front" => true ],
        "show_in_graphql" => true,
        "graphql_single_name" => "Zone",
        "graphql_plural_name" => "Zones",
    ];

    register_post_type( "area_zone", $args );

    /**
     * Post Type: Providers.
     */
    $labels = [
        "name" => esc_html__( "Providers", "custom-post-type-ui" ),
        "singular_name" => esc_html__( "Provider", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => esc_html__( "Providers", "custom-post-type-ui" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "rewrite" => [ "slug" => "providers", "with_front" => true ],
        "show_in_graphql" => true,
        "graphql_single_name" => "SingleProvider",
        "graphql_plural_name" => "AllProviders",
    ];

    register_post_type( "providers", $args );

    /**
     * Post Type: Country Zones.
     */
    $labels = [
        "name" => esc_html__( "Country Zones", "custom-post-type-ui" ),
        "singular_name" => esc_html__( "Country Zone", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => esc_html__( "Country Zones", "custom-post-type-ui" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "rewrite" => [ "slug" => "country", "with_front" => true ],
        "show_in_graphql" => true,
        "graphql_single_name" => "CountryZone",
        "graphql_plural_name" => "CountryZones",
    ];

    register_post_type( "country_zone", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


function cptui_register_my_taxes_providers_types() {

	/**
	 * Taxonomy: Types.
	 */

	$labels = [
		"name" => esc_html__( "Types", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Type", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "Types", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'providers_types', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "providers_types",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => true,
		"graphql_single_name" => "ProviderType",
		"graphql_plural_name" => "ProviderTypes",
	];
	register_taxonomy( "providers_types", [ "providers" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_providers_types' );


function cptui_register_my_taxes_providers_service_types() {

	/**
	 * Taxonomy: Services Type.
	 */

	$labels = [
		"name" => esc_html__( "Services", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Service", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "Services", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'providers_service_types', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "providers_service_types",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => true,
		"graphql_single_name" => "ServiceType",
		"graphql_plural_name" => "ServiceTypes",
	];
	register_taxonomy( "providers_service_types", [ "providers" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_providers_service_types' );

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_cpts_area_zone() {

	/**
	 * Post Type: Zones.
	 */

	$labels = [
		"name" => esc_html__( "Zones", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Zone", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Zones", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "area_zone", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => true,
		"graphql_single_name" => "Zone",
		"graphql_plural_name" => "Zones",
	];

	register_post_type( "area_zone", $args );
}

add_action( 'init', 'cptui_register_my_cpts_area_zone' );


function cptui_register_my_taxes() {

	/**
	 * Taxonomy: City.
	 */

	$labels = [
		"name" => esc_html__( "City", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "City", "custom-post-type-ui" ),
	];	
	$args = [
		"label" => esc_html__( "City", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'zone_city', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "zone_city",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => true,
		"graphql_single_name" => "City",
		"graphql_plural_name" => "Cities",
	];
	register_taxonomy( "zone_city", [ "area_zone" ], $args );	

	/**
	 * Taxonomy: State.
	 */

	$labels = [
		"name" => esc_html__( "States Code", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "State Code", "custom-post-type-ui" ),
	];
	
	$args = [
		"label" => esc_html__( "State", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'zone_state', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "zone_state",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => true,
		"graphql_single_name" => "State",
		"graphql_plural_name" => "States",
	];
	register_taxonomy( "zone_state", [ "area_zone" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

function cptui_register_my_taxes_zone_name() {

	/**
	 * Taxonomy: States.
	 */

	$labels = [
		"name" => esc_html__( "State Names", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "State Name", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "States", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'zone_name', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "zone_name",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => true,
		"graphql_single_name" => "StateName",
		"graphql_plural_name" => "StatesNames",
	];
	register_taxonomy( "zone_name", [ "area_zone" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_zone_name' );
/**
	 * Taxonomy: County.
	 */

	 $labels = [
		"name" => esc_html__( "County", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "County", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "County", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'zone_county', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "zone_county",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => true,
		"graphql_single_name" => "County",
		"graphql_plural_name" => "Counties",
	];
	register_taxonomy( "zone_county", [ "area_zone" ], $args );