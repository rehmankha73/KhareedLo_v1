<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
{{--            @include('layouts.navigation')--}}

{{--            <!-- Page Heading -->--}}
{{--            <header class="bg-white shadow">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    {{ $header }}--}}
{{--                </div>--}}
{{--            </header>--}}

<!-- Page Content -->
    <main class="flex h-screen bg-gray-100 font-sans">
        <!-- Side bar-->
        <div id="sidebar"
             class="h-screen w-16 menu bg-white text-white px-4 flex items-center nunito static fixed shadow">

            <ul class="list-reset ">
                <li class="my-2 md:my-0">
                    <a href="{{ route('admin.dashboard') }}"
                       class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                        <i class="fas fa-home fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Dashboard</span>
                    </a>
                </li>
                <li class="my-2 md:my-0 ">
                    <a href="{{ route('admin.product-categories.index') }}"
                       class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                        <i class="fas fa-tasks fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Product Category</span>
                    </a>
                </li>
                <li class="my-2 md:my-0">
                    <a href="{{ route('admin.products.index') }}"
                       class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                        <i class="fa fa-envelope fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Products</span>
                    </a>
                </li>
                <li class="my-2 md:my-0">
                    <a href="{{ route('admin.users.index') }}"
                       class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                        <i class="fas fa-chart-area fa-fw mr-3 text-indigo-400"></i><span
                            class="w-full inline-block pb-1 md:pb-0 text-sm">Users</span>
                    </a>
                </li>
                <li class="my-2 md:my-0">
                    <a href="#"
                       class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                        <i class="fa fa-wallet fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Payments</span>
                    </a>
                </li>
            </ul>

        </div>

        <div class="flex flex-row flex-wrap flex-1 flex-grow content-start pl-16">
            <div class="h-40 lg:h-20 w-full flex flex-wrap">
                <nav id="header"
                     class="bg-gray-200 w-full lg:max-w-sm flex items-center border-b-1 border-gray-300 order-2 lg:order-1">

                    <div class="px-2 w-full">
                        <select name=""
                                class="bg-gray-300 border-2 border-gray-200 rounded-full w-full py-3 px-4 text-gray-500 font-bold leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                                id="form-field2">
                            <option value="Default">default</option>
                            <option value="A">report a</option>
                            <option value="B">report b</option>
                            <option value="C">report c</option>
                        </select>
                    </div>

                </nav>
                <nav id="header1" class="bg-gray-100 w-auto flex-1 border-b-1 border-gray-300 order-1 lg:order-2">

                    <div class="flex h-full justify-between items-center">

                        <!--Search-->
                        <div class="relative w-full max-w-3xl px-6">
                            <div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
                                <svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                                </svg>
                            </div>

                            <input id="search-toggle" type="search" placeholder="search"
                                   class="block w-full bg-gray-200 focus:outline-none focus:bg-white focus:shadow-md text-gray-700 font-bold rounded-full pl-12 pr-4 py-3"
                                   onkeyup="updateSearchResults(this.value);">

                        </div>
                        <!-- / Search-->

                        <!--Menu-->

                        <div class="flex relative inline-block pr-6">

                            <div class="relative text-sm">
                                <button id="userButton" class="flex items-center focus:outline-none mr-3">
                                    <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300"
                                         alt="Avatar of User"> <span class="hidden md:inline-block">Hi, User </span>
                                    <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 129 129"
                                         enable-background="new 0 0 129 129">
                                        <g>
                                            <path
                                                d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"></path>
                                        </g>
                                    </svg>
                                </button>
                                <div id="userMenu"
                                     class="bg-white nunito rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                                    <ul class="list-reset">
                                        <li><a href="#"
                                               class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">My
                                                account</a></li>
                                        <li><a href="#"
                                               class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">Notifications</a>
                                        </li>
                                        <li>
                                            <hr class="border-t mx-2 border-gray-400">
                                        </li>
                                        <li>
                                            <form action="{{ route('admin.logout') }}" method="POST">
                                                @csrf
                                                <button
                                                    class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline"
                                                    type="submit"
                                                >
                                                    Logout
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <!-- / Menu -->
                    </div>

                </nav>
            </div>

            {{--Main Content--}}
            {{ $slot }}


        </div>
    </main>
</div>
</div>

@livewireScripts

@livewire('livewire-ui-modal')
</body>
</html>
