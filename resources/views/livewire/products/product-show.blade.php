<div>
    <div class="flex flex-row">
        <div class="w-1/5 px-2">
            <div class="mb-2">
                <img width="250" height="200" src="{{ $product->featured_image_url }}"
                     alt="Product image">
            </div>

            <div class="mb-2">
                <img width="250" height="200" src="{{ $product->featured_image_url }}"
                     alt="Product image">
            </div>

            <div class="mb-2">
                <img width="250" height="200" src="{{ $product->featured_image_url }}"
                     alt="Product image">
            </div>

        </div>

        <div class="w-1/2 px-2 pb-4">
            <img src="{{ $product->featured_image_url }}" alt="Product Image">
        </div>

        <div class="w-1/2 px-4 pb-4">
            <div class="mb-2">
                <h1 class="font-bold text-xl">
                    {{ $product->name }}
                </h1>
                <span class="font-bold text-sm text-gray-400">{{ $product->product_category->name }}</span>
            </div>

            <div class="flex flex-row justify-between my-2">
                <p class="text-lg text-yellow-400">${{ $product->unit_price }}</p>
                <p class="text-sm text-gray-400">
                    (103 Reviews)
                </p>
            </div>

            <p class="text-sm text-gray-400 my-4">
                {{ $product->description }}
            </p>

            <div class="flex flex-row my-2">
                <p class="text-sm text-yellow-400">Tag:</p>
                <p class="text-sm text-gray-400">
                    Product Tag, Product Tag, Product Tag,
                </p>
            </div>

            <div class="flex flex-row space-x-2">
{{--                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">--}}
{{--                    Buy Now--}}
{{--                </button>--}}

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add to Cart
                </button>
            </div>

            <div class="my-4">
                <h1>Product details</h1>
                <p class="text-sm text-gray-400 my-4">
                    {{ $product->description }}
                </p>
            </div>

        </div>
    </div>

    <div class="my-4">
        <h1>Description</h1>
        {{ $product->description }}
    </div>

    <div class="flex flex-row">
        <div class="w-2/3 px-4 pb-4">

            <section class="my-4">
                <div class="flex flex-row justify-between my-4">
                    <h1>Product Reviews</h1>
                    <select>
                        <option>Select an option</option>
                        <option>Select an option</option>
                        <option>Select an option</option>
                        <option>Select an option</option>
                    </select>
                </div>
                <div>
                    <div class="bg-gray-50 rounded p-4 flex flex-row mb-4 rounded-md shadow-lg">
                        <div>
                            <img src="https://via.placeholder.com/640x480.png/00ff11?text=eos" alt="Product image">
                        </div>

                        <div class="px-4 pb-4">
                            <div class="mb-2">
                                <h1 class="font-bold text-xl">
                                    Product
                                </h1>
                                <span class="font-bold text-sm text-gray-400">Product Category</span>
                            </div>

                            <p class="text-sm text-gray-400 my-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ducimus illo
                                labore, maxime
                                neque quas voluptatum? Accusantium assumenda at consectetur consequatur doloribus
                                minima,
                                mollitia neque nesciunt officia quod, totam voluptatum?
                            </p>

                        </div>
                    </div>
                </div>
            </section>

        </div>

        <div class="w-1/3 px-4 pb-4">

            <a href="#">
                <div class="bg-gray-50 rounded p-4 flex flex-row mb-4 rounded-md shadow-lg">
                    <div>
                        <img width="100" height="100" src="https://via.placeholder.com/640x480.png/00ff11?text=eos"
                             alt="Product image">
                    </div>

                    <div class="px-4 pb-4">
                        <div class="mb-2">
                            <h1 class="font-bold text-xl">
                                Product
                            </h1>
                            <span class="font-bold text-sm text-gray-400">Product Category</span>
                        </div>

                    </div>
                </div>
            </a>

            <a href="#">
                <div class="bg-gray-50 rounded p-4 flex flex-row mb-4 rounded-md shadow-lg">
                    <div>
                        <img width="100" height="100" src="https://via.placeholder.com/640x480.png/00ff11?text=eos"
                             alt="Product image">
                    </div>

                    <div class="px-4 pb-4">
                        <div class="mb-2">
                            <h1 class="font-bold text-xl">
                                Product
                            </h1>
                            <span class="font-bold text-sm text-gray-400">Product Category</span>
                        </div>

                    </div>
                </div>
            </a>

            <a href="#">
                <div class="bg-gray-50 rounded p-4 flex flex-row mb-4 rounded-md shadow-lg">
                    <div>
                        <img width="100" height="100" src="https://via.placeholder.com/640x480.png/00ff11?text=eos"
                             alt="Product image">
                    </div>

                    <div class="px-4 pb-4">
                        <div class="mb-2">
                            <h1 class="font-bold text-xl">
                                Product
                            </h1>
                            <span class="font-bold text-sm text-gray-400">Product Category</span>
                        </div>

                    </div>
                </div>
            </a>

            <a href="#">
                <div class="bg-gray-50 rounded p-4 flex flex-row mb-4 rounded-md shadow-lg">
                    <div>
                        <img width="100" height="100" src="https://via.placeholder.com/640x480.png/00ff11?text=eos"
                             alt="Product image">
                    </div>

                    <div class="px-4 pb-4">
                        <div class="mb-2">
                            <h1 class="font-bold text-xl">
                                Product
                            </h1>
                            <span class="font-bold text-sm text-gray-400">Product Category</span>
                        </div>

                    </div>
                </div>
            </a>

            <a href="#">
                <div class="bg-gray-50 rounded p-4 flex flex-row mb-4 rounded-md shadow-lg">
                    <div>
                        <img width="100" height="100" src="https://via.placeholder.com/640x480.png/00ff11?text=eos"
                             alt="Product image">
                    </div>

                    <div class="px-4 pb-4">
                        <div class="mb-2">
                            <h1 class="font-bold text-xl">
                                Product
                            </h1>
                            <span class="font-bold text-sm text-gray-400">Product Category</span>
                        </div>

                    </div>
                </div>
            </a>
        </div>
    </div>

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

    </section>
</div>
