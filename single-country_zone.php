<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tp_theme
 */

get_header();
?>


<section class="py-14 flex items-center bg-gray-50"> 
    <div class="container mx-auto px-4">
        <div class="flex justify-center flex-col items-center">
            <h1 class="sm:text-5xl text-2xl font-bold text-center max-w-[850px] mx-auto capitalize leading-10">
                Internet Providers in  <span class="text-[#96B93A]"><?php the_title()?></span>
            </h1>
          
        </div>
    </div>
</section>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>

        </article>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?></p>
<?php endif; ?>





<?php

get_footer();
