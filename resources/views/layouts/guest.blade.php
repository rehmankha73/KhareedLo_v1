<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @livewireStyles
</head>
<body>

<div class="container mx-auto border border-black">
    <!--Nav-->
    <nav id="header" class="bg-gray-100 w-full z-30 top-0">
        <div class="w-full flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <div class="">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                   href="{{ route('home') }}">
                    <svg class="fill-current text-gray-800 mr-2" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24"
                         viewBox="0 0 24 24">
                        <path
                            d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z"/>
                    </svg>
                    KhareedLo
                </a>
            </div>

            {{--        <label for="menu-toggle" class="cursor-pointer md:hidden block">--}}
            {{--            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"--}}
            {{--                 viewBox="0 0 20 20">--}}
            {{--                <title>menu</title>--}}
            {{--                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>--}}
            {{--            </svg>--}}
            {{--        </label>--}}
            {{--        <input class="hidden" type="checkbox" id="menu-toggle"/>--}}

            {{--        <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">--}}
            {{--            <nav>--}}
            {{--                <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">--}}
            {{--                    <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"--}}
            {{--                           href="#">Shop</a></li>--}}
            {{--                    <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"--}}
            {{--                           href="#">About</a></li>--}}
            {{--                </ul>--}}
            {{--            </nav>--}}
            {{--        </div>--}}
            <div class=" flex items-center">
                <div class="pl-3 inline-block no-underline hover:text-black flex space-x-2">
                    <a class="pl-3 inline-block no-underline hover:text-black" href="{{ route('cart') }}">
                        <span class="badge inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-gray-100 bg-blue-500 rounded-full">
                            0
                        </span>
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24"
                             viewBox="0 0 24 24">
                            <path
                                d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z"/>
                            <circle cx="10.5" cy="18.5" r="1.5"/>
                            <circle cx="17.5" cy="18.5" r="1.5"/>
                        </svg>
                    </a>
                    @auth
                        <a href="{{ route('user.dashboard') }}"
                           class="inline-block text-sm text-gray-700 dark:text-gray-500 underline flex">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" viewBox="0 0 24 24">
                                <circle fill="none" cx="12" cy="7" r="3"/>
                                <path
                                    d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z"/>
                            </svg>
                            <span class="inline-block">
                            Dashboard
                        </span>
                        </a>

                        <a href="{{ route('user.logout') }}"
                           class="inline-block text-sm text-gray-700 dark:text-gray-500 underline flex">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            <span class="inline-block">
                            Logout
                        </span>
                        </a>
                    @else

                        <a href="{{ route('user.login') }}"
                           class="inline-block text-sm text-gray-700 dark:text-gray-500 underline flex">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            <span class="inline-block">
                            Log in
                        </span>
                        </a>

                        <a href="{{ route('user.register') }}"
                           class="inline-block ml-4 text-sm text-gray-700 dark:text-gray-500 underline flex">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                            </svg>
                            <span class="inline-block">
                            Register
                        </span>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    {{--nav bar--}}
    <div class="w-full flex flex-wrap items-center justify-center mt-0 px-6">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                <li>
                    <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                       href="{{ route('home') }}"
                    >
                        Home
                    </a>
                </li>

                <li>
                    <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                       href="{{ route('products.index') }}"
                    >
                        Products
                    </a>
                </li>

                <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                       href="#">Services</a></li>
                <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                       href="#">Blog</a></li>
                <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                       href="#">Deals</a></li>
            </ul>
        </nav>
    </div>

    <div class="w-full mt-0">
        {{ $slot }}
    </div>

    <footer class="bg-white py-8 border-t border-gray-400">

        <div
            class="container px-10 py-16 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-2/5 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a href="#" class="inline-flex mx-auto tracking-tight items-center space-x-1 font-semibold text-lg">
                    <img class="w-28" src="assets/img/logo.svg" alt="logo">
                </a>
                <p class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    vel mi ut felis tempus
                    commodo
                    nec id erat. Suspendisse consectetur dapibus velit ut lacinia.</p>
            </div>

            <div class="w-3/5 flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <ul>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">First Link</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">Second Link</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">Third Link</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <ul>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">First Link</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">Second Link</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">Third Link</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <ul>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">First Link</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">Second Link</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">Third Link</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <ul>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">First Link</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">Second Link</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">Third Link</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="bg-white-smoke px-5">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
                    <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1"
                       target="_blank">@knyttneve</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
               viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
               viewBox="0 0 24 24">
            <path
                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
               class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none"
                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
            </div>
        </div>
    </footer>
</div>
@livewireScripts
</body>
</html>
