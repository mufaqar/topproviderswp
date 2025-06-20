<?php
/** Template Name: Countries  */
 get_header(); ?>

<section class="py-24 bg-cover bg-no-repeat bg-center"
    style="background-image: linear-gradient(45deg, rgba(103,71,192, 1), rgba(103,71,192, 0.6)), url('<?php echo get_template_directory_uri(); ?>/images/contact-us-bg.webp')">
    <div class="container mx-auto px-4">
        <h1 class="sm:text-5xl text-4xl leading-normal font-semibold text-white text-center"><?php the_title() ?></h1>
    </div>
</section>
<section class="py-16">
    <div class="max-w-[1110px] w-full mx-auto px-4">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-6 text-center">Top Internet Providers by Country</h1>
        <?php 
            $countries_by_continent = [
                'Africa' => [
                    'Algeria', 'Angola', 'Benin', 'Botswana', 'Burkina Faso', 'Burundi', 'Cabo Verde',
                    'Cameroon', 'Central African Republic', 'Chad', 'Comoros', 'Congo (Brazzaville)',
                    'Congo (Kinshasa)', 'Djibouti', 'Egypt', 'Equatorial Guinea', 'Eritrea', 'Eswatini',
                    'Ethiopia', 'Gabon', 'Gambia', 'Ghana', 'Guinea', 'Guinea-Bissau', 'Ivory Coast',
                    'Kenya', 'Lesotho', 'Liberia', 'Libya', 'Madagascar', 'Malawi', 'Mali', 'Mauritania',
                    'Mauritius', 'Morocco', 'Mozambique', 'Namibia', 'Niger', 'Nigeria', 'Rwanda',
                    'São Tomé and Príncipe', 'Senegal', 'Seychelles', 'Sierra Leone', 'Somalia',
                    'South Africa', 'South Sudan', 'Sudan', 'Tanzania', 'Togo', 'Tunisia', 'Uganda',
                    'Zambia', 'Zimbabwe'
                ],
                'Asia' => [
                    'Afghanistan', 'Armenia', 'Azerbaijan', 'Bahrain', 'Bangladesh', 'Bhutan', 'Brunei',
                    'Cambodia', 'China', 'Cyprus', 'Georgia', 'India', 'Indonesia', 'Iran', 'Iraq',
                    'Israel', 'Japan', 'Jordan', 'Kazakhstan', 'Kuwait', 'Kyrgyzstan', 'Laos',
                    'Lebanon', 'Malaysia', 'Maldives', 'Mongolia', 'Myanmar', 'Nepal', 'North Korea',
                    'Oman', 'Pakistan', 'Palestine', 'Philippines', 'Qatar', 'Russia', 'Saudi Arabia',
                    'Singapore', 'South Korea', 'Sri Lanka', 'Syria', 'Tajikistan', 'Thailand',
                    'Timor-Leste', 'Turkey', 'Turkmenistan', 'United Arab Emirates', 'Uzbekistan',
                    'Vietnam', 'Yemen'
                ],
                'Europe' => [
                    'Albania', 'Andorra', 'Austria', 'Belarus', 'Belgium', 'Bosnia and Herzegovina',
                    'Bulgaria', 'Croatia', 'Czech Republic', 'Denmark', 'Estonia', 'Finland', 'France',
                    'Germany', 'Greece', 'Hungary', 'Iceland', 'Ireland', 'Italy', 'Kosovo', 'Latvia',
                    'Liechtenstein', 'Lithuania', 'Luxembourg', 'Malta', 'Moldova', 'Monaco',
                    'Montenegro', 'Netherlands', 'North Macedonia', 'Norway', 'Poland', 'Portugal',
                    'Romania', 'San Marino', 'Serbia', 'Slovakia', 'Slovenia', 'Spain', 'Sweden',
                    'Switzerland', 'Ukraine', 'United Kingdom', 'Vatican City'
                ],
                'North America' => [
                    'Antigua and Barbuda', 'Bahamas', 'Barbados', 'Belize', 'Canada', 'Costa Rica',
                    'Cuba', 'Dominica', 'Dominican Republic', 'El Salvador', 'Grenada', 'Guatemala',
                    'Haiti', 'Honduras', 'Jamaica', 'Mexico', 'Nicaragua', 'Panama', 'Saint Kitts and Nevis',
                    'Saint Lucia', 'Saint Vincent and the Grenadines', 'Trinidad and Tobago', 'United States'
                ],
                'South America' => [
                    'Argentina', 'Bolivia', 'Brazil', 'Chile', 'Colombia', 'Ecuador', 'Guyana',
                    'Paraguay', 'Peru', 'Suriname', 'Uruguay', 'Venezuela'
                ],
                'Oceania' => [
                    'Australia', 'Fiji', 'Kiribati', 'Marshall Islands', 'Micronesia', 'Nauru',
                    'New Zealand', 'Palau', 'Papua New Guinea', 'Samoa', 'Solomon Islands', 'Tonga',
                    'Tuvalu', 'Vanuatu'
                ],
                'Antarctica' => [
                    'Antarctica'
                ]
            ];

        foreach ($countries_by_continent as $continent => $countries) {
            echo '<div class="mb-10">';
            echo '<h2 class="text-2xl font-semibold text-gray-800 mb-4 border-b pb-2">' . htmlspecialchars($continent) . '</h2>';
            echo '<ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">';

            foreach ($countries as $country) {
                $url = home_url('/country/' . strtolower(str_replace(' ', '-', $country)));

                echo '<li class="bg-white shadow rounded p-3 hover:bg-blue-50 transition duration-200">';
                echo '<a href="' . esc_url($url) . '" class="text-blue-600 hover:underline">';
                echo htmlspecialchars($country);
                echo '</a>';
                echo '</li>';
            }
            echo '</ul>'; echo '</div>';
        }

      ?>
        </div>
    </div>

     </div>
</section>
<?php get_footer()?>