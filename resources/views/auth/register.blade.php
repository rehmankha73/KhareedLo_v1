<x-guest-layout>

    <div class="bg-white font-family-karla h-screen">

        <div class="w-full flex flex-wrap">

            <!-- Register Section -->
            <div class="w-full md:w-1/2 flex flex-col">

                <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-12">
                    <a href="#" class="bg-black text-white font-bold text-xl p-4" alt="Logo">Logo</a>
                </div>

                <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                    <p class="text-center text-3xl">Join Us.</p>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                    <form class="flex flex-col pt-3 md:pt-8" method="POST" action="{{ route('user.register') }}">
                        @csrf
                        <div class="flex flex-col pt-4">
                            <x-label class="text-lg" for="name" :value="__('Name')"/>

                            <x-input id="name"
                                     placeholder="John Smith"
                                     class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                                     type="text"
                                     name="name"
                                     :value="old('name')"
                            />
                        </div>

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

                        <div class="flex flex-col pt-4">
                            <x-label for="password_confirmation" class="text-lg" :value="__('Confirm Password')"/>

                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                     type="password"
                                     name="password_confirmation"
                                     placeholder="Password"
                                     class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                            />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button type="submit" class="ml-4"
                                      class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                    <div class="text-center pt-12 pb-12">
                        <p>Already have an account?
                            <a class="underline font-semibold" href="{{ route('user.login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </p>
                    </div>
                </div>

            </div>

            <!-- Image Section -->
            <div class="w-1/2 shadow-2xl">
                <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0"
                     alt="Background"/>
            </div>
        </div>
    </div>

</x-guest-layout>
