<section class="container mx-auto bg-white p-6">
    <div class="flex flex-row">
        <div class="w-2/3 px-4 pb-4">
            <div class="rounded p-4 flex flex-row mb-4 rounded-md shadow-lg">
                <div class="w-1/2 px-4 pb-4">
                    <div class="">
                        <img width="500" height="500" src="{{ $product->featured_image_url }}"
                             alt="Product image">
                    </div>

                    <div class="my-4 flex flex-row space-x-2">
                        <img width="100" height="100" src="https://via.placeholder.com/640x480.png/00ff11?text=eos"
                             alt="Product image">

                        <img width="100" height="100" src="https://via.placeholder.com/640x480.png/00ff11?text=eos"
                             alt="Product image">

                        <img width="100" height="100" src="https://via.placeholder.com/640x480.png/00ff11?text=eos"
                             alt="Product image">

                    </div>
                </div>

                <div class="w-1/2 px-4 py-4">
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
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Buy Now
                        </button>

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

            <hr>

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
</section>
