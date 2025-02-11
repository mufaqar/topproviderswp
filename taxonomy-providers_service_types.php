<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tp_theme
 */

get_header();


?>

<main class="min-h-[40vh] flex items-center bg-[#6041BB]">
    <div class="container mx-auto px-4" style="padding-top: 16px;">
        <div class="flex justify-center flex-col items-center">
            <h1 class="sm:text-5xl text-2xl text-white font-bold text-center max-w-[850px] mx-auto capitalize md:leading-10">
               Find Your best provider in <span class="text-[#96B93A]">your area.</span>
            </h1>
            <p class="text-xl text-center text-white font-[Roboto] my-5">Enter your zip so we can find the best Internet Providers in your area:</p>
            <?php get_template_part('template-parts/search', 'form'); ?>
        </div>
    </div>
</main>

<section class="py-16">
    <div class="max-w-[1110px] w-full mx-auto px-4 grid grid-cols-1 sm:!grid-cols-2 gap-8 md:!grid-cols-4 text-center">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
				<div class="flex justify-center rounded-xl border border-gray-100 p-3 shadow-xl transition hover:border-[#6041BB]/10 hover:shadow-[#6041BB]/10  ">
					<a href="<?php the_permalink() ?>" class="flex flex-col justify-center items-center">
						<figure class="max-w-[144px]">
							<?php the_post_thumbnail('medium', ['class' => 'mx-auto rounded-lg']); ?>
						</figure>
						<h2 class="mt-4 text-lg text-center"><?php the_title() ?></h2>
					</a>
				</div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
</section>


<?php

get_footer();
