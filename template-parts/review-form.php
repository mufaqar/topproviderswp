<?php

// Get the query from set_query_var
 $query = get_query_var('review_query');
 $city = get_query_var('city');
 $type = get_query_var('type');
 $state = get_query_var('state');

 $i = 0;
?>

<div id="reviewModal" class="fixed inset-0 bg-white flex bg-opacity-75 justify-center items-center z-50 hidden">
    <div class="relative bg-white p-6 rounded-lg max-w-3xl w-full mx-4 shadow-lg">
        <button id="closeModalBtn" class="text-xl absolute top-3 right-3">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 0 0 203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z"></path>
            </svg>
        </button>

        <form id="submit-review-form" class="max-w-[900px] mt-4">
            <div class="space-y-3">
                
            <div class="flex gap-3 flex-col md:flex-row">
                <div class="flex-1">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Choose Your Provider </label>
                    <select id="provider" name="provider" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option>Choose a provider</option>
                        <?php
                           if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                    ?><option value="<?php echo get_the_ID(); ?>"><?php echo the_title(); ?></option><?php
                                }
                            } else {
                                echo '<option>No providers found.</option>';
                            }
                            wp_reset_postdata();
                        ?>
                    </select>
                </div>
                <div class="flex-1">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Choose Your Service</label>
                    <select id="service" name="service" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option>Choose Service</option>
                        <option value="internet">Internet</option>
                        <option value="tv">TV</option>
                        <option value="landline">Landline</option>
                        <option value="home-security">Home Security</option>
                    </select>
                </div>
                <div class="flex-1">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Overall Rating</label>
                    <select id="rating" name="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>

                <div class="flex md:flex-row flex-col gap-4">
                    <div class="flex-1">
                        <label class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                        <input type="text" id="fname" name="firstName" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3" placeholder="John" required />
                    </div>
                    <div class="flex-1">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                        <input type="text" id="lname" name="lastName" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Doe" required />
                    </div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Street Address</label>
                    <input type="text" id="street" name="street" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Street Address" />
                </div>
                <div class="flex flex-row gap-4">
                    <div class="flex-1">
                        <label class="block mb-2 text-sm font-medium text-gray-900">City</label>
                        <input type="text" id="ucity" name="ucity" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3" placeholder="City" />
                        <input type="hidden" id="city" name="city" value="<?php echo esc_attr($city); ?>" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3" placeholder="City" />
                    </div>
                    <div class="flex-1">
                        <label class="block mb-2 text-sm font-medium text-gray-900">State </label>
                        <input type="text" id="ustate" name="ustate"  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="State" required />
                        <input 
                            type="hidden" 
                            id="state" 
                            name="state" 
                            value="<?php echo esc_attr($state); ?>" 
                            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" 
                            placeholder="State" 
                            required 
                        />                    
                    </div>
                    <div class="flex-1">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Zipcode</label>
                        <input type="text" id="zipcode" name="zipcode" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Zipcode" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Comments</label>
                    <textarea id="comment" name="comment" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Leave a comment..." required></textarea>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center bg-[#96B93A] text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Submit Review</button>
            </div>
        </form>
    </div>
</div>




<script>
    jQuery(document).ready(function ($) {
    $('#submit-review-form').on('submit', function (e) {
        e.preventDefault();
        // Gather form data
        var formData = $(this).serialize();
        // AJAX request
        $.ajax({
            url: ajaxurl, // AJAX URL provided by WordPress
            type: 'POST',
            data: {
                action: 'submit_review', // Custom action name
                formData: formData // Serialized form data
            },
            success: function (response) {
                if (response.success) {
                    alert('Review submitted successfully!');
                    $('#submit-review-form')[0].reset(); // Reset form after successful submission
                } else {
                    alert('Error: ' + response.data);
                }
            },
            error: function (xhr, status, error) {
                alert('There was an error submitting the review.');
            }
        });
    });
});

</script>