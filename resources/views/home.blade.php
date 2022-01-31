<x-guest-layout>
    {{--hero section--}}
    <header class="w-full bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right"
            style="max-width:1600px; height: 400px; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">
        <div class="container mx-auto">
            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
                <h1 class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
                   href="#">products</a>
            </div>
        </div>
    </header>

    <main class="font-sans text-gray-900 antialiased">

        {{--Top Rated products--}}
        @if($products->count() > 0)
        <section class="bg-white py-2">
            <div class="flex items-center flex-wrap pt-4 pb-6">
                <section class="w-full z-30 top-0 px-6 py-1">
                    <div class="w-full container mx-auto flex items-center justify-between mt-0 px-2 py-3 space-x-4">
                        <div class="w-1/2">
                            <h2 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl">
                                Top Rated Products
                            </h2>
                        </div>

                        <div class="w-1/2">
                            <div class="flex flex-row justify-end items-center">
                                <span>Sort By:</span>

                                <div class="">
                                    <select>
                                        <option>Option 1</option>
                                        <option>Option 1</option>
                                        <option>Option 1</option>
                                        <option>Option 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="grid grid-cols-4 gap-6 p-6">
                    @foreach($products as $product)
                    <div class="col-span-1 border border-gray-300 rounded-md shadow-lg">
                        <a href="#">
                            <img class="hover:grow hover:shadow-lg border-t rounded-t-md"
                                 src="{{ $product->featured_image }}"
                            >

                            <div class="p-3 flex items-center justify-between">
                                <p class="">
                                    {{ $product->name }}
                                </p>
                                <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z"/>
                                </svg>
                            </div>
                            <div class="p-3 flex items-center justify-between">
                                <p class="pt-1 text-gray-900">{{ $product->unit_price }}</p>
                                <p class="pt-1 text-gray-900">3 Reviews</p>
                            </div>
                            <div class="p-3">
                                <p class="pt-1 text-gray-900">{{ substr($product->description,0,200) . '...' }}</p>

                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="p-6">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-auto block">Load More Products</button>
            </div>

        </section>
        @endif

        {{--promotion--}}
        <section class="w-full bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right"
                style="max-width:1600px; height: 400px; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">
            <div class="container mx-auto">
                <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
                    <h1 class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
                    <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
                       href="#">products</a>
                </div>
            </div>
        </section>

        {{--Top Sale Products--}}
        @if($products->count() > 0)
            <section class="bg-white py-2">
                <div class="flex items-center flex-wrap pt-4 pb-6">
                    <section class="w-full z-30 top-0 px-6 py-1">
                        <div class="w-full container mx-auto flex items-center justify-between mt-0 px-2 py-3 space-x-4">
                            <div class="w-1/2">
                                <h2 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl">
                                    Top Rated Products
                                </h2>
                            </div>

                            <div class="w-1/2">
                                <div class="flex flex-row justify-end items-center">
                                    <span>Sort By:</span>

                                    <div class="">
                                        <select>
                                            <option>Option 1</option>
                                            <option>Option 1</option>
                                            <option>Option 1</option>
                                            <option>Option 1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="grid grid-cols-4 gap-6 p-6">
                        @foreach($products as $product)
                            <div class="col-span-1 border border-gray-300 rounded-md shadow-lg">
                                <a href="#">
                                    <img class="hover:grow hover:shadow-lg border-t rounded-t-md"
                                         src="{{ $product->featured_image }}"
                                    >

                                    <div class="p-3 flex items-center justify-between">
                                        <p class="">
                                            {{ $product->name }}
                                        </p>
                                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                             xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24">
                                            <path
                                                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z"/>
                                        </svg>
                                    </div>
                                    <div class="p-3 flex items-center justify-between">
                                        <p class="pt-1 text-gray-900">{{ $product->unit_price }}</p>
                                        <p class="pt-1 text-gray-900">3 Reviews</p>
                                    </div>
                                    <div class="p-3">
                                        <p class="pt-1 text-gray-900">{{ substr($product->description,0,200) . '...' }}</p>

                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-6">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-auto block">Load More Products</button>
                </div>

            </section>

        @endif

        {{--Blogs--}}
        <section class="bg-white py-2">
            <div class="flex items-center flex-wrap pt-4 pb-6">
                <section class="w-full z-30 top-0 px-6 py-1">
                    <div class="w-full container mx-auto flex items-center justify-between mt-0 px-2 py-3 space-x-4">
                        <div class="w-1/2">
                            <h2 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl">
                                Blog
                            </h2>
                        </div>

                        <div class="w-1/2">
                            <div class="flex flex-row justify-end items-center">
                                <span>Sort By:</span>

                                <div class="">
                                    <select>
                                        <option>Option 1</option>
                                        <option>Option 1</option>
                                        <option>Option 1</option>
                                        <option>Option 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="grid grid-cols-3 gap-6 p-6">
                    <div class="col-span-1 border border-black">
                        <a href="#">
                            <img
                                class="hover:grow hover:shadow-lg"
                                src="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80"
                            >

                            <div class="p-3 flex items-center justify-between">
                                <p class="">Product Name</p>
                                <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z"/>
                                </svg>
                            </div>
                            <div class="p-3 flex items-center justify-between">
                                <p class="pt-1 text-gray-900">£9.99</p>
                                <p class="pt-1 text-gray-900">3 Reviews</p>
                            </div>
                            <div class="p-3">
                                <p class="pt-1 text-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi corporis excepturi laboriosam numquam officia pariatur quaerat ratione voluptas. Eum exercitationem id natus qui quidem recusandae!</p>

                            </div>
                        </a>
                    </div>

                    <div class="col-span-1 border border-black">
                        <a href="#">
                            <img class="hover:grow hover:shadow-lg"
                                 src="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80"
                            >

                            <div class="p-3 flex items-center justify-between">
                                <p class="">Product Name</p>
                                <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z"/>
                                </svg>
                            </div>
                            <div class="p-3 flex items-center justify-between">
                                <p class="pt-1 text-gray-900">£9.99</p>
                                <p class="pt-1 text-gray-900">3 Reviews</p>
                            </div>
                            <div class="p-3">
                                <p class="pt-1 text-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi corporis excepturi laboriosam numquam officia pariatur quaerat ratione voluptas. Eum exercitationem id natus qui quidem recusandae!</p>

                            </div>
                        </a>
                    </div>

                    <div class="col-span-1 border border-black">
                        <a href="#">
                            <img class="hover:grow hover:shadow-lg"
                                 src="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80"
                            >

                            <div class="p-3 flex items-center justify-between">
                                <p class="">Product Name</p>
                                <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z"/>
                                </svg>
                            </div>
                            <div class="p-3 flex items-center justify-between">
                                <p class="pt-1 text-gray-900">£9.99</p>
                                <p class="pt-1 text-gray-900">3 Reviews</p>
                            </div>
                            <div class="p-3">
                                <p class="pt-1 text-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi corporis excepturi laboriosam numquam officia pariatur quaerat ratione voluptas. Eum exercitationem id natus qui quidem recusandae!</p>

                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <div class="p-6">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-auto block">Load More Blogs</button>
            </div>

        </section>

        <section class="bg-white py-2">
            <div class="py-8 px-6">
                <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8"
                   href="#">
                    About Us & our Policy
                </a>

                <p class="mt-8 mb-8">This template is inspired by the stunning nordic minamalist design - in particular:
                    <br>
                    <a class="text-gray-800 underline hover:text-gray-900" href="http://savoy.nordicmade.com/"
                       target="_blank">Savoy
                        Theme</a> created by <a class="text-gray-800 underline hover:text-gray-900"
                                                href="https://nordicmade.com/">https://nordicmade.com/</a> and <a
                        class="text-gray-800 underline hover:text-gray-900" href="https://www.metricdesign.no/"
                        target="_blank">https://www.metricdesign.no/</a>
                </p>

                <p class="mb-8">Lorem ipsum dolor sit amet, consectetur <a href="#">random link</a> adipiscing elit, sed
                    do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas
                    accumsan
                    lacus vel facilisis volutpat. Vitae aliquet nec ullamcorper sit. Nullam eget felis eget nunc
                    lobortis mattis
                    aliquam. In est ante in nibh mauris. Egestas congue quisque egestas diam in. Facilisi nullam
                    vehicula ipsum
                    a arcu. Nec nam aliquam sem et tortor consequat. Eget mi proin sed libero enim sed faucibus turpis
                    in. Hac
                    habitasse platea dictumst quisque. In aliquam sem fringilla ut. Gravida rutrum quisque non tellus
                    orci ac
                    auctor augue mauris. Accumsan lacus vel facilisis volutpat est velit egestas dui id. At tempor
                    commodo
                    ullamcorper a. Volutpat commodo sed egestas egestas fringilla. Vitae congue eu consequat ac.</p>

            </div>

        </section>
    </main>
</x-guest-layout>
