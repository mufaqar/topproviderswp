<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tp_theme
 */

get_header();
$post_id = get_the_ID();
$meta_description = get_post_meta($post_id, '_yoast_wpseo_metadesc', true);
$thumbnail_url = get_the_post_thumbnail_url($post_id, 'full'); // 'full' or other sizes
$thumbnail_id = get_post_thumbnail_id(); // Get the ID of the featured image
$caption = wp_get_attachment_caption($thumbnail_id);

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 5,
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$query = new WP_Query($args);

?>

<main class="">
    <div class="mt-12 mx-auto max-w-screen-xl px-3 xl:px-0">
        <div class="w-full">
            <h1 class="mx-auto mb-4 text-2xl font-extrabold leading-none sm:text-3xl lg:text-4xl"><?php the_title(); ?></h1>
            <?php if ($meta_description): ?>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400"><?php echo esc_html($meta_description); ?></p>
            <?php endif; ?>
        </div>
        <section class="">
            <div class="flex justify-between flex-col md:flex-row gap-5 md:gap-0 py-6 border-t border-gray-500 not-format">
                <div class="mb-4">
                    <span class="text-base font-normal text-gray-500 dark:text-gray-400">
                        By Top Providers  <span class="font-semibold ">Published <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" class="font-normal text-gray-500 dark:text-gray-400"><?php echo esc_html(get_the_date('F j, Y')); ?></time></span>
                    </p>
                </div>
                
            </div>
        </section>
    </div>
</main>

<Section class="flex flex-col md:flex-row relative max-w-screen-xl gap-10 px-3 xl:px-0 mx-auto w-full justify-between bg-white rounded mb-20 mt-6">
    <article class="format md:w-8/12">
        <?php if ($thumbnail_url): ?>
            <figure class="pb-6">
                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($caption); ?>">
                <?php if ($caption): ?>
                    <figcaption class="text-center mt-2"><?php echo esc_html($caption); ?></figcaption>
                <?php endif; ?>
            </figure>
        <?php endif; ?>
        <section class="the_content">
            <?php the_content(); ?>
        </section>
    </article>

    <aside class="md:w-4/12 flex-1">
        <div class="sticky !top-4">
            <h4 class="mb-2">
                <strong>Share:</strong>
            </h4>
            <div aria-label="Share social media " class="flex item-center gap-2 flex-wrap">
                <a 
                    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"
                    class="inline-flex items-center py-2 px-6 text-xs font-medium text-gray-900 no-underline bg-white rounded-lg border border-gray-200 focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200"
                >
                    <svg class="mr-2 w-4 h-4" fill="currentColor" aria-hidden="true" viewBox="0 0 512 512">
                        <path
                            d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                        />
                    </svg>
                    Share
                </a>

                <a
                    href="https://twitter.com/intent/tweet?text=<?php echo esc_url(get_permalink()); ?>" target="_blank"
                    class="inline-flex items-center py-2 px-6 text-xs font-medium text-gray-900 no-underline bg-white rounded-lg border border-gray-200 focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200"
                >
                <svg version="1.1" id="Layer_1" width="24px" height="24px" viewBox="0 0 24 24" class="mr-2 w-4 h-4" xml:space="preserve"><path d="M14.095479,10.316482L22.286354,1h-1.940718l-7.115352,8.087682L7.551414,1H1l8.589488,12.231093L1,23h1.940717  l7.509372-8.542861L16.448587,23H23L14.095479,10.316482z M11.436522,13.338465l-0.871624-1.218704l-6.924311-9.68815h2.981339  l5.58978,7.82155l0.867949,1.218704l7.26506,10.166271h-2.981339L11.436522,13.338465z"/></svg>
                    Tweet
                </a>
                <button
                    type="button"
                    id="copy-to-clip-board"
                    clipbord-attr="<?php echo esc_url(get_permalink()); ?>"
                    class="inline-flex items-center py-2 px-6 text-xs font-medium text-gray-900 no-underline bg-white rounded-lg border border-gray-200 focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200"
                >
                    <svg class="mr-2 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    Copy link
                </button>
            </div>
            <h4 class="mb-3 mt-6">
                <strong>Latest Articles:</strong>
            </h4>
            <div class="flex flex-col gap-2">
                <?php if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post(); 
                        $title = get_the_title();
                        $first_letter = mb_substr($title, 0, 1); 
                    ?>
                        <div class="flex gap-2 items-start">
                            <div class=" bg-gray-100">
                                <p class="h-14 w-16 flex justify-center items-center"><?php echo esc_html($first_letter); ?></p>
                            </div>
                            <h2 class="line-clamp-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>              
                    <?php }
                    wp_reset_postdata();
                } else {
                    echo "No posts found.";
                }?>
            </div>
        </div>
    </aside>
</Section>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const copyButton = document.getElementById('copy-to-clip-board');
    copyButton.addEventListener('click', function () {
        const clipboardText = this.getAttribute('clipbord-attr');
        if (clipboardText) {
            // Create a temporary textarea to copy the text
            const textarea = document.createElement('textarea');
            textarea.value = clipboardText;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
            // Optional: Notify the user
            alert('Link copied to clipboard!');
        }
    });
});

</script>
<?php get_footer(); ?>
