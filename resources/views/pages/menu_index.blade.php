@extends('template.defualt')

@section('content')
    <h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">منوها</h2>
    <hr>

    <div class="relative rounded-xl overflow-auto p-8">
        
        <div
            class="grid text-center lg:grid-cols-3 sm:grid-cols-1 gap-4 text-white text-sm text-center font-bold leading-6  rounded-lg">
            @forelse ( $menus as $menu )
                
            <a href="{{route('menu.show',$menu->id)}}">
                <div class="p-10 rounded-lg shadow-lg bg-teal-500  flex justify-between">
                    <div class="flex justify-between">
                        <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 4H1m3 4H1m3 4H1m3 4H1m6.071.286a3.429 3.429 0 1 1 6.858 0M4 1h12a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Zm9 6.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                        </svg>
                        <div class="mr-4 text-lg ">{{$menu->name}}</div>
                     </div>
                </div>
            </a>
        @empty

        <span>منو براي نمايش يافت نشد.</span>
            
        @endforelse

        </div>

    </div>
    <hr class="border-b border-dashed border-blue-600 w-8/12" />

    <div class="relative rounded-xl overflow-auto p-8">

        <div
            class="grid text-center lg:grid-cols-6 sm:grid-cols-1 gap-4 text-white text-sm text-center font-bold leading-6  rounded-lg">

            <a href="#" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal">
                <div class="p-10 rounded-lg shadow-lg bg-fuchsia-500  flex justify-between">
                    <div class="flex justify-between">
                        <svg class="w-10 h-10 text-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 5.757v8.486M5.757 10h8.486M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="mr-4 text-lg">افزودن منو</span>
                    </div>
                </div>
            </a>

        </div>

    </div>



    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        افزودن منو جدید
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    
                    <form class="space-y-4" method="POST" action="{{route('menu.store')}}">
                        @csrf
                        <div>
                            <label for="menu_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نام منو</label>
                            <input type="text" name="menu_name" id="menu"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="مثال: منو کافه" required autofocus >
                        </div>
                        
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">افزودن</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
