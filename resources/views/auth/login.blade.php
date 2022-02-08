<x-guest-layout>
    <div class="bg-white font-family-karla h-screen">

        <div class="w-full flex flex-wrap">

            <!-- Login Section -->
            <div class="w-full md:w-1/2 flex flex-col">

                <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                    <a href="#" class="bg-black text-white font-bold text-xl p-4">Logo</a>
                </div>

                <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                    <p class="text-center text-3xl">Welcome.</p>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')"/>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                    <form class="flex flex-col pt-3 md:pt-8" method="POST" action="{{ route('user.login') }}">
                        @csrf


                        <div class="flex flex-col pt-4">
                            <x-label for="email" class="text-lg" :value="__('Email')"/>
                            <x-input id="email"
                                     placeholder="your@email.com"
                                     class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                                     type="email"
                                     name="email"
                                     :value="old('email')"/>
                        </div>

                        <div class="flex flex-col pt-4">
                            <x-label for="password" class="text-lg" :value="__('Password')"/>

                            <x-input id="password" class="block mt-1 w-full"
                                     type="password"
                                     name="password"
                                     placeholder="Password"
                                     class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
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

                        <div class="flex flex-row items-center justify-end mt-4">
                            @if (Route::has('user.password.request'))
                                <div>
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                       href="{{ route('user.password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                </div>
                            @endif

                            <x-button type="submit" value="Log In"
                                      class="bg-black text-white font-bold text-sm hover:bg-gray-700 p-1 mt-8 ml-4">
                                {{ __('Log in') }}
                            </x-button>
                        </div>

                    </form>

                    <div class="text-center pt-12 pb-12">
                        <p>Don't have an account? <a href="#" class="underline font-semibold">Register here.</a></p>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <div class="w-1/2 shadow-2xl">
                <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0">
            </div>
        </div>
    </div>

</x-guest-layout>
