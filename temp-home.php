<?php 

/** Template Name: FrontPage */
 get_header();

 $providers = [
  "cox" => "Cox.webp",
  "viasat" => "Cox.webp",
  "att" => "Cox.webp",
  "spectrum" => "Cox.webp",
  "dish" => "Cox.webp",
  "hughesNet" => "Cox.webp",
  "frontier" => "Cox.webp",
  "centurylink" => "Cox.webp",
  "earthlink" => "Cox.webp",
  "windstream" => "Cox.webp",
  "wow" => "Cox.webp",
  "xfinity" => "Cox.webp"
];

$query = new WP_Query(array(
  'posts_per_page' => 3,
  'post_type'      => 'post',
  'orderby'        => 'date',
  'order'          => 'DESC',
));

$argsForProvider = array(
    'post_type'      => 'providers',
    'posts_per_page' => 12,
    'order'          => 'DESC', 
    'orderby'        => 'date'
);

$providers_query = new WP_Query($argsForProvider);

?>

<!-- Hero Section -->
<section class="xl:min-h-[calc(100vh-245px)] xl:h-[calc(100vh-330px)] flex items-center bg-cover bg-center bg-no-repeat bg-blend-overlay bg-black/50" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/main.jpg');">
  <div class="container w-full mx-auto px-4 gap-7 items-center">
    <div class="py-10">
      <h1 class="text-3xl md:text-5xl text-left md:leading-tight font-semibold text-white">Find the Best  <span class="text-[#96B93A]">TV, Internet, <br/> Landline Providers </span> in Your Area.</h1>
      <p class="text-[22px] text-left font-normal text-white my-5">Compare Top Providers, plans and deals by ZIP code.</p>
      <ul class="type-list text-white ml-12 flex flex-col gap-2 text-lg">
        <li class="relative">Home Broadband</li>
        <li class="relative">Satellite TV</li>
        <li class="relative">Cell Phone Connection</li>
      </ul>
    </div>
    <div class=""></div>
  </div>
</section>

<!-- // Hero Bottom -->
<section id="search" class="py-12 w-full bg-cover bg-no-repeat"  style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo get_template_directory_uri(); ?>/images/main-bottom.webp');">
  <div class="container w-full px-4 mx-auto items-center flex flex-col md:flex-row gap-6 md:gap-10">
    <h2 class="text-3xl md:text-5xl text-white text-left md:leading-tight font-bold">Search and Find Your Providers</h2>
    <div class="!max-w-[712px] w-full ml-auto">
      <?php get_template_part('template-parts/search', 'form'); ?>
    </div>
  </div>
</section>

<!-- How Its Work -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="mb-10 flex md:flex-row flex-col gap-7 items-center">
            <div class="md:w-[65%] w-full">
                <h2 class="text-3xl md:text-5xl text-left md:leading-tight font-bold mb-4">How does it Work?</h2>
                <p class="text-lg font-normal text-[#4E4E4E]">
                    At Top Providers, we do the research, so you don't have to. We've reviewed the top internet and TV service providers and found the best plans and deals. Let us help you find the perfect package to fit your needs and
                    budget. Shop smarter with Top Providers!
                </p>
            </div>
            <div class="md:w-[45%] w-full">
                <img
                    alt="how-work"
                    loading="lazy"
                    width="460"
                    height="303"
                    decoding="async"
                    data-nimg="1"
                    style="color: transparent;"
                    src="<?php echo get_template_directory_uri(); ?>/images/how-work.webp"
                />
            </div>
        </div>
        <div class="relative grid gap-7 lg:grid-cols-4 md:grid-cols-2 mb-10">
            <div class="w-full py-7 px-4 transform hover:-translate-y-3 transition-all duration-300 ease-in-out bg-[#E7E2FE] border ">
                <div class="mt-5">
                    <span class="block rounded-full w-fit mx-auto p-4 bg-[#fff]">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-4xl text-[#6041BB] mx-auto" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </span>
                    <h2 class="mt-5 text-center text-base font-bold text-[#071F37]">Search</h2>
                    <div><p class="px-5 mt-5 text-base text-center text-[#464646]">Find providers in your area with a quick zip code search.</p></div>
                </div>
            </div>
            <div class="w-full py-7 px-4 transform hover:-translate-y-3 transition-all duration-300 ease-in-out bg-[#fbf1e2] border ">
                <div class="mt-5">
                    <span class="block rounded-full w-fit mx-auto p-4 bg-[#fff]">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="text-4xl text-[#6041BB] mx-auto" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.01 2c-1.93 0-3.5 1.57-3.5 3.5 0 1.58 1.06 2.903 2.5 3.337v7.16c-.001.179.027 1.781 1.174 2.931C6.892 19.64 7.84 20 9 20v2l4-3-4-3v2c-1.823 0-1.984-1.534-1.99-2V8.837c1.44-.434 2.5-1.757 2.5-3.337 0-1.93-1.571-3.5-3.5-3.5zm0 5c-.827 0-1.5-.673-1.5-1.5S5.183 4 6.01 4s1.5.673 1.5 1.5S6.837 7 6.01 7zm13 8.163V7.997C19.005 6.391 17.933 4 15 4V2l-4 3 4 3V6c1.829 0 2.001 1.539 2.01 2v7.163c-1.44.434-2.5 1.757-2.5 3.337 0 1.93 1.57 3.5 3.5 3.5s3.5-1.57 3.5-3.5c0-1.58-1.06-2.903-2.5-3.337zm-1 4.837c-.827 0-1.5-.673-1.5-1.5s.673-1.5 1.5-1.5 1.5.673 1.5 1.5-.673 1.5-1.5 1.5z"
                            ></path>
                        </svg>
                    </span>
                    <h2 class="mt-5 text-center text-base font-bold text-[#071F37]"><a href="<?php echo home_url('comparison'); ?>">Compare Top Providers</a></h2>
                    <div><p class="px-5 mt-5 text-base text-center text-[#464646]">Easily compare dozens of top TV and internet providers, like AT&amp;T and Xfinity, to find the best high-speed options in minutes.</p></div>
                </div>
            </div>
            <div class="w-full py-7 px-4 transform hover:-translate-y-3 transition-all duration-300 ease-in-out bg-[#ffdbce] border ">
                <div class="mt-5">
                    <span class="block rounded-full w-fit mx-auto p-4 bg-[#fff]">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-4xl text-[#6041BB] mx-auto" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                            ></path>
                        </svg>
                    </span>
                    <h2 class="mt-5 text-center text-base font-bold text-[#071F37]">Compare Bundle Deals</h2>
                    <div><p class="px-5 mt-5 text-base text-center text-[#464646]">Discover seamless internet and TV bundles with our user-friendly zip code search. Compare the best local deals all in one place.</p></div>
                </div>
            </div>
            <div class="w-full py-7 px-4 transform hover:-translate-y-3 transition-all duration-300 ease-in-out bg-[#e8ebe4] border ">
                <div class="mt-5">
                    <span class="block rounded-full w-fit mx-auto p-4 bg-[#fff]">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="text-4xl text-[#6041BB] mx-auto" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.39.39 0 0 0-.029-.518z"
                            ></path>
                            <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.95 11.95 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0"></path>
                        </svg>
                    </span>
                    <h2 class="mt-5 text-center text-base font-bold text-[#071F37]">Calculate Your Speed</h2>
                    <div><p class="px-5 mt-5 text-base text-center text-[#464646]">Optimize your expenses – match your internet speed to your lifestyle with our Internet Speed Quiz. Pay only for what you really need!</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Compare Top Internet and TV Service Providers -->
<section class="pb-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-5xl text-center md:leading-tight font-bold max-w-[900px] mx-auto w-full mb-10">Why Compare Top Internet and TV Service Providers</h2>
        <div class="grid md:grid-cols-3 grid-cols-1 gap-7 items-center">
            <div class="grid gap-8">
                <div class="w-full py-7 px-4">
                    <div class="flex items-start gap-4">
                        <span class="block rounded-full w-fit p-3 bg-[#e7e2fe]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-4xl text-[#6041BB] mx-auto" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                <path d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                            </svg>
                        </span>
                        <div>
                            <h2 class="md:text-2xl text-xl font-bold text-[#071F37] mb-2">Save Time</h2>
                            <p class="text-base text-[#34344B]">Using our zip code search tool, quickly uncover top providers in your area. Easily filter plans for internet, TV, bundles, and more.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full py-7 px-4">
                    <div class="flex items-start gap-4">
                        <span class="block rounded-full w-fit p-3 bg-[#fbf1e2]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="text-4xl text-[#6041BB] mx-auto" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M488 192H336v56c0 39.7-32.3 72-72 72s-72-32.3-72-72V126.4l-64.9 39C107.8 176.9 96 197.8 96 220.2v47.3l-80 46.2C.7 322.5-4.6 342.1 4.3 357.4l80 138.6c8.8 15.3 28.4 20.5 43.7 11.7L231.4 448H368c35.3 0 64-28.7 64-64h16c17.7 0 32-14.3 32-32v-64h8c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24zm147.7-37.4L555.7 16C546.9.7 527.3-4.5 512 4.3L408.6 64H306.4c-12 0-23.7 3.4-33.9 9.7L239 94.6c-9.4 5.8-15 16.1-15 27.1V248c0 22.1 17.9 40 40 40s40-17.9 40-40v-88h184c30.9 0 56 25.1 56 56v28.5l80-46.2c15.3-8.9 20.5-28.4 11.7-43.7z"
                                ></path>
                            </svg>
                        </span>
                        <div>
                            <h2 class="md:text-2xl text-xl font-bold text-[#071F37] mb-2">Helpful Tools</h2>
                            <p class="text-base text-[#34344B]">Discover helpful tips and expert advice in our Resource Center. It's designed to improve your experience and make the most of our services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-8">
                <img
                    alt="save-money"
                    loading="lazy"
                    width="300"
                    height="272"
                    decoding="async"
                    data-nimg="1"
                    class="mx-auto"
                    style="color: transparent;"
                    src="<?php echo get_template_directory_uri(); ?>/images/1.webp"
                />
                <img
                    alt="helping-tools"
                    loading="lazy"
                    width="300"
                    height="272"
                    decoding="async"
                    data-nimg="1"
                    class="mx-auto"
                    style="color: transparent;"
                    src="<?php echo get_template_directory_uri(); ?>/images/2.webp"
                />
            </div>
            <div class="grid gap-8">
                <div class="w-full py-7 px-4">
                    <div class="flex items-start gap-4">
                        <span class="block rounded-full w-fit p-3 bg-[#ffdbce]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-4xl text-[#6041BB] mx-auto" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M327.027 65.816L229.79 128.23l9.856 5.397 86.51-55.53 146.735 83.116-84.165 54.023 4.1 2.244v6.848l65.923-42.316 13.836 7.838-79.76 51.195v11.723l64.633-41.487 15.127 8.57-79.76 51.195v11.723l64.633-41.487 15.127 8.57-79.76 51.195v11.723l100.033-64.21-24.828-14.062 24.827-15.937-24.828-14.064 24.827-15.937-23.537-13.333 23.842-15.305-166.135-94.106zm31.067 44.74c-21.038 10.556-49.06 12.342-68.79 4.383l-38.57 24.757 126.903 69.47 36.582-23.48c-14.41-11.376-13.21-28.35 2.942-41.67l-59.068-33.46zM227.504 147.5l-70.688 46.094 135.61 78.066 1.33-.85c2.5-1.61 6.03-3.89 10.242-6.613 8.42-5.443 19.563-12.66 30.674-19.86 16.002-10.37 24.248-15.72 31.916-20.694L227.504 147.5zm115.467 1.17a8.583 14.437 82.068 0 1 .003 0 8.583 14.437 82.068 0 1 8.32 1.945 8.583 14.437 82.068 0 1-.87 12.282 8.583 14.437 82.068 0 1-20.273 1.29 8.583 14.437 82.068 0 1 .87-12.28 8.583 14.437 82.068 0 1 11.95-3.237zm-218.423 47.115L19.143 263.44l23.537 13.333-23.842 15.305 24.828 14.063-24.828 15.938 24.828 14.063-24.828 15.938 166.135 94.106L285.277 381.8V370.08l-99.433 63.824L39.11 350.787l14.255-9.15 131.608 74.547L285.277 351.8V340.08l-99.433 63.824L39.11 320.787l14.255-9.15 131.608 74.547L285.277 321.8V310.08l-99.433 63.824L39.11 290.787l13.27-8.52 132.9 75.28 99.997-64.188v-5.05l-5.48-3.154-93.65 60.11-146.73-83.116 94.76-60.824-9.63-5.543zm20.46 11.78l-46.92 30.115c14.41 11.374 13.21 28.348-2.942 41.67l59.068 33.46c21.037-10.557 49.057-12.342 68.787-4.384l45.965-29.504-123.96-71.358zm229.817 32.19c-8.044 5.217-15.138 9.822-30.363 19.688-11.112 7.203-22.258 14.42-30.69 19.873-4.217 2.725-7.755 5.01-10.278 6.632-.09.06-.127.08-.215.137v85.924l71.547-48.088v-84.166zm-200.99 17.48a8.583 14.437 82.068 0 1 8.32 1.947 8.583 14.437 82.068 0 1-.87 12.28 8.583 14.437 82.068 0 1-20.27 1.29 8.583 14.437 82.068 0 1 .87-12.28 8.583 14.437 82.068 0 1 11.95-3.236z"
                                ></path>
                            </svg>
                        </span>
                        <div>
                            <h2 class="md:text-2xl text-xl font-bold text-[#071F37] mb-2">Save Money</h2>
                            <p class="text-base text-[#34344B]">Easily compare real-time prices and find the best deals that fit your budget and digital requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full py-7 px-4">
                    <div class="flex items-start gap-4">
                        <span class="block rounded-full w-fit p-3 bg-[#e8ebe4]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="text-4xl text-[#6041BB] mx-auto" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M219.3 .5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9V160c0 70.7-57.3 128-128 128s-128-57.3-128-128V102.9L48 93.3v65.1l15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9H16c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4V86.6C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z"
                                ></path>
                            </svg>
                        </span>
                        <div>
                            <h2 class="md:text-2xl text-xl font-bold text-[#071F37] mb-2">Get Expert Advice</h2>
                            <p class="text-base text-[#34344B]">Count on our team of experts, who evaluate providers based on factors like performance and price. We will recommend the best options available in your area.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/usa','statemap'); ?>

<section class="py-16">
    <div class="container mx-auto py-16 px-6 flex md:flex-row flex-col items-center gap-10 md:py-10 md:px-16 rounded-tl-[90px] rounded-br-[90px] rounded-tr-[3px] rounded-bl-[3px]">
        <div class="md:w-[44%] w-full">
            <h2 class="text-3xl md:text-5xl text-left md:leading-tight font-bold text-[#262626] mb-5">
                Review <br />
                Top Providers
            </h2>
            <p class="text-lg font-normal text-[#4E4E4E] mb-8">
                Let us help you navigate your options. Compare the leading providers in your area and find high-speed choices for internet, TV, or bundled services tailored to your needs.
            </p>
            <a class="text-lg font-medium AxiformaRegular bg-[#96B93A] text-white py-3 px-12 rounded-[3px]" href="/providers">View All</a>
        </div>
        <div class="md:w-[56%] w-full grid md:grid-cols-4 grid-cols-2 gap-4 [&>*:nth-child(5)]:md:ml-14 [&>*:nth-child(6)]:md:ml-14 [&>*:nth-child(7)]:md:ml-14 [&>*:nth-child(8)]:md:ml-14">
            <?php
            if ($providers_query->have_posts()) :
                while ($providers_query->have_posts()) : $providers_query->the_post();
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $provider_title = get_the_title();
                    ?>
                    <a class="w-[130px] mx-auto h-[130px] rounded-full flex items-center justify-center group border" 
                        href="<?php the_permalink(); ?>">
                        <div>
                            <img
                                alt="<?php echo esc_attr($provider_title); ?>"
                                width="93"
                                height="50"
                                class="group-hover:scale-105 mx-auto"
                                src="<?php echo esc_url($thumbnail_url); ?>"
                            />
                        </div>
                    </a>
                    <?php
                endwhile;
            else :
                echo '<p>No providers found.</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>


<!-- Why Choose Top Providers? -->
<section class="py-16 bg-[#F3FAFF]">
    <div class="container mx-auto px-4">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-center md:text-4xl text-2xl font-bold">Why Choose Top Provider?</h2>
            <p class="text-xl font-normal my-4">
                Finding TV and Internet Service Providers is complex and time consuming but Top Providers make the search process so easy and simple that saves you time and money. Here’s why you should shop with us.
            </p>
        </div>

        <div class="relative grid gap-14 lg:gap-7 lg:grid-cols-4 md:grid-cols-2 mt-20">
            <div class="w-full py-7 px-4 relative transform hover:-translate-y-3 transition-all duration-300 ease-in-out bg-[#E7E2FE] border ">
                <div class="mt-5">
                    <span class="block absolute border border-[#E7E2FE] -top-10 left-1/2 -translate-x-1/2 rounded-full w-fit mx-auto p-4 bg-[#fff]">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="h-12 w-12 text-[#6041BB]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8V128h-.7l-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48V352h28.2l91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123zM16 128c-8.8 0-16 7.2-16 16V352c0 17.7 14.3 32 32 32H64c17.7 0 32-14.3 32-32V128H16zM48 320a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM544 128V352c0 17.7 14.3 32 32 32h32c17.7 0 32-14.3 32-32V144c0-8.8-7.2-16-16-16H544zm32 208a16 16 0 1 1 32 0 16 16 0 1 1 -32 0z"
                            ></path>
                        </svg>
                    </span>
                    <h2 class="mt-5 text-center text-base font-bold text-[#071F37] pt-4">Convenience</h2>
                    <div><p class="px-5 mt-5 text-base text-center text-[#464646]">Top Providers can simplify the task of setting up your Internet or TV service. Instead of searching individual provider sites do all your research, compare plans and order service all on one site.                    </p></div>
                </div>
            </div>
            <div class="w-full py-7 relative px-4 transform hover:-translate-y-3 transition-all duration-300 ease-in-out bg-[#fbf1e2] border ">
                <div class="mt-5">
                <span class="block absolute border border-[#E7E2FE] -top-10 left-1/2 -translate-x-1/2 rounded-full w-fit mx-auto p-4 bg-[#fff]">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-12 w-12 text-[#6041BB]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"
                            ></path>
                        </svg>
                    </span>
                <h2 class="mt-5 text-center text-base font-bold text-[#071F37] pt-4"><a href="<?php echo home_url('comparison'); ?>">Time Savings                    </a></h2>
                <div><p class="px-5 mt-5 text-base text-center text-[#464646]">Top Providers can help you save time. Enter your zip code once and compare all options available at your address.</p></div>
                </div>
            </div>
            <div class="w-full py-7 relative px-4 transform hover:-translate-y-3 transition-all duration-300 ease-in-out bg-[#ffdbce] border ">
                <div class="mt-5">
                    <span class="block absolute border border-[#E7E2FE] -top-10 left-1/2 -translate-x-1/2 rounded-full w-fit mx-auto p-4 bg-[#fff]">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="h-12 w-12 text-[#6041BB]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm64 320H64V320c35.3 0 64 28.7 64 64zM64 192V128h64c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"
                            ></path>
                        </svg>
                    </span>
                    <h2 class="mt-5 text-center text-base font-bold text-[#071F37] pt-4">Cost Savings</h2>
                    <div><p class="px-5 mt-5 text-base text-center text-[#464646]">Instead of tracking offers from multiple provider websites, compare current prices in real time at Top Providers and get the best deal that fit your budget.</p></div>
                </div>
            </div>
            <div class="w-full py-7 px-4 transform relative hover:-translate-y-3 transition-all duration-300 ease-in-out bg-[#e8ebe4] border ">
                <div class="mt-5">
                    <span class="block absolute border border-[#E7E2FE] -top-10 left-1/2 -translate-x-1/2 rounded-full w-fit mx-auto p-4 bg-[#fff]">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="h-12 w-12 text-[#6041BB]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z"
                            ></path>
                        </svg>
                    </span>
                    <h2 class="mt-5 text-center text-base font-bold text-[#071F37] pt-4">Expert Advice</h2>
                    <div><p class="px-5 mt-5 text-base text-center text-[#464646]">Our trained agents can answer any service related question and recommend the best options available in your area.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blogs post  -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="mb-10 flex gap-5 items-center">
            <div class="md:w-[65%] w-full"><h2 class="text-left md:text-4xl text-2xl font-bold">Latest News</h2></div>
            <div class="md:w-[45%] w-full">
                <a class="text-xl font-bold text-[#2B3253] flex items-center justify-end gap-2 hover:gap-10 transform transition-all duration-300 w-40 md:ml-auto" href="/blog">
                    View All
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-3xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"
                        ></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="grid md:grid-cols-3 grid-cols-1 gap-7">
            <?php
              if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                  $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                  $date = get_the_date('j');
                  $month = get_the_date('M');
                    ?>
                        <article>
                            <div class="relative bg-gradient-to-b from-[#000000] to-[#6746C8] group">
                                <img
                                    alt="blog2"
                                    loading="lazy"
                                    width="435"
                                    decoding="async"
                                    data-nimg="1"
                                    class="transition duration-300 ease-in-out min-h-[360px] h-full object-cover"
                                    src="<?php echo esc_url($featured_image_url ? $featured_image_url : '/path/to/default-image.jpg'); ?>"
                                    style="color: transparent;"
                                />
                                <div class="absolute bottom-5 right-5 bg-[#96B93A] flex flex-col justify-center text-center p-2 px-5 shadow text-xl rounded-xl uppercase">
                                    <a class="font-semibold text-[#fff] text-3xl" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html($date); ?></a>
                                    <a class="font-semibold text-[#fff] -mt-1" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html($month); ?></a>
                                </div>
                            </div>
                            <div class="grid gap-2 p-4">
                                <a class="text-lg font-medium text-[#6746C8]" href="<?php echo esc_url(get_permalink()); ?>">News</a>
                                <a class="md:text-2xl text-xl font-bold line-clamp-2" href="<?php echo esc_url(get_permalink()); ?>"><?php the_title() ?></a>
                            </div>
                        </article>
                    <?php
                endwhile;
                wp_reset_postdata();
              else :
                echo '<p>No posts found.</p>';
              endif;
            ?>
        </div>
    </div>
</section>

<!-- Enter your zip code to find providers and plans in your area: -->
<section class="py-16 bg-[#F3FAFF]">
    <div class="max-w-[1110px] w-full mx-auto px-4 my-10 flex lg:flex-row flex-col justify-center gap-5 items-center">
        <div class=""><h3 class="md:text-3xl text-2xl text-center lg:text-left font-extrabold leading-normal">Enter your zip code to find providers and plans in your area:</h3></div>
        <div class="flex md:justify-end justify-center [&amp;>div:nth-child(1)]:mr-0 [&amp;>div:nth-child(1)]:w-fit w-full">
            <?php get_template_part('template-parts/search', 'form'); ?>
        </div>
    </div>


</section>

<!-- Need Help Finding The Best Provider For You? -->
<section class="py-24 bg-[#6746C8]">
    <div class="container mx-auto px-4 items-center">        
        <div class="text-center">
            <h2 class="md:text-5xl text-3xl leading- font-semibold text-white">Need Help Finding The Best Provider For You?</h2>
            <p class="md:text-lg text-lg font-medium text-white my-5">
            Whether you have some questions about a provider or need a little advice, give us a call and we’ll take care of you.
                      </p>
            <a class="text-white hover:text-white md:text-3xl text-xl font-extrabold hover:underline flex items-center gap-2 w-fit mx-auto" href="/contact-us">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.5em" width="1.5em" >
                    <path d="M19.7505 9.02905C19.7652 9.443 20.1127 9.76663 20.5267 9.75189C20.9406 9.73715 21.2643 9.38962 21.2495 8.97567L19.7505 9.02905ZM16.214 5.00236V5.75236C16.2224 5.75236 16.2307 5.75222 16.2391 5.75194L16.214 5.00236ZM9.786 5.00236L9.76095 5.75194C9.7693 5.75222 9.77765 5.75236 9.786 5.75236V5.00236ZM4.75048 8.97567C4.73573 9.38962 5.05936 9.73715 5.47331 9.75189C5.88726 9.76663 6.23478 9.443 6.24952 9.02905L4.75048 8.97567ZM21.25 9.00236C21.25 8.58815 20.9142 8.25236 20.5 8.25236C20.0858 8.25236 19.75 8.58815 19.75 9.00236H21.25ZM20.5 15.0024L21.2495 15.029C21.2498 15.0202 21.25 15.0113 21.25 15.0024H20.5ZM16.214 19.0024L16.2391 18.2528C16.2307 18.2525 16.2224 18.2524 16.214 18.2524V19.0024ZM9.786 19.0024V18.2524C9.77765 18.2524 9.7693 18.2525 9.76095 18.2528L9.786 19.0024ZM5.5 15.0024H4.75C4.75 15.0113 4.75016 15.0202 4.75048 15.029L5.5 15.0024ZM6.25 9.00236C6.25 8.58815 5.91421 8.25236 5.5 8.25236C5.08579 8.25236 4.75 8.58815 4.75 9.00236H6.25ZM20.8783 9.64996C21.236 9.44103 21.3565 8.98172 21.1476 8.62406C20.9387 8.2664 20.4794 8.14583 20.1217 8.35476L20.8783 9.64996ZM15.236 12.0774L14.8577 11.4297L14.8515 11.4334L15.236 12.0774ZM10.764 12.0774L11.1486 11.4334L11.1423 11.4298L10.764 12.0774ZM5.8783 8.35476C5.52064 8.14583 5.06133 8.2664 4.8524 8.62406C4.64347 8.98172 4.76404 9.44103 5.1217 9.64996L5.8783 8.35476ZM21.2495 8.97567C21.1534 6.27536 18.8895 4.16252 16.1889 4.25278L16.2391 5.75194C18.1129 5.68931 19.6838 7.15537 19.7505 9.02905L21.2495 8.97567ZM16.214 4.25236H9.786V5.75236H16.214V4.25236ZM9.81105 4.25278C7.11054 4.16252 4.84663 6.27536 4.75048 8.97567L6.24952 9.02905C6.31625 7.15537 7.88712 5.68931 9.76095 5.75194L9.81105 4.25278ZM19.75 9.00236V15.0024H21.25V9.00236H19.75ZM19.7505 14.9757C19.6838 16.8494 18.1129 18.3154 16.2391 18.2528L16.1889 19.7519C18.8895 19.8422 21.1534 17.7294 21.2495 15.029L19.7505 14.9757ZM16.214 18.2524H9.786V19.7524H16.214V18.2524ZM9.76095 18.2528C7.88712 18.3154 6.31624 16.8494 6.24952 14.9757L4.75048 15.029C4.84663 17.7294 7.11054 19.8422 9.81105 19.7519L9.76095 18.2528ZM6.25 15.0024V9.00236H4.75V15.0024H6.25ZM20.1217 8.35476L14.8577 11.4298L15.6143 12.725L20.8783 9.64996L20.1217 8.35476ZM14.8515 11.4334C13.7111 12.1145 12.2889 12.1145 11.1485 11.4334L10.3795 12.7213C11.9935 13.6852 14.0065 13.6852 15.6205 12.7213L14.8515 11.4334ZM11.1423 11.4298L5.8783 8.35476L5.1217 9.64996L10.3857 12.725L11.1423 11.4298Z" fill="#fff"/>
                </svg>
                Contact Us
            </a>
        </div>
    </div>
</section>


<?php get_footer() ?>