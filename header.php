<?php
function get_full_url() {
    $protocol = is_ssl() ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    $request_uri = $_SERVER['REQUEST_URI'];
    return $protocol . $host . $request_uri;
}
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images//favicon.ico" type="image/x-icon">
    <link rel="canonical" href="<?php echo get_full_url(); ?>">
    <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6552892445438334"  crossorigin="anonymous"></script> -->
	<?php wp_head(); ?>
</head>
<?php wp_body_open(); ?>
<?php check_header();?>
<header class="bg-gray-950">
    <div class="flex justify-end items-center py-2 px-4 lg:px-6 lg:hidden">
        <a href="#" class="mr-2 text-sm font-medium text-gray-500 hover:underline">Talk to
            sales</a>
        <a href="#"
            class="inline-flex items-center p-2 text-sm font-medium text-gray-500 rounded-lg hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 focus:outline-none">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
        <a href="tel:5541251234"
            class="inline-flex items-center p-2 text-sm font-medium text-gray-500 rounded-lg hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 focus:outline-none">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                </path>
            </svg>
        </a>
        
        <a href="" class="items-center p-2 text-sm font-medium text-gray-500 rounded-lg lg:inline-flex hover:bg-gray-50 focus:ring-4 focus:ring-gray-300">
            <svg stroke="#9CA3AF" fill="#9CA3AF" stroke-width="0" viewBox="0 0 512 512" class="" height="1em" width="1em" >
                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
            </svg>
        </a>
    </div>
    <nav class=" border-gray-200 py-2 md:py-5 ">
        <div class="grid grid-cols-3 items-center mx-auto container px-4">
            <a href="<?php bloginfo('url'); ?>" class="flex items-center lg:justify-center lg:order-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" class="mr-3 h-6 sm:h-9 invert" alt="top providers Logo" />
            </a>
            <div class="flex col-span-2 justify-end items-center lg:order-3 lg:col-span-1">
                
                <a href="<?php echo esc_url(home_url('/#search')); ?>" class="hidden items-center p-2 text-sm font-medium text-gray-500 rounded-lg lg:inline-flex hover:bg-gray-50 focus:ring-4 focus:ring-gray-300">
                    <svg stroke="#9CA3AF" fill="#9CA3AF" stroke-width="0" viewBox="0 0 512 512" class="" height="1em" width="1em" >
                        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                    </svg>
                </a>
                <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 lg:py-2.5 md:mr-2">Contact us</a>
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden col-span-3 justify-between items-center w-full lg:flex lg:w-auto lg:order-1 lg:col-span-1" id="mobile-menu-2">
                <?php wp_nav_menu( array( 
                    'theme_location' => 'main', 
                    'container'      => '',
                    'container_class'=> 'flex flex-col space-y-4',
                    'menu_class'     => 'flex flex-col mt-4 font-medium lg:flex-row text-sm text-white lg:space-x-8 lg:mt-0 relative pb-3 md:pb-0',
                    'walker'         => new Tailwind_Nav_Walker(),
                )); ?>
            </div>
        </div>
    </nav>
</header>



<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggles = document.querySelectorAll('.submenu-toggle');

        toggles.forEach(toggle => {
            toggle.addEventListener('click', (e) => {
                const submenu = e.target.nextElementSibling;
                if (submenu && submenu.classList.contains('submenu')) {
                    submenu.classList.toggle('hidden');
                }
            });
        });
    });
</script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
