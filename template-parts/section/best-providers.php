<?php   $Recommend_Data = [
        [
            'devices' => '1-2',
            'best_use' => 'SD streaming on One device, Basic Browsing and web surfing, Emailing and downloading music',
            'recommend' => 'Up to 25 Mbps',
        ],
        [
            'devices' => '3-5',
            'best_use' => 'HD Streaming on Multiple Devices, Download large files quickly, Lag Free Multi-Player gaming',
            'recommend' => 'Up to 100 Mbps',
        ],
        [
            'devices' => '6-10',
            'best_use' => 'Ultra HD streaming on Multiple Devices, Lag Free Gaming on Multiple Console, Work from home and Video Conferencing',
            'recommend' => 'Up to 500 Mbps',
        ],
        [
            'devices' => '10-15',
            'best_use' => '4K HD streaming on Multiple Devices, Downloading and Gaming Simultaneously',
            'recommend' => 'Up to 1000 Mbps',
        ],
        [
            'devices' => 'More Than 15',
            'best_use' => 'All of the above plus 8K HD streaming on Multiple Devices. Best for Almost Anything',
            'recommend' => 'Up to 1000+ Mbps',
        ],
    ]; ?>
<?php if ($type === 'internet'): ?>
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="">
            <h2 class="text-2xl font-bold">Best <?php echo $type ?> Provider in <span
                    class="text-[#96B93A]"><?php echo $city ?> <?php echo $state ?></span></h2>
            <p class="PClass">
                 Top Providers hand picks <?php echo $fast_provider_details['title']; ?> as the best internet service
                provider in <?php echo $city ?>. <?php echo $fast_provider_details['title']; ?> offers reliable high
                speed internet service with robust download speed of up to {enter max download speed} Mbps. Their
                monthly plans begins at {enter price} /mo making it an all-around popular choice for <?php echo $city ?>
                residents.
            </p>
            <p class="PClass">
                Another pick for the area is {enter second listed provider name}, featuring a max download speed of up
                to {enter max download speed} Mbps. Starting at just {enter price} /mo and is a remarkable choice for
                streaming, gaming and working from home as well.
            </p>
        </div>
    </div>
</section>
<?php elseif ($type === 'landline'): ?>
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="">
            <h2 class="text-2xl font-bold">Best <?php echo $type ?> Service Providers in <span
                    class="text-[#96B93A]"><?php echo $city ?> <?php echo $state ?></span></h2>
            <p class="PClass">
            Top Providers choose {insert top rated phone provider} as the best home phone provider in {insert city
                name}. {insert provider name} offers home phone service with variety of features such as Caller ID, Call
                blocking, Three way calling, call forwarding, instant tracing to 911 services along with unlimited
                nationwide calling in the U.S, Canada, Puerto Rico Guam and U.S Virgin Island. High speed internet is
                required for the home phone to work. Monthly price is {insert price} per month when bundled with high
                speed internet.
            </p>
            <p class="PClass">
                {Insert second provider name} is another best landline phone option in {insert city name, state name}.
                It offers crystal clear voice quality for just {insert price} per month with features like unlimited
                nationwide calling, Caller ID on TV, Readable Voicemail. Upon signing up, you’ll have an option to get a
                new local telephone number or request to keep your existing number. Additionally, it allows you to block
                unwanted calls, forward select calls to another number when busy or forward all calls when you are away.
                With {insert provider name} you can block your outbound caller ID and place a don not disturb sign if
                you do not wish to receive incoming calls.
            </p>
        </div>
    </div>
</section>
<?php elseif ($type === 'home-security'): ?>
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="">
            <h2 class="text-2xl font-bold">Best <?php echo $type ?> Service Providers in <span
                    class="text-[#96B93A]"><?php echo $city ?> <?php echo $state ?></span></h2>
            <p class="PClass">
                Home is where your comfort resides, and you shouldn’t let your peace of mind be compromised by
                unexpected burglaries and intrusions. But how can you protect your belongings and loved ones from those
                incidents? The answer lies in investing in a cutting-edge home security system. These systems monitor
                every part of your home around the clock and instantly alert you whenever there is an unusual activity
                –even when you are not around.
            </p>
            <p class="PClass">
                If you’re living in {insert city name}, you probably know that the city is no stranger to theft crimes.
                To protect their homes, owners invest in state-of-the-art home security systems that add extra layers of
                safety around their abodes. Here are reputable home security service providers in {insert city name} you
                can trust.
            </p>

            <h2 class="text-2xl font-bold mt-5">ADT </h2>
            <p class="PClass">
                Headquartered in Boca Raton, ADT offers all-encompassing residential and commercial security solutions.
                The company’s unique strength lies in delivering systems that easily integrate with different kinds of
                Google Nest, Alexa, and Apple tools. And with flexible customization options, you’ll have more control
                over who can access your property.
            </p>
            <p class="PClass">Want more features and functionality without spending an arm and a leg? Choosing ADT
                should be your best bet.

            </p>

            <h2 class="text-2xl font-bold mt-5">Top Features </h2>
            <ul>
                <li>• Control panel: ADT Security touchscreen panel</li>
                <li>• Wireless controllers: Key fob and panic button</li>
                <li>• Indoor camera: ADT Indoor Camera or Google Nest Cam (indoor, wired)</li>
                <li>• Outdoor camera: ADT Outdoor Camera, Nest Cam (battery), or Nest Cam with floodlight</li>
                <li>• Video doorbell: ADT Video Doorbell Camera or Google Nest Doorbell</li>
            </ul>
            <p class="PClass">The price ranges from $29.99 to $45.99 per month. However, the exact number may differ
                depending on your equipment and services.</p>

            <h2 class="text-2xl font-bold mt-5">VIVINT </h2>
            <p class="PClass">VIVINT is one of those home security providers in {insert city name, state abbreviation}
                that stand out due to their modern approaches. </p>
            <p>From AI-powered cameras to cutting-edge sensors and ultra-smart locks, the company has earned a
                reputation for its innovative tools. Though the price point is a bit higher than ADT, the feature-rich
                solutions you’ll get will ensure ultimate protection for your home. Their representatives are also
                highly responsive and get back to you without delays.</p>
            <h2 class="text-2xl font-bold mt-5">Top Features </h2>
            <ul>
                <li>• VIVINT Smart Hub</li>
                <li>• Motion sensors</li>
                <li>• Glass break sensors</li>
                <li>• Entry sensors</li>
                <li>• Smoke and CO detectors</li>
                <li>• Kwikset smart lock</li>
                <li>• VIVINT Outdoor Camera Pro</li>
            </ul>
            <p class="PClass">The price of VIVINT plans ranges from $4.99 to $39.99 per month.</p>


            <h2 class="text-2xl font-bold mt-5">FRONTPOINT </h2>
            <p class="PClass">FRONTPOINT focuses on customizability and a no-commitment approach, and their customer
                service is second to none. Most of the company’s components come with web and mobile apps that allow you
                to configure and control functionalities on the go. Recently, they also introduced a geo-fencing
                function that sends you reminders when you’ve gone far away from your home without turning the system
                on.</p>
            <h2 class="text-2xl font-bold mt-5">Top Features </h2>
            <ul>
                <li>• Door/window sensors</li>
                <li>• Motion sensors</li>
                <li>• Glass break sensor</li>
                <li>• Video doorbell</li>
                <li>• Outdoor security cameras</li>
                <li>• Indoor security cameras</li>
                <li>• Yale smart locks</li>
            </ul>
            <p class="PClass">The cheapest FRONTPOINT package costs $79. It includes 1 hub, 1 keypad, 2 door/window
                sensors, and 1 set of yard signs and window decals.</p>


            <h2 class="text-2xl font-bold mt-5">BRINKS HOME </h2>
            <p class="PClass">The security threats don’t follow a 9-5 schedule. They can happen in the middle of the
                night, during the day, or when you are away on a holiday.
            </p>
            <p class="PClass">Brinks Home’s round-the-clock security solutions offer you the peace of mind that comes
                with knowing that your home is under surveillance 24/7. Unlike other security systems that solely rely
                on homeowners to notice a threat and respond, Brinks Home has trained professionals ready to act as soon
                as the alarm goes off. </p>
            <h2 class="text-2xl font-bold mt-5">Top Features </h2>
            <ul>
                <li>• IQ 2.0 control panel</li>
                <li>• Motion sensor</li>
                <li>• Door sensors</li>
                <li>• SkyBell slim line video doorbell</li>
                <li>• Outdoor camera</li>
                <li>• Yard signs and stickers</li>
            </ul>
            <p class="PClass">The price starts from $39.99 and goes up to $49.99 per month.</p>




        </div>
    </div>
</section>
<?php endif; ?>

<?php if ($type === 'internet'): ?>
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <h2 class="text-2xl font-bold capitalize leading-10">
                Internet Facts for
                <span class="text-[#96B93A]">
                    <?php echo esc_html($city); ?>, <span class="uppercase"><?php echo esc_html($state); ?></span>
                </span>
            </h2>
        </div>
        <div class="grid md:grid-cols-4 grid-cols-1 gap-6">
            <div class="fact-box text-center">
                <div class="icon"><?php echo esc_html($total_provider); ?></div>
                <i class="fas fa-tag"></i>
                <h3 class="mt-4 text-lg font-bold">Available Internet Providers</h3>
                <p class="mt-1 text-base"><?php echo esc_html($total_provider . ' total providers'); ?></p>
            </div>


            <div class="fact-box text-center">
                <div class="icon"><?php echo $total_services_type ?></div>
                <i class="fas fa-wrench"></i>
                <h3 class="mt-4 text-lg font-bold">Available Technology Types</h3>
                <p class="mt-1 text-base">
                    <?php echo display_unique_service_types($provider_ids)?>
                </p>
            </div>

            <div class="fact-box text-center">
                <div class="icon">01</div>
                <i class="fas fa-gauge"></i>
                <h3 class="mt-4 text-lg font-bold">Max Download Speed</h3>
                <p class="mt-1 text-base"><?php echo esc_html($fast_provider_details['speed'] . ' Mbps'); ?></p>
            </div>

            <div class="fact-box text-center">
                <div class="icon">01</div>
                <i class="fas fa-money-check"></i>
                <h3 class="mt-4 text-lg font-bold">Cheapest Plan</h3>
                <p class="mt-1 text-base"><?php echo esc_html('$ ' .$fast_provider_details['price']); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <h2 class="text-2xl font-bold capitalize leading-10">
                How Much Speed Do I Need For My Home?
            </h2>
            <p class="PClass">
                How much internet speed is needed for my household? You may ask
                this question to yourself whenever shopping for an Internet
                service provider but there is no simple or direct answer. It
                depends on several different factors such as number of connected
                devices to the internet, how they are being used, someone using it
                for online gaming, video conferencing, streaming on Netflix or
                even working from home. Some households may need more speed than
                the rest because of their use cases. That’s why  Top Providers has
                designed a chart to help you choose the right internet speed for
                your home for seamless online experience.
            </p>
        </div>
        <div class="shadow-xl border">
            <div class="grid md:grid-cols-3 grid-cols-3 gap-0 divide-x bg-[#6041BB]">
                <div class="md:p-5 p-2">
                    <h3 class="md:text-base text-xs text-center text-white">
                        Number of Devices
                    </h3>
                </div>
                <div class="flex items-center justify-center md:p-5 p-2">
                    <h3 class="md:text-base text-xs text-center text-white">
                        Best Used For
                    </h3>
                </div>
                <div class="flex items-center justify-center md:p-5 p-2">
                    <h3 class="md:text-base text-xs text-center text-white">
                        Recommended Internet Speed
                    </h3>
                </div>
            </div>
            <?php if (!empty($Recommend_Data)) : ?>
            <?php foreach ($Recommend_Data as $idx => $item) : ?>
            <?php $bestUse = explode(', ', $item['best_use']); ?>
            <div class="grid md:grid-cols-3 grid-cols-3 gap-0 divide-x dtable">
                <div class="flex items-center justify-center md:p-5 p-2">
                    <p class="text-center md:text-base text-xs">
                        <?php echo esc_html($item['devices']); ?>
                    </p>
                </div>
                <div class="md:p-5 p-2">
                    <div class="md:text-base text-xs">
                        <ul class="grid items-center">
                            <?php foreach ($bestUse as $featureIdx => $feature) : ?>
                            <li class="flex gap-2" key="<?php echo esc_attr($featureIdx); ?>">
                                <svg class="min-w-[1rem] h-4 mt-[2px] text-[#96B93A] font-extrabold" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-sm">
                                    <?php echo esc_html($feature); ?>
                                </span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="flex items-center justify-center md:p-5 p-2">
                    <p class="text-center md:text-base text-xs">
                        <?php echo esc_html($item['recommend']); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ($type === 'tv'): ?>
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="">
            <h2 class="text-2xl font-bold">Best Cable <?php echo $type ?> Providers in <span
                    class="text-[#96B93A]"><?php echo $city ?> </span></h2>

            <p class="PClass"> While Dish is present in <?php echo $city ?>, we recommend DIRECTV for you entertainment
                needs. DIRECTV offer a broad catalog of channels perfect for watching the latest local sports with
                neighbors or recording your favorite shows while you’re out grocery shopping.</p>

            <p class="PClass"> With DISH, you can choose from multiple tiers of cable TV service packages. This ranges
                from $84.99 for 190 total channels and up to $144.99 per month for over 290 channels. The biggest
                differences are the networks you choose, like ESPN and Disney at the lower end and STARZ and Bloomberg
                at the higher price. In addition, DISH offers easy-to-use accessories like a free DVR for recording all
                the shows you want using a voice-activated remote. Anyone with kids or those who dislike typing in long
                show names will appreciate the voice option. All these services can be bundled, and there are free
                offers for certain premium channels like Showtime and introductory prices upon request.</p>

            <p class="PClass">DirecTV offers HD-quality picture you want for stunning visuals and immersive audio.
                However, the pricing is a little different than dish. The regular introductory level of 165+ channels
                (including the Sports Package free for 3 months) runs $69.99 per month. You can find deals that knock
                off $10-$20 monthly for the first few months, but you must sign a two-year contract for this satellite
                cable service. Another aspect of DirecTV that is different is the available tiers. You can select four
                different packages that vary based on sports, premium networks, and top-tier providers like Max,
                Paramount+, and Showtime. There is a bit more price flexibility in your monthly home expenses. In
                addition, DirecTV has the most comprehensive regional sports networks for local channels and unlimited
                hours for cloud DVR storage, making it a must-have if you never want to miss a college or league game.
            </p>

        </div>
    </div>
</section>
<?php endif; ?>