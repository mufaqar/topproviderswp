<?php
/** Template Name: Page-2 */

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
		endwhile; 
		?>
    </div>
</section>


<section class="py-16 bg-[#F3FAFF]">
    <div class="container mx-auto px-4 my-10 grid md:grid-cols-2 grid-cols-1 gap-5 items-center">
        <div class=""><h2 class="md:text-4xl text-2xl font-semibold leading-normal md:text-start text-center">Find Internet and TV Service Providers</h2></div>
        <div class="flex items-center md:justify-end justify-center [&amp;>div:nth-child(1)]:md:mr-0 [&amp;>div:nth-child(1)]:w-fit">
            <button class="text-[#96B93A] border hover:bg-[#96B93A] hover:text-white border-[#96B93A] p-3 px-8 rounded-lg">Change Location</button>
        </div>
    </div>
    </div>
</section>



                                            


<?php get_footer(); ?>
