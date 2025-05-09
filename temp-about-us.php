<?php
/** Template Name: About Us */

get_header();
?>

<section class="py-32 bg-cover bg-no-repeat bg-center"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/family.png')">
    <div class="container mx-auto px-4">
        <h1 class="sm:text-5xl text-4xl leading-normal font-semibold text-white text-center">About Us</h1>
    </div>
</section>

<section class="my-16 mb-24">
    <div class="container mx-auto px-4 grid md:grid-cols-2 grid-cols-1 gap-7 items-center">
        <div class="relative">
            <img alt="diverse-team" loading="lazy" width="570" height="375" decoding="async" data-nimg="1"
                class="shadow-[0_15px_15px_rgba(0,0,0,0.05)] rounded-2xl z-10 relative"
                src="<?php echo get_template_directory_uri(); ?>/images/diverse-team.jpg" style="color: transparent;" />
            <div
                class="bg-blue-100 absolute inset-0 rounded-2xl mt-20 !mb-[-2.5rem] ml-10 shadow-[0_15px_15px_rgba(0,0,0,0.05)]">
            </div>
        </div>
        <div class="py-10">
            <span class="font-semibold text-[#044FC3]">WHAT WE DO</span>
            <h1 class="text-gray-800 mt-3 text-2xl md:text-4xl font-extrabold">Seamless Connectivity Across<span
                    class="text-[#044FC3]"> the UK</span></h1>
            <p class=" text-gray-500 mt-4 text-lg">We’re here to help! Leave us a message, and our UK-based team will
                respond promptly.
                We pride ourselves on fast, reliable support for all inquiries. Your questions matter, and
                we’re dedicated to providing the assistance you need without delay
            </p>
        </div>
    </div>


    <div class="container mx-auto px-4 grid md:grid-cols-2 grid-cols-1 gap-7 items-center">
        <div class="py-10 order-2 md:order-1">
            <h1 class="text-gray-800 mt-3 text-2xl md:text-4xl font-extrabold">How We Keep Our Service <span
                    class="text-[#044FC3]">Free</span></h1>
            <p class="text-gray-500 mt-4 text-lg">
                To ensure an ad-free experience, we partner with leading UK broadband, TV, and
                streaming providers through affiliate links. While this may influence featured providers,
                it never affects our impartial comparisons. Transparency and fairness remain our top
                priorities.
            </p>
        </div>
        <div class="relative order-1 md:order-2">
            <img alt="diverse-team" loading="lazy" width="570" height="375" decoding="async" data-nimg="1"
                class="shadow-[0_15px_15px_rgba(0,0,0,0.05)] rounded-2xl z-10 relative"
                src="<?php echo get_template_directory_uri(); ?>/images/businesspeople.jpg"
                style="color: transparent;" />
            <div
                class="bg-blue-100 absolute inset-0 rounded-2xl mt-20 !mb-[-2.5rem] ml-10 shadow-[0_15px_15px_rgba(0,0,0,0.05)]">
            </div>
        </div>
    </div>



    <div class="container mx-auto px-4 grid md:grid-cols-2 grid-cols-1 gap-7 items-center">
        <div class="relative">
            <img alt="diverse-team" loading="lazy" width="570" height="375" decoding="async" data-nimg="1"
                class="shadow-[0_15px_15px_rgba(0,0,0,0.05)] rounded-2xl bg-white z-10 relative"
                src="<?php echo get_template_directory_uri(); ?>/images/diverse-team.jpg" style="color: transparent;" />
            <div
                class="bg-blue-100 absolute inset-0 rounded-2xl mt-20 !mb-[-2.5rem] ml-10 shadow-[0_15px_15px_rgba(0,0,0,0.05)]">
            </div>
        </div>
        <div class="py-10">
            <h1 class="text-gray-800 mt-3 text-2xl md:text-4xl font-extrabold">How We Rank <span
                    class="text-[#044FC3]">Providers</span></h1>
            <p class="text-gray-500 mt-4 text-lg">
                We evaluate all major UK TV and broadband services based on coverage, reliability,
                customer service, user feedback, and affordability. Our goal is to help you find the best
                fit for your needs—whether at home or for your business.
            </p>
        </div>
    </div>
</section>


<section class="container mx-auto px-4 mb-20">
    <h1 class="text-gray-800 mt-3 text-2xl md:text-4xl font-extrabold text-center">Whats Our Client <span
            class="text-[#044FC3]">Say's</span></h1>
    <?php get_template_part('template-parts/client', 'reviews'); ?>
</section>







<?php get_footer(); ?>