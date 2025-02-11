<?php
    $query = get_query_var('review_query');
    $city = get_query_var('city');
    $type = get_query_var('type');
    $state = get_query_var('state');

    function fetch_comments_by_state($state, $type) {                
        $args = [
            'meta_query' => [
                [
                    'key'   => 'state', // The meta key to filter by
                    'value' => $state,  // The meta value to match
                    'compare' => '=',   // Comparison operator
                ],
                [
                    'key'     => 'provider_type', // The second meta key
                    'value'   => $type, // The value to match
                    'compare' => '=',            // Comparison operator
                ],
            ],
        ];
        $comment_query = new WP_Comment_Query($args);
        $comments = $comment_query->get_comments();
        if (!empty($comments)) {
            foreach ($comments as $comment) {
                // $star = get_fields('star', );
                $star = get_comment_meta( $comment->comment_ID, 'star', true );
                $provider_type = get_comment_meta( $comment->comment_ID, 'provider_type', true );

                ?>
                    <div class="border p-5 mb-2">
                        <div>
                            <div class="flex gap-1 items-center">
                                <strong><?php echo esc_html($comment->post_title) ?></strong>
                                <p class="capitalize text-sm px-2 bg-[#96B93A] text-white" style="padding: 0px 3px"><?php echo $provider_type ?></p>
                            </div>
                            <div class="flex items-center gap-1">
                                <?php
                                for ($i = 1; $i <= $star; $i++) {
                                   ?>
                                    <svg width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true" role="img" class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet"><path fill="#FFAC33" d="M27.287 34.627c-.404 0-.806-.124-1.152-.371L18 28.422l-8.135 5.834a1.97 1.97 0 0 1-2.312-.008a1.971 1.971 0 0 1-.721-2.194l3.034-9.792l-8.062-5.681a1.98 1.98 0 0 1-.708-2.203a1.978 1.978 0 0 1 1.866-1.363L12.947 13l3.179-9.549a1.976 1.976 0 0 1 3.749 0L23 13l10.036.015a1.975 1.975 0 0 1 1.159 3.566l-8.062 5.681l3.034 9.792a1.97 1.97 0 0 1-.72 2.194a1.957 1.957 0 0 1-1.16.379z"></path></svg>
                                   <?php
                                }
                                ?>
                                <?php echo $star ?>/5
                            </div>
                        </div>
                        <p class="mt-4"><?php echo esc_html($comment->comment_content) ?></p>
                        <div>
                            <h6><?php echo $comment->comment_author ?></h6>
                        </div>
                    </div>
                <?php
            }
        } else {
            echo 'No comments found for the specified state.';
        }
    }

?>



<!-- Review Sections -->
<section class="px-4 mt-16 container mx-auto">
    <button id="openModalBtn"
        class="border-[#96B93A] border-[2px] text-[#96B93A] p-3 px-5 rounded-lg hover:bg-[#96B93A] hover:text-white font-medium">
        Leave a Review
    </button>
    <div class="grid gap-10"></div>
</section>

<section class="container mx-auto px-4 mb-10">
    <h2 class="text-2xl font-bold mb-2 mt-5">
        Reviews for <?php echo $type ?> in <span class="text-[#96B93A]"> <span class="capitalize"><?php echo $city ?></span></span>
    </h2>
    <div class="mt-5">
        <?php
            fetch_comments_by_state($state, $type);
        ?>
    </div>
</section>

<?php get_template_part( 'template-parts/review', 'form' ); ?>
<script>
document.getElementById('openModalBtn').addEventListener('click', function() {
    document.getElementById('reviewModal').classList.remove('hidden');
});
document.getElementById('closeModalBtn').addEventListener('click', function() {
    document.getElementById('reviewModal').classList.add('hidden');
});
</script>
