<div>
    <form id="searchProvidersForm"  method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class=" rounded-2xl shadow-xl w-full sm:w-auto">
            <div class="relative gap-2 flex sm:pl-3 items-center sm:rounded-2xl w-full m-auto border sm:border-none border-gray-300 bg-gray-100 serch_form">
                <div class="flex items-center flex-1 w-full ">
                    <svg
                        stroke="currentColor"
                        fill="none"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="absolute text-2xl sm:text-3xl ml-2 sm:ml-1 text-[#6041BB]"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <input type="text" placeholder="Enter Zip Code" maxlength="5" id="zip_code" name="zip_code" class="w-full py-3 sm:py-5 pl-10 pr-8 outline-none md:w-80 bg-transparent rounded-l-md" value="" />
                </div>
                <input type="hidden" name="customSelect" id="customSelect" class="bg-transparent" value="internet" />
                <button class="px-3 md:px-8 py-3 sm:py-[20px] font-semibold text-white bg-[#6041BB] border-[#6041BB] sm:rounded-br-2xl sm:rounded-r-2xl" type="submit">Search</button>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="space-y-4 flex items-center gap-5 my-4">
                <label class="flex items-center rounded-md transition gap-2 cursor-pointer" id="internet">
                    <input type="radio" name="provider-types" value="internet" id="internet" class="w-6 h-6 text-blue-500" checked/>
                    <span class="text-lg font-medium truncate">Internet</span>
                </label>
                <label id="tv" class="flex items-center rounded-md !mt-0 transition gap-2 cursor-pointer">
                    <input type="radio" name="provider-types" value="tv" id="tv" class="w-6 h-6 text-blue-500" />
                    <span class="text-lg font-medium truncate">TV</span>
                </label>
                <label id="internet-tv" class="flex items-center !mt-0 rounded-md transition gap-2 cursor-pointer">
                    <input type="radio" name="provider-types" value="internet-tv" id="internet-tv" class="w-6 h-6 text-blue-500" />
                    <span class="text-lg font-medium truncate">Internet & TV</span>
                </label>
            </div>
        </div>
    </form>
</div>



<script>
document.addEventListener("DOMContentLoaded", function () {
    const radioButtons = document.querySelectorAll('input[name="provider-types"]');
    const customSelect = document.getElementById("customSelect");

    radioButtons.forEach((radio) => {
        radio.addEventListener("change", function () {
            customSelect.value = this.value;
        });
    });
});
</script>
