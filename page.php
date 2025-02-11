<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tp_theme
 */

get_header();
?>
<section class="py-24 bg-[#6041BB]">
    <div class="container mx-auto px-4">
        <h1 class="sm:text-5xl text-4xl leading-normal font-extrabold text-white text-center"><?php the_title()?></h1>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4">

		<?php
		while ( have_posts() ) :
			the_post();

			the_content();

		endwhile; // End of the loop.
		?>

</div>
</section>

<?php

get_footer();



