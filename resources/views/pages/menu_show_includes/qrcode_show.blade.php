<div id="qrcode_menu_modal" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="qrcode_menu_modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">

                <svg class="mx-auto mb-4 text-yellow-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                    viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 19C14.9706 19 19 14.9706 19 10C19 5.02944 14.9706 1 10 1C5.02944 1 1 5.02944 1 10C1 14.9706 5.02944 19 10 19Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15 11C15 13.038 12.761 15.5 10 15.5C7.239 15.5 5 13.038 5 11C5 12.444 15 12.444 15 11Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"
                        fill="currentColor" />
                    <path
                        d="M13.5 8C14.3284 8 15 7.32843 15 6.5C15 5.67157 14.3284 5 13.5 5C12.6716 5 12 5.67157 12 6.5C12 7.32843 12.6716 8 13.5 8Z"
                        fill="currentColor" />
                </svg>

                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                    تبریک! شما با موفقیت به مرحله نهايي طراحی منوی دیجیتال خود رسيده ايد. حالا فقط
                    چند گام دیگر باقی مانده است. در کادر زیر، آدرس منوی دیجیتال شما نمایش داده شده است. از این طریق،
                    می‌توانید در هر لحظه به منو دسترسی پیدا کرده و آن را به اشتراک بگذارید. همچنین، در زیر آن یک دکمه
                    قرار دارد که با استفاده از آن، می‌توانید 
                    Qrcode
                     این آدرس را دانلود کنید و آن را برای مشتریان خود
                    قرار دهید تا بتوانند به سرعت و راحتی به منو دسترسی یابند. منتظر ارتقاء تجربه مشتریانتان با منوی
                    دیجیتال شما باشید.

                    <input type="text" dir="ltr" class="border-2 rounded-lg w-full h-12 px-4" value="{{$menu->link}}" />

                </h3>
                <a href="{{route('menu.qrcode.image',$menu->id)}}" download>
                    <button  type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        دانلود qrcode
                    </button>
                </a>
                <a href="{{$menu->link}}" >
                    <button  type="button"
                        class="text-white bg-purple-600 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        پیش نمایش منو
                    </button>
                </a>
                
            </div>
        </div>
    </div>
</div>
