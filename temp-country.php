<?php
/** Template Name: Country  */
 get_header();
?>



<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h2>
            </header>

            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>

            <footer class="entry-footer">
                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
            </footer>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?></p>
<?php endif; ?>


<?php get_footer();?>