<div
    class="flex md:flex-row flex-col gap-2 sm:gap-4 md:justify-between md:items-center rounded-xl border border-gray-100 p-3 transition hover:border-[#6041BB]/10  ">
    <div class="flex items-center gap-2 sm:gap-4 lg:gap-8">
        <figure
            class="sm:w-[150px] sm:h-[150px] p-2 h-[100px] w-[100px] rounded-xl  flex justify-center items-center flex-col border">
            <?php if (has_post_thumbnail()) {
            ?>
            <figure class="w-full">
                <?php the_post_thumbnail('full') ?>
            </figure>
            <?php
          } else { ?>
            <figure class="max-w-[100px] sm:max-w-[144px]">
                <img src="<?php bloginfo('template_directory'); ?>/images/img5.jpg" alt="<?php the_title() ?>"
                    class="sm:w-[144px]" />
            </figure>
            <?php } ?>
        </figure>
        <div>
            <h2 class="sm:text-2xl text-left font-black"><?php the_title() ?></h2>
            <p class="font-medium text-[#6A6A93] text-xs sm:text-base mt-[2px] text-left">Reviews
                <?php echo get_post_meta( get_the_ID(), 'provider_reviews_reviews', true ); ?> •
                <?php echo get_post_meta( get_the_ID(), 'provider_reviews_comment', true ); ?></p>
                <div class="flex gap-1 items-center mt-1">
                    <?php
                        $rating = get_post_meta(get_the_ID(), 'provider_reviews_rating', true);
                        for ($i = 1; $i <= 5; $i++) {
                            if ($rating < 2.5) {
                                $starSrc = $i <= 2 ? get_bloginfo('template_directory') . '/images/red-star.png' : get_bloginfo('template_directory') . '/images/trustpilot-star.png';
                                $starClass = $i <= 2 ? '' : 'grayscale opacity-50';
                            } elseif ($rating < 3.5) {
                                $starSrc = $i <= 3 ? get_bloginfo('template_directory') . '/images/yellow-star.png' : get_bloginfo('template_directory') . '/images/trustpilot-star.png';
                                $starClass = $i <= 3 ? '' : 'grayscale opacity-50';
                            } elseif ($rating < 4.5) {
                                $starSrc = $i <= 4 ? get_bloginfo('template_directory') . '/images/trustpilot-star.png' : get_bloginfo('template_directory') . '/images/trustpilot-star.png';
                                $starClass = $i <= 4 ? '' : 'grayscale opacity-50';
                            } else {
                                $starSrc = get_bloginfo('template_directory') . '/images/trustpilot-star.png';
                                $starClass = '';
                            }
                            echo '<img src="' . $starSrc . '" class="lg:!w-10 lg:!h-10 md:!h-8 md:!w-8 h-5 w-5 ' . $starClass . '" />';
                        }
                    ?>
                    <p class="font-semibold text-[#6A6A93] ml-1"><?php echo $rating; ?></p>
                </div>
                    <div
                        class="text-[10px] hidden sm:flex font-black w-fit mt-2 bg-[#B1F2D0] items-center gap-[2px] rounded-[3px] py-1 px-[6px]">
                        <svg fill="#0E7946" width="12px" height="12px" viewBox="0 0 512 512" id="_x30_1" version="1.1"
                            xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M434.068,46.758L314.607,9.034C295.648,3.047,275.883,0,256,0s-39.648,3.047-58.607,9.034L77.932,46.758  C52.97,54.641,36,77.796,36,103.973v207.39c0,38.129,18.12,73.989,48.816,96.607l117.032,86.234  C217.537,505.764,236.513,512,256,512s38.463-6.236,54.152-17.796l117.032-86.234C457.88,385.352,476,349.492,476,311.363v-207.39  C476,77.796,459.03,54.641,434.068,46.758z M347.924,227.716l-98.995,98.995c-11.716,11.716-30.711,11.716-42.426,0l-42.427-42.426  c-11.716-11.716-11.716-30.711,0-42.426l0,0c11.716-11.716,30.711-11.716,42.426,0l21.213,21.213l77.782-77.782  c11.716-11.716,30.711-11.716,42.426,0h0C359.64,197.005,359.64,216,347.924,227.716z" />
                        </svg>
                        VERIFIED COMPANY
                    </div>
                </div>
        </div>

    <div class="text-[10px] sm:hidden font-black bg-[#B1F2D0] flex items-center gap-[2px] rounded-[3px] py-1 px-[6px]">
        <svg fill="#0E7946" width="12px" height="12px" viewBox="0 0 512 512" id="_x30_1" version="1.1"
            xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path
                d="M434.068,46.758L314.607,9.034C295.648,3.047,275.883,0,256,0s-39.648,3.047-58.607,9.034L77.932,46.758  C52.97,54.641,36,77.796,36,103.973v207.39c0,38.129,18.12,73.989,48.816,96.607l117.032,86.234  C217.537,505.764,236.513,512,256,512s38.463-6.236,54.152-17.796l117.032-86.234C457.88,385.352,476,349.492,476,311.363v-207.39  C476,77.796,459.03,54.641,434.068,46.758z M347.924,227.716l-98.995,98.995c-11.716,11.716-30.711,11.716-42.426,0l-42.427-42.426  c-11.716-11.716-11.716-30.711,0-42.426l0,0c11.716-11.716,30.711-11.716,42.426,0l21.213,21.213l77.782-77.782  c11.716-11.716,30.711-11.716,42.426,0h0C359.64,197.005,359.64,216,347.924,227.716z" />
        </svg>
        VERIFIED COMPANY
    </div>


    <a href="<?php the_permalink() ?>"
        class="flex justify-between group hover:bg-[#C2D5F7] gap-2 sm:gap-6 items-center lg:!max-w-[350px] lg:w-full border p-2 sm:p-3 px-3 sm:px-6 hover:border-[#C2D5F7] border-blue-600 rounded-md sm:rounded-lg">
        <div>
            <span class="flex items-center gap-1 text-blue-500 group-hover:text-black">
                <svg viewBox="0 0 16 16" fill="inherit" class="icon_icon__ECGRl icon_appearance-action__9bJa5"
                    width="16px" height="16px">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8 2H2v12h12V8h-1v5H3V3h5V2Zm2 1h2.293L7.646 7.646l.708.708L13 3.707V6h1V2h-4v1Z"></path>
                </svg>
                <h2 class="text-sm sm:text-base text-left font-black "><?php the_title() ?></h2>
            </span>
            <p class="font-medium text-left text-sm sm:text-base group-hover:text-black text-gray-500">Vist to provider
                full details</p>
        </div>
        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="inherit">
            <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </a>
</div>