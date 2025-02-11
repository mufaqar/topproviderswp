<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tp_theme
 */

    get_header();

    $pro_link = get_field( "pro_link" );
    $logoArray = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $logoUrl = esc_url( $logoArray[0]);
    $currentYear = date("Y");
    $currentMonth = date('F');
    $price = get_field( "pro_price" );
    $features = get_field( "features" );
    $features_banner = get_field( "banner_image" );
    $pros = get_field( "pros" );
    $cons = get_field( "cons" );
?>



<section class="py-14 flex items-center bg-gray-50 relative">
    <div class="container mx-auto px-4">
        <div class="flex justify-center flex-col items-center">
            <h1 class="sm:text-5xl text-2xl font-bold text-center max-w-[850px] mx-auto capitalize leading-10">
            <span class="text-[#96B93A]"><?php echo the_title(); ?> </span>Plans and Pricing for <?php echo $currentMonth ?>, <?php echo $currentYear ?>
            </h1>
            <div class="text-xl text-center flex items-center gap-4 font-[Roboto] my-5">
                <p>Price Starting At</p> 
                <h2 class="md:text-4xl text-3xl font-extrabold my-4 flex items-start text-[#96B93A]">
                    <span class="md:text-3xl text-base">$</span><?php echo $price ?>
                    <span class="grid">
                        <span class="md:text-3xl text-base"><sub>/mo</sub></span>
                    </span>
                </h2>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/business.webp" class="absolute right-0 z-10 bottom-0 w-72"/>
    <img src="<?php echo get_template_directory_uri(); ?>/images/wave1.png" class="absolute opacity-40 -left-60 -bottom-20 w-[800px]"/>
</section>

<section class="bgmain px-4 py-5 shadow-sm border-y border-zinc-400/20 z-50">
    <div class="container mx-auto flex justify-between gap-10 items-center md:text-4xl text-xl font-bold uppercase text-white">
        <div class="grid items-center md:justify-end justify-center">To get started </div>
        <div class="items-center justify-start flex gap-3 ml-1 bg-white text-[#99BB41] px-6 py-3 rounded-xl hover:scale-105 transition-all duration-150">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.2em" width="1.2em" >
                <path d="M19.7505 9.02905C19.7652 9.443 20.1127 9.76663 20.5267 9.75189C20.9406 9.73715 21.2643 9.38962 21.2495 8.97567L19.7505 9.02905ZM16.214 5.00236V5.75236C16.2224 5.75236 16.2307 5.75222 16.2391 5.75194L16.214 5.00236ZM9.786 5.00236L9.76095 5.75194C9.7693 5.75222 9.77765 5.75236 9.786 5.75236V5.00236ZM4.75048 8.97567C4.73573 9.38962 5.05936 9.73715 5.47331 9.75189C5.88726 9.76663 6.23478 9.443 6.24952 9.02905L4.75048 8.97567ZM21.25 9.00236C21.25 8.58815 20.9142 8.25236 20.5 8.25236C20.0858 8.25236 19.75 8.58815 19.75 9.00236H21.25ZM20.5 15.0024L21.2495 15.029C21.2498 15.0202 21.25 15.0113 21.25 15.0024H20.5ZM16.214 19.0024L16.2391 18.2528C16.2307 18.2525 16.2224 18.2524 16.214 18.2524V19.0024ZM9.786 19.0024V18.2524C9.77765 18.2524 9.7693 18.2525 9.76095 18.2528L9.786 19.0024ZM5.5 15.0024H4.75C4.75 15.0113 4.75016 15.0202 4.75048 15.029L5.5 15.0024ZM6.25 9.00236C6.25 8.58815 5.91421 8.25236 5.5 8.25236C5.08579 8.25236 4.75 8.58815 4.75 9.00236H6.25ZM20.8783 9.64996C21.236 9.44103 21.3565 8.98172 21.1476 8.62406C20.9387 8.2664 20.4794 8.14583 20.1217 8.35476L20.8783 9.64996ZM15.236 12.0774L14.8577 11.4297L14.8515 11.4334L15.236 12.0774ZM10.764 12.0774L11.1486 11.4334L11.1423 11.4298L10.764 12.0774ZM5.8783 8.35476C5.52064 8.14583 5.06133 8.2664 4.8524 8.62406C4.64347 8.98172 4.76404 9.44103 5.1217 9.64996L5.8783 8.35476ZM21.2495 8.97567C21.1534 6.27536 18.8895 4.16252 16.1889 4.25278L16.2391 5.75194C18.1129 5.68931 19.6838 7.15537 19.7505 9.02905L21.2495 8.97567ZM16.214 4.25236H9.786V5.75236H16.214V4.25236ZM9.81105 4.25278C7.11054 4.16252 4.84663 6.27536 4.75048 8.97567L6.24952 9.02905C6.31625 7.15537 7.88712 5.68931 9.76095 5.75194L9.81105 4.25278ZM19.75 9.00236V15.0024H21.25V9.00236H19.75ZM19.7505 14.9757C19.6838 16.8494 18.1129 18.3154 16.2391 18.2528L16.1889 19.7519C18.8895 19.8422 21.1534 17.7294 21.2495 15.029L19.7505 14.9757ZM16.214 18.2524H9.786V19.7524H16.214V18.2524ZM9.76095 18.2528C7.88712 18.3154 6.31624 16.8494 6.24952 14.9757L4.75048 15.029C4.84663 17.7294 7.11054 19.8422 9.81105 19.7519L9.76095 18.2528ZM6.25 15.0024V9.00236H4.75V15.0024H6.25ZM20.1217 8.35476L14.8577 11.4298L15.6143 12.725L20.8783 9.64996L20.1217 8.35476ZM14.8515 11.4334C13.7111 12.1145 12.2889 12.1145 11.1485 11.4334L10.3795 12.7213C11.9935 13.6852 14.0065 13.6852 15.6205 12.7213L14.8515 11.4334ZM11.1423 11.4298L5.8783 8.35476L5.1217 9.64996L10.3857 12.725L11.1423 11.4298Z" fill="#99BB41"/>
            </svg>
            <a href="<?php echo $pro_link ?>" class="">Order Us</a>
        </div>
    </div>
</section>

<?php if( have_rows('internet_plans') ): ?>
<!-- Internet Plans -->
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <h2 class="text-2xl font-bold"><?php echo the_title(); ?> Internet Plans</h2>
            <div class="w-fit hint mx-auto block md:hidden mt-5"><?php _e('Swipe Left to See All →', 'your-theme-textdomain'); ?></div>
        </div>
        <div>
            <div class="w-full h-auto">
                <div class="w-full h-auto shadow-xl border rounded-t-md rounded-b-md flex md:flex-col flex-row items-stretch">
                    <div class="md:w-full min-w-fit grid md:grid-cols-4 grid-cols-1 bg-[#6041BB]">
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white"><?php _e('Package', 'your-theme-textdomain'); ?></h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2"><?php _e('Speed Up To', 'your-theme-textdomain'); ?></h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white"><?php _e('Price', 'your-theme-textdomain'); ?></h4></div>
                        </div>
                        <div class="grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center border-r">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2"><?php _e('Order Now', 'your-theme-textdomain'); ?></h4></div>
                        </div>
                    </div>
                    <div class="flex md:flex-col flex-row w-full md:overflow-hidden overflow-x-scroll">
                        <?php if( have_rows('internet_plans') ): ?>
                            <?php while( have_rows('internet_plans') ): the_row(); 
                                $package = get_sub_field('package');
                                $Speeds = get_sub_field('Speeds');
                                $speed_info = get_sub_field('speed_info');
                                $price = get_sub_field('price');
                                $price_info = get_sub_field('price_info');
                                ?>
                                <div class="w-full flex md:flex-row flex-col dtable">
                                    <div class="w-full md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                                        <div><p class="text-center md:text-base text-xs"><?php echo $package ?></p></div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $Speeds ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $speed_info; ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $price ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $price_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                        <a  href="<?php echo $pro_link ?>" class="md:text-base text-[9px] font-medium text-white bg-[#96B93A] hover:bg-[#6041BB] md:px-3 px-[5px] py-1.5 rounded-3xl block w-[90px] md:w-[140px] text-center mx-auto">
                                            Join Us
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if( have_rows('tv_plans') ): ?>
<!-- TV Plans -->
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <h2 class="text-2xl font-bold"><?php echo the_title(); ?> TV Plans</h2>
            <div class="w-fit hint mx-auto block md:hidden mt-5">Swipe Left to See All →</div>
        </div>
        <div>
            <div class="w-full h-auto">
                <div class="w-full h-auto shadow-xl border rounded-t-md rounded-b-md flex md:flex-col flex-row items-stretch">
                    <div class="md:w-full min-w-fit grid md:grid-cols-4 grid-cols-1 bg-[#6041BB]">
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white">Package</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Channels</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white">Price</h4></div>
                        </div>
                        <div class="grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center border-r">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Order Now</h4></div>
                        </div>
                    </div>
                    <div class="flex md:flex-col flex-row w-full md:overflow-hidden overflow-x-scroll">
                        <?php if( have_rows('tv_plans') ): ?>
                            <?php while( have_rows('tv_plans') ): the_row(); 
                                $package = get_sub_field('package');
                                $Speeds = get_sub_field('Speeds');
                                $speed_info = get_sub_field('speed_info');
                                $price = get_sub_field('price');
                                $price_info = get_sub_field('price_info');
                                ?>
                                <div class="w-full flex md:flex-row flex-col dtable">
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div><p class="text-center md:text-base text-xs"><?php echo $package ?></p></div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $Speeds ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $speed_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $price ?></p>
                                            <p class="text-center md:text-xs text-xs">*<?php echo $price_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                            <a  href="<?php echo $pro_link ?>" class="md:text-base text-[9px] font-medium text-white bg-[#96B93A] hover:bg-[#6041BB] md:px-3 px-[5px] py-1.5 rounded-3xl block w-[90px] md:w-[140px] text-center mx-auto">
                                                Join Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div><p class="text-sm font-[Roboto] mt-10"></p></div>
    </div>
</section>
<?php endif; ?>



<?php if( have_rows('internet_and_phone_bundles') ): ?>
<!-- Internet and Phone Bundles -->
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <h2 class="text-2xl font-bold">
                <?php echo the_title(); ?> Internet and Phone Bundles
            </h2>
            <div class="w-fit hint mx-auto block md:hidden mt-5">Swipe Left to See All →</div>
        </div>
        <div>
            <div class="w-full h-auto">
                <div class="w-full h-auto shadow-xl border rounded-t-md rounded-b-md flex md:flex-col flex-row items-stretch">
                    <div class="md:w-full min-w-fit grid md:grid-cols-5 grid-cols-1 bg-[#6041BB]">
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white">Package</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Speed Up To</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Voice</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white">Price</h4></div>
                        </div>
                        <div class="grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center border-r">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Order Now</h4></div>
                        </div>
                    </div>
                    <div class="flex md:flex-col flex-row w-full md:overflow-hidden overflow-x-scroll">
                        <?php if( have_rows('internet_and_phone_bundles') ): ?>
                            <?php while( have_rows('internet_and_phone_bundles') ): the_row(); 
                                $package = get_sub_field('package');
                                $Speeds = get_sub_field('Speeds');
                                $speed_info = get_sub_field('speed_info');
                                $price = get_sub_field('price');
                                $price_info = get_sub_field('price_info');
                                $voice = get_sub_field('voice');
                                $voice_info = get_sub_field('voice_info');
                                ?>
                                <div class="w-full flex md:flex-row flex-col dtable">
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div><p class="text-center md:text-base text-xs"><?php echo $package ?></p></div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $Speeds ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $speed_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $price ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $price_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $voice ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $voice_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                            <a  href="<?php echo $pro_link ?>" class="md:text-base text-[9px] font-medium text-white bg-[#96B93A] hover:bg-[#6041BB] md:px-3 px-[5px] py-1.5 rounded-3xl block w-[90px] md:w-[140px] text-center mx-auto">
                                                Join Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div><p class="text-sm font-[Roboto] mt-10"></p></div>
    </div>
</section>
<?php endif; ?>

<?php if( have_rows('internet_and_mobile_bundles') ): ?>
<!-- Internet and Mobile Bundles -->
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <h2 class="text-2xl font-bold">
                <?php echo the_title(); ?> Internet and Mobile Bundles
            </h2>
            <div class="w-fit hint mx-auto block md:hidden mt-5">Swipe Left to See All →</div>
        </div>
        <div>
            <div class="w-full h-auto">
                <div class="w-full h-auto shadow-xl border rounded-t-md rounded-b-md flex md:flex-col flex-row items-stretch">
                    <div class="md:w-full min-w-fit grid md:grid-cols-5 grid-cols-1 bg-[#6041BB]">
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white">Package</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Speed Up To</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Voice</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white">Price</h4></div>
                        </div>
                        <div class="grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center border-r">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Order Now</h4></div>
                        </div>
                    </div>
                    <div class="flex md:flex-col flex-row w-full md:overflow-hidden overflow-x-scroll">
                        <?php if( have_rows('internet_and_mobile_bundles') ): ?>
                            <?php while( have_rows('internet_and_mobile_bundles') ): the_row(); 
                                $package = get_sub_field('package');
                                $Speeds = get_sub_field('Speeds');
                                $speed_info = get_sub_field('speed_info');
                                $price = get_sub_field('price');
                                $price_info = get_sub_field('price_info');
                                $voice = get_sub_field('voice');
                                $voice_info = get_sub_field('voice_info');
                                ?>
                                <div class="w-full flex md:flex-row flex-col dtable">
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div><p class="text-center md:text-base text-xs"><?php echo $package ?></p></div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $Speeds ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $speed_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $price ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $price_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $voice ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $voice_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                    <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                        <a  href="<?php echo $pro_link ?>" class="md:text-base text-[9px] font-medium text-white bg-[#96B93A] hover:bg-[#6041BB] md:px-3 px-[5px] py-1.5 rounded-3xl block w-[90px] md:w-[140px] text-center mx-auto">
                                            Join Us
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div><p class="text-sm font-[Roboto] mt-10"></p></div>
    </div>
</section>
<?php endif; ?>

<?php if( have_rows('internet_and_tv_bundles') ): ?>
<!-- Internet And TV Bundles -->
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <h2 class="text-2xl font-bold">
                <?php echo the_title(); ?> Internet And TV Bundles
            </h2>
            <div class="w-fit hint mx-auto block md:hidden mt-5">Swipe Left to See All →</div>
        </div>
        <div>
            <div class="w-full h-auto">
                <div class="w-full h-auto shadow-xl border rounded-t-md rounded-b-md flex md:flex-col flex-row items-stretch">
                    <div class="md:w-full min-w-fit grid md:grid-cols-5 grid-cols-1 bg-[#6041BB]">
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white">Package</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Speed Up To</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Voice</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white">Price</h4></div>
                        </div>
                        <div class="grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center border-r">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Order Now</h4></div>
                        </div>
                    </div>
                    <div class="flex md:flex-col flex-row w-full md:overflow-hidden overflow-x-scroll">
                        <?php if( have_rows('internet_and_tv_bundles') ): ?>
                            <?php while( have_rows('internet_and_tv_bundles') ): the_row(); 
                                $package = get_sub_field('package');
                                $Speeds = get_sub_field('Speeds');
                                $speed_info = get_sub_field('speed_info');
                                $price = get_sub_field('price');
                                $price_info = get_sub_field('price_info');
                                $channels = get_sub_field('channels');
                                $channels_info = get_sub_field('channels_info');
                                ?>
                                <div class="w-full flex md:flex-row flex-col dtable">
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div><p class="text-center md:text-base text-xs"><?php echo $package ?></p></div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $Speeds ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $speed_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $price ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $price_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $channels ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $channels_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                    <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                        <a  href="<?php echo $pro_link ?>" class="md:text-base text-[9px] font-medium text-white bg-[#96B93A] hover:bg-[#6041BB] md:px-3 px-[5px] py-1.5 rounded-3xl block w-[90px] md:w-[140px] text-center mx-auto">
                                            Join Us
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div><p class="text-sm font-[Roboto] mt-10"></p></div>
    </div>
</section>
<?php endif; ?>

<?php if( have_rows('internet_tv_phone_bundles') ): ?>

<!-- Internet, TV & Phone Bundles -->
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <h2 class="text-2xl font-bold">
                <?php echo the_title(); ?>
                Internet, TV &amp; Phone Bundles
            </h2>
            <div class="w-fit hint mx-auto block md:hidden mt-5">Swipe Left to See All →</div>
        </div>
        <div>
            <div class="w-full h-auto">
                <div class="w-full h-auto shadow-xl border rounded-t-md rounded-b-md flex md:flex-col flex-row items-stretch">
                    <div class="md:w-full min-w-fit grid md:grid-cols-6 grid-cols-1 bg-[#6041BB]">
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white">Package</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Speed Up To</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Channels</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Voice</h4></div>
                        </div>
                        <div class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white">Price</h4></div>
                        </div>
                        <div class="grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center border-r">
                            <div><h4 class="md:text-base text-xs font-bold text-center text-white mb-2">Order Now</h4></div>
                        </div>
                    </div>
                    <div class="flex md:flex-col flex-row w-full md:overflow-hidden overflow-x-scroll">
                        <?php if( have_rows('internet_tv_phone_bundles') ): ?>
                            <?php while( have_rows('internet_tv_phone_bundles') ): the_row(); 
                                $package = get_sub_field('package');
                                $Speeds = get_sub_field('Speeds');
                                $speed_info = get_sub_field('speed_info');
                                $price = get_sub_field('price');
                                $price_info = get_sub_field('price_info');
                                $channels = get_sub_field('channels');
                                $channels_info = get_sub_field('channels_info');
                                $voice = get_sub_field('voice');
                                $voice_info = get_sub_field('voice_info');
                                ?>
                                <div class="w-full flex md:flex-row flex-col dtable">
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div><p class="text-center md:text-base text-xs"><?php echo $package ?></p></div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $Speeds ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $speed_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $channels ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $channels_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $voice ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $voice_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                        <div>
                                            <p class="text-center md:text-base text-xs font-bold"><?php echo $price ?></p>
                                            <p class="text-center md:text-xs text-xs"><?php echo $price_info ?></p>
                                        </div>
                                    </div>
                                    <div class="w-full grid justify-center md:p-5 p-2 md:h-auto h-[120px] overflow-hidden items-center">
                                    <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                        <a  href="<?php echo $pro_link ?>" class="md:text-base text-[9px] font-medium text-white bg-[#96B93A] hover:bg-[#6041BB] md:px-3 px-[5px] py-1.5 rounded-3xl block w-[90px] md:w-[140px] text-center mx-auto">
                                            Join Us
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div><p class="text-sm font-[Roboto] mt-10"></p></div>
    </div>
</section>
<?php endif; ?>

<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-20"><h2 class="text-2xl font-bold">Switch to <?php echo the_title(); ?> And Get Benefits You’ll Love</h2></div>
        <div class="grid md:grid-cols-3 grid-cols-1 gap-y-14 gap-x-5">
            <?php if (have_rows('features_block')):
                while (have_rows('features_block')):
                    the_row();
                    $title = get_sub_field('title');
                    $details = get_sub_field('details');
                    $icon = get_sub_field('icon');
                ?>
                <div class="w-full py-7 px-4 relative transform hover:-translate-y-3 transition-all duration-300 ease-in-out bg-[#fff] border 
                    [&:nth-child(2)]:bg-[#E7E2FE] [&:nth-child(4)]:bg-[#E7E2FE] [&:nth-child(6)]:bg-[#E7E2FE]">
                    <div class="mt-5">
                        <span class="block absolute border border-[#E7E2FE] -top-10 left-1/2 -translate-x-1/2 rounded-full w-fit mx-auto p-4 bg-[#fff]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" aria-hidden="true" height="2em" width="2em">
                                <path
                                    fill-rule="evenodd"
                                    d="M6.97 2.47a.75.75 0 011.06 0l4.5 4.5a.75.75 0 01-1.06 1.06L8.25 4.81V16.5a.75.75 0 01-1.5 0V4.81L3.53 8.03a.75.75 0 01-1.06-1.06l4.5-4.5zm9.53 4.28a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V7.5a.75.75 0 01.75-.75z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </span>
                        <h2 class="mt-5 text-center text-base font-bold text-[#071F37] pt-4"><?php echo $title; ?></h2>
                        <div><p class="px-5 mt-5 text-base text-center text-[#464646]"><?php echo $details; ?></p></div>
                    </div>
            </div>
                <?php endwhile; ?>               
            <?php
            endif; ?>
           
        </div>
    </div>
</section>

<section class="mt-16">
    <div class="container mx-auto px-4">
        <div class="">
            <?php if (have_rows('block')): ?>
                <div class="block">
                    <?php while (have_rows('block')):
                        the_row();
                            $heading = get_sub_field('heading');
                            $content = get_sub_field('content');
                        ?>
                            <div class="inner_block">
                                <h2 class="block_heading"><?php echo $heading; ?></h2>
                                <div class="block_content"><?php echo $content; ?></div>
                            </div>
                        <?php
                    endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="mt-8">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-5 pros-cons-wrapper grid-cols-1">
            <div class="pros">
                <h2 class="text-2xl font-bold mb-4 flex items-center gap-2">
                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    width="20px" height="20px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                    <g>
                        <path fill="#fff" d="M64,28c0-3.314-2.687-6-6-6H41l0,0h-0.016H41l2-18c0.209-2.188-1.287-4-3.498-4h-4.001
                            C33,0,31.959,1.75,31,4l-8,18c-2.155,5.169-5,6-7,6c-1,0-2,0-2,0v-2c0-2.212-1.789-4-4-4H4c-2.211,0-4,1.788-4,4v34
                            c0,2.21,1.789,4,4,4h6c2.211,0,4-1.79,4-4v-2c1,0,3.632,0.052,6.21,2.697C23.324,63.894,27.043,64,29,64h23c3.313,0,6-2.688,6-6
                            c0-1.731-0.737-3.288-1.91-4.383C58.371,52.769,60,50.577,60,48c0-1.731-0.737-3.288-1.91-4.383C60.371,42.769,62,40.577,62,38
                            c0-1.731-0.737-3.288-1.91-4.383C62.371,32.769,64,30.577,64,28z M12,60c0,1.104-0.896,2-2,2H4c-1.104,0-2-0.896-2-2V26
                            c0-1.105,0.896-2,2-2h6c1.104,0,2,0.895,2,2V60z M58,32H48c-0.553,0-1,0.446-1,1c0,0.552,0.447,1,1,1h8c2.209,0,4,1.79,4,4
                            c0,2.209-1.791,4-4,4H46c-0.553,0-1,0.446-1,1c0,0.552,0.447,1,1,1h8c2.209,0,4,1.79,4,4c0,2.209-1.791,4-4,4H44
                            c-0.553,0-1,0.446-1,1c0,0.552,0.447,1,1,1h8c2.209,0,4,1.79,4,4c0,2.209-1.791,4-4,4H29c-1,0-4.695,0.034-7.358-2.699
                            C18.532,56.109,16.112,56.003,14,56V30h2c4,0,6.57-1.571,9.25-8L33,4c0.521-1.104,1.146-2,2.251-2H39c1.104,0,2.126,0.834,2,2
                            l-1.99,18c-0.132,1.673,0.914,2,1.99,2h17c2.209,0,4,1.79,4,4C62,30.209,60.209,32,58,32z"/>
                        <path fill="#fff" d="M7,54c-1.657,0-3,1.342-3,3c0,1.656,1.343,3,3,3s3-1.344,3-3C10,55.342,8.657,54,7,54z M7,58
                            c-0.553,0-1-0.449-1-1c0-0.553,0.447-1,1-1s1,0.447,1,1C8,57.551,7.553,58,7,58z"/>
                    </g>
                </svg>    
                Pros</h2>
                <?php echo $pros ?>
            </div>
            <div class="cons">
                <h2 class="text-2xl flex items-center gap-2 font-bold mb-4">
                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    width="20px" height="20px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                    <g>
                        <path fill="#fff" d="M64,36c0,3.312-2.687,6-6,6H41v-0.002L40.984,42H41l2,18c0.209,2.186-1.287,4-3.498,4h-4.001
                            C33,64,31.959,62.248,31,60l-8-18c-2.155-5.171-5-6-7-6c-1,0-2,0-2,0v2c0,2.21-1.789,4-4,4H4c-2.211,0-4-1.79-4-4V4
                            c0-2.212,1.789-4,4-4h6c2.211,0,4,1.788,4,4v2c1,0,3.632-0.054,6.21-2.699C23.324,0.104,27.043,0,29,0h23c3.313,0,6,2.686,6,6
                            c0,1.729-0.737,3.286-1.91,4.381C58.371,11.229,60,13.421,60,16c0,1.729-0.737,3.286-1.91,4.381C60.371,21.229,62,23.421,62,26
                            c0,1.729-0.737,3.286-1.91,4.381C62.371,31.229,64,33.421,64,36z M12,4c0-1.105-0.896-2-2-2H4C2.896,2,2,2.895,2,4v34
                            c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2V4z M58,32H48c-0.553,0-1-0.448-1-1c0-0.554,0.447-1,1-1h8c2.209,0,4-1.791,4-4
                            c0-2.21-1.791-4-4-4H46c-0.553,0-1-0.448-1-1c0-0.554,0.447-1,1-1h8c2.209,0,4-1.791,4-4c0-2.21-1.791-4-4-4H44
                            c-0.553,0-1-0.448-1-1c0-0.554,0.447-1,1-1h8c2.209,0,4-1.791,4-4c0-2.21-1.791-4-4-4H29c-1,0-4.695-0.036-7.358,2.697
                            C18.532,7.889,16.112,7.995,14,8v26h2c4,0,6.57,1.569,9.25,8L33,60c0.521,1.103,1.146,2,2.251,2H39c1.104,0,2.126-0.834,2-2
                            l-1.99-18c-0.132-1.675,0.914-2,1.99-2h17c2.209,0,4-1.791,4-4C62,33.79,60.209,32,58,32z"/>
                        <path fill="#fff" d="M7,38c-1.657,0-3-1.344-3-3c0-1.658,1.343-3,3-3s3,1.342,3,3C10,36.656,8.657,38,7,38z M7,34
                            c-0.553,0-1,0.447-1,1c0,0.551,0.447,1,1,1s1-0.449,1-1C8,34.447,7.553,34,7,34z"/>
                    </g>
                </svg>    
                Cons</h2>
                <?php echo $cons ?>
            </div>
        </div>
    </div>
</section>

<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <h2 class="text-2xl font-bold"><?php echo the_title(); ?> FAQ’s</h2>
        </div>
        <div class="grid gap-10">
            <?php
                if( have_rows('faq’s') ):
                    while( have_rows('faq’s') ) : the_row();
                        $question = get_sub_field('question');
                        $answer = get_sub_field('answer');
                    ?>
                        <div class="faq-item w-full h-fit border border-[#F0F0F0] rounded-[10px] p-[30px] shadow-[0_15px_15px_rgba(0,0,0,0.05)]">
                            <div class="faq-question flex justify-between cursor-pointer">
                                <p class="text-lg font-semibold"><?php echo $question ?></p>
                                <span class="faq-icon text-lightBlue">
                                    <svg
                                        stroke="currentColor"
                                        fill="currentColor"
                                        stroke-width="0"
                                        viewBox="0 0 1024 1024"
                                        class="faq-arrow transform transition duration-200 rotate-0"
                                        height="24"
                                        width="24"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <defs></defs>
                                        <path d="M474 152m8 0l60 0q8 0 8 8l0 704q0 8-8 8l-60 0q-8 0-8-8l0-704q0-8 8-8Z"></path>
                                        <path d="M168 474m8 0l672 0q8 0 8 8l0 60q0 8-8 8l-672 0q-8 0-8-8l0-60q0-8 8-8Z"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="faq-answer hidden mt-5">
                                <p class="text-base font-medium"><?php echo $answer ?></p>
                            </div>
                        </div>
                    <?php
                    endwhile;
                else : endif;
            ?>
        </div>
    </div>
</section>


<script>

    document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach((item) => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const arrow = item.querySelector('.faq-arrow');

            question.addEventListener('click', () => {
                // Close all other open FAQ items
                faqItems.forEach((otherItem) => {
                    const otherAnswer = otherItem.querySelector('.faq-answer');
                    const otherArrow = otherItem.querySelector('.faq-arrow');
                    if (otherItem !== item) {
                        otherAnswer.classList.add('hidden');
                        otherArrow.classList.remove('rotate-45');
                    }
                });

                // Toggle the clicked item
                answer.classList.toggle('hidden');
                arrow.classList.toggle('rotate-45');
            });
        });
    });

</script>


<?php
get_footer();
