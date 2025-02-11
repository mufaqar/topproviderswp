// ajax-search.js
jQuery(document).ready(function ($) {
    $('#searchProvidersForm').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        // Collect form data
        var zipCode = $('#zip_code').val();
        const typeValue = document.getElementById('customSelect').value;
        const type = typeValue.replace(" ", "-").toLowerCase()

        // Perform the AJAX request
        $.ajax({
            url: ajaxurl, // The URL for AJAX requests in WordPress
            type: 'POST',
            data: {
                action: 'search_providers',
                zip_code: zipCode,
                type:   type
,
            },
            beforeSend: function () {
                // You can add a loader or other actions here
            },
            success: function (response) {
                let url = response[0].slug;
               
                window.location = url;
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error: ' + status + ' - ' + error);
            }
        });
    });
    $('.providers_slides').slick({
        slidesToShow: 5,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false
    });
});

