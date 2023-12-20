<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="http://cdn.font-store.ir/yekan.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-cover bg-center" style="background-image: url('{{asset('menu_show_background.jpg')}}')">
    <div class="min-h-screen ">
        <!-- Page Content -->
        <main class="container mx-auto p-6 mt-10  h-screen rounded-lg">
            <div class="h-full px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
                <div class="text-center">
                    <h2 class="text-4xl font-semibold tracking-tighter text-zinc-900">
                    {{$menu->name}}
                    </h2>
                </div>
                <div class="grid gap-2 mt-12 text-center md:grid-cols-3">
                    @forelse ($menu->titles as $title)
                        <div
                            class="w-full mt-5 max-w-md p-4 bg-white border bg-purple-100 border-gray-300 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex items-center justify-between mb-4">
                                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">
                                    {{ $title->name }}
                                </h5>
                            </div>
                            <hr class="border-b border-dashed border-blue-400" />
                            <div class="flow-root">
                                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($title->items as $item)
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center">
                                                
                                                <div class="flex-1 text-right min-w-0 ms-4">
                                                    <p
                                                        class="text-sm font-medium text-gray-900 truncate font-semibold dark:text-white">
                                                        {{ $item->name }}
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                        {{ $item->desc }}
                                                    </p>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    {{ $item->price }}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                    @empty
                        <div class="text-center">
                            <h2 class="text-4xl font-semibold tracking-tighter text-zinc-900">
                                موردی برای نمایش وجود ندارد.

                            </h2>
                        </div>
                    @endforelse ($menu->titles as $title )

                </div>
            </div>
        </main>
    </div>
</body>

</html>
