<?php
/** Template Name: About Us */

get_header();
?>

<section class="py-32 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/family.png')">
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
                <div class="bg-blue-100 absolute inset-0 rounded-2xl mt-20 !mb-[-2.5rem] ml-10 shadow-[0_15px_15px_rgba(0,0,0,0.05)]"></div>
        </div>
        <div class="py-10">
            <span class="font-semibold text-[#044FC3]">WHAT WE DO</span>
            <h1 class="text-gray-800 mt-3 text-2xl md:text-4xl font-extrabold">High-Quality Connections Wherever, <span class="text-[#044FC3]">Anytime</span></h1>
            <p class=" text-gray-500 mt-4 text-lg">We’re here to help! Leave us a message, and our team will get back to you as soon as possible. We strive to provide quick and helpful responses to all inquiries. Your questions are important to us, and we’ll make sure you receive the support you need promptly.</p>
        </div>
    </div>

    
    <div class="container mx-auto px-4 grid md:grid-cols-2 grid-cols-1 gap-7 items-center">
        <div class="py-10 order-2 md:order-1">
            <h1 class="text-gray-800 mt-3 text-2xl md:text-4xl font-extrabold">How We Sustain Our <span class="text-[#044FC3]">Platform</span></h1>
            <p class="text-gray-500 mt-4 text-lg">
                In order to maintain an ad-free experience for you, we support our platform through affiliate
                partnerships with Internet and TV providers, as well as other links featured on our website. While this
                may occasionally influence the providers we showcase and their placement on our site, rest assured that it does not compromise the
                impartiality of the information we provide for user comparison.
            </p>
        </div>
        <div class="relative order-1 md:order-2">
            <img alt="diverse-team" loading="lazy" width="570" height="375" decoding="async" data-nimg="1"
                class="shadow-[0_15px_15px_rgba(0,0,0,0.05)] rounded-2xl z-10 relative"
                src="<?php echo get_template_directory_uri(); ?>/images/businesspeople.jpg" style="color: transparent;" />
                <div class="bg-blue-100 absolute inset-0 rounded-2xl mt-20 !mb-[-2.5rem] ml-10 shadow-[0_15px_15px_rgba(0,0,0,0.05)]"></div>
        </div>
    </div>



    <div class="container mx-auto px-4 grid md:grid-cols-2 grid-cols-1 gap-7 items-center">
        <div class="relative">
            <img alt="diverse-team" loading="lazy" width="570" height="375" decoding="async" data-nimg="1"
                class="shadow-[0_15px_15px_rgba(0,0,0,0.05)] rounded-2xl bg-white z-10 relative"
                src="<?php echo get_template_directory_uri(); ?>/images/diverse-team.jpg" style="color: transparent;" />
                <div class="bg-blue-100 absolute inset-0 rounded-2xl mt-20 !mb-[-2.5rem] ml-10 shadow-[0_15px_15px_rgba(0,0,0,0.05)]"></div>
        </div>
        <div class="py-10">
            <h1 class="text-gray-800 mt-3 text-2xl md:text-4xl font-extrabold">Our Provider Ranking <span class="text-[#044FC3]">Criteria</span></h1>
            <p class="text-gray-500 mt-4 text-lg">
                We strive to present you with a comprehensive array of choices, which is why we include all major TV
                providers on our website. Our reviews take into account factors such as availability, reliability,
                customer support, user feedback, and overall value for your money. We believe that these insights will empower you to make the
                optimal decision based on your specific needs.
            </p>
        </div>
    </div>
</section>


<section class="container mx-auto px-4 mb-20">
    <h1 class="text-gray-800 mt-3 text-2xl md:text-4xl font-extrabold text-center">Whats Our Client <span class="text-[#044FC3]">Say's</span></h1>
    <?php get_template_part( 'template-parts/client', 'reviews' ); ?>
</section>







<?php get_footer(); ?>