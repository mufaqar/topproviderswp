<?php

    $state = get_query_var('state');
    $city = get_query_var('city');
    $zipcode = get_query_var('zipcode');
    $type = get_query_var('type');

    $URL = '';

    // Check if the state, city, and zipcode exist and build the URL accordingly
    if ($state && $city && $zipcode) {
        // All three exist: state, city, and zipcode
        $URL = "$state/$city/$zipcode/";
    } elseif ($state && $city) {
        // Only state and city exist
        $URL = "$state/$city/";
    } elseif ($state) {
        // Only state exists
        $URL = "$state/";
    } else {
        // None of the parameters exist
        $URL = '/';
    }

    $links = [
        'Internet Providers' => home_url('/internet/' . $URL),
        'TV Providers' => home_url('/tv/' . $URL),
        'Internet & TV Providers' => home_url('/internet-tv/' . $URL),
    ];

    function containsText($string, $matchText) {
        return strpos($string, $matchText) !== false;
    }
    
    // Function to determine the active type
    function getActiveType($inputString) {
        $activeType = '';
    
        if (containsText($inputString, "internet-tv")) {
            $activeType = "internet-tv";
        } elseif (containsText($inputString, "tv")) {
            $activeType = "tv";
        } elseif (containsText($inputString, "internet")) {
            $activeType = "internet";
        }
    
        return $activeType;
    }
?>


<section class="">
    <div class="">
        <div>
            <ul class="flex md:gap-5 gap-1.5 items-center">
                <?php 
                foreach ($links as $label => $href): 
                    $isActive = getActiveType($type)
                ?>
                    <li>
                        <?php 
                            $activeClass = (strpos($href, '/'.$type.'/') !== false) ? 'active-type' : '';
                        ?>
                        <a class="border-b-[2px] border-transparent hover:text-[#6041BB] <?php echo $activeClass; ?> pb-2 text-black md:text-base text-xs text-center inline-block w-full font-medium"
                        href="<?php echo htmlspecialchars($href, ENT_QUOTES, 'UTF-8'); ?>">
                            <?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    </li>

                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="border-b-[2px] w-full -mt-[2px]"></div>
</section>