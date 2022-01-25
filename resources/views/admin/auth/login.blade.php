<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Login Template by David Grzyb</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        .body-bg {
            background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
<header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-4xl font-bold text-white text-center">Admin Panel</h1>
    </a>
</header>

<main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl">Welcome to Startup</h3>
        <p class="text-gray-600 pt-2">Sign in to your account.</p>
    </section>

    <section class="mt-10">

        {{--<!-- Session Status -->--}}
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        {{--<!-- Validation Errors -->--}}
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form class="flex flex-col" method="POST" action="{{ route('admin.postLoginForm') }}">
            @csrf
            <div class="p-4 rounded shadow-lg">

                <div class="mb-6 pt-3 rounded">
                    <x-label class="block text-sm font-bold mb-2 ml-3" for="email" :value="__('Email')"/>

                    <x-input
                        id="email"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                        type="email"
                        name="email"
                        :value="old('email')"
                        autofocus
                    />
                </div>

                <div class="mb-6 pt-3 rounded ">
                    <x-label class="block text-sm font-bold mb-2 ml-3" for="password" :value="__('Password')"/>

                    <x-input id="password"
                             class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                             type="password"
                             name="password"
                             autocomplete="current-password"
                    />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                               name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex justify-end">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button
                            class="bg-purple-600 hover:bg-purple-700 text-white font-bold p-2 rounded shadow-lg hover:shadow-xl transition duration-200"
                            type="submit"
                        >
                            Sign In
                        </button>

                </div>
            </div>
        </form>
    </section>
</main>

<div class="max-w-lg mx-auto text-center mt-12 mb-6">
    <p class="text-white">Don't have an account? <a href="#" class="font-bold hover:underline">Sign up</a>.</p>
</div>

<footer class="max-w-lg mx-auto flex justify-center text-white">
    <a href="#" class="hover:underline">Contact</a>
    <span class="mx-3">•</span>
    <a href="#" class="hover:underline">Privacy</a>
</footer>
</body>
</html>
