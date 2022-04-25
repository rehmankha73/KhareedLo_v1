<div class="flex flex-row py-4">
    <div class="w-1/3 pb-4">
        <section class="flex flex-row justify-between items-center py-4 mb-4 border-b border-gray-200">
            <h1>Filters:</h1>
            <button class="text-blue-500">CLEAR ALL</button>
        </section>

        <section class="mb-2 py-4 border-b border-gray-200">
            <h2 class="text-2xl font-bold">Search Product</h2>
            <div class="my-2 pr-3 flex flex-row">
                <input wire:model="search" class="rounded w-full" type="text" placeholder="Search any product">
{{--                <button class="w-1/3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search--}}
{{--                </button>--}}
            </div>
        </section>

        @if($categories->count() > 0)
        <section class="my-4 py-4 border-b border-gray-200">
            <h2 class="text-2xl font-bold">Product Category</h2>
            {{ print_r($selected_categories); }}

            @foreach($categories as $id => $category)
            <div class="my-2">
                <label>
                    <input wire:model="selected_categories" type="checkbox" value="{{ $id }}" id="{{ $id }}">
                    {{ $category }} {{ $id }}
                </label>
            </div>
            @endforeach
        </section>
        @endif

        <section class="my-4 py-4 border-b border-gray-200">
            <h2 class="text-2xl font-bold">Product Category</h2>
            <div class="my-2">
                <label>
                    <input type="checkbox">
                    Category
                </label>
            </div>


            <div class="my-2">
                <label>
                    <input type="checkbox">
                    Category
                </label>
            </div>

            <div class="my-2">
                <label>
                    <input type="checkbox">
                    Category
                </label>
            </div>

            <div class="my-2">
                <label>
                    <input type="checkbox">
                    Category
                </label>
            </div>
        </section>

        <section class="my-4 py-4 border-b border-gray-200">
            <h2 class="text-2xl font-bold">Product Category</h2>
            <div class="my-2">
                <label>
                    <input type="checkbox">
                    Category
                </label>
            </div>


            <div class="my-2">
                <label>
                    <input type="checkbox">
                    Category
                </label>
            </div>

            <div class="my-2">
                <label>
                    <input type="checkbox">
                    Category
                </label>
            </div>

            <div class="my-2">
                <label>
                    <input type="checkbox">
                    Category
                </label>
            </div>
        </section>
    </div>

    <div class="w-2/3 px-4 pb-4">
        <section class="flex flex-row justify-between items-center py-2 mb-4">
            <span>Showing 12 out of 100</span>
            <label>
                <select>
                    <option>Option 1</option>
                    <option>Option 1</option>
                    <option>Option 1</option>
                    <option>Option 1</option>
                </select>
            </label>
        </section>

        @if($products->count() > 0)
            <div>
                @foreach($products as $product)
                    <div
                        class="bg-gray-50 rounded p-4 flex flex-row justify-start items-center mb-4 rounded-md space-x-4">
                        <div class="w-1/4">
                            <a href="{{ route('products.show' , ['slug' => $product->slug]) }}">
                                <img width="200" height="200" src="{{ $product->featured_image_url }}"
                                     alt="Product image">
                            </a>
                        </div>

                        <div class="pb-4 w-1/2">
                            <div class="mb-2">
                                <a href="{{ route('products.show' , ['slug' => $product->slug]) }}">
                                    <h1 class="font-bold text-xl">
                                        {{ $product->name }}
                                    </h1>
                                </a>
                                <span
                                    class="font-bold text-sm text-gray-400">{{ $product->product_category->name }}</span>
                            </div>

                            <p class="text-sm text-gray-400 my-4">
                                {{ $product->description }}
                                {{--                                    {{ substr($product->description, 0, 100) }}--}}
                            </p>
                        </div>

                        <div class="w-1/4">
                            <div class="my-2">
                                <p class="text-lg text-yellow-400">$ {{ $product->unit_price }}</p>
                            </div>


                            <div class="my-2">
                                <p class="text-sm text-gray-400">(103 Reviews)</p>
                            </div>

                            <div class="my-2 flex flex-row items-center space-x-2">
                                    <span class="flex">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg"><path
                                                d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd"
                                                                                                 d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                                 clip-rule="evenodd"></path></svg>
                                        <span class="ml-3">Cart</span>
                                    </span>

                                <span class="flex">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd"
                                                                                      d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                                                      clip-rule="evenodd"></path></svg>
                                        <span class="ml-3">Wishlist</span>
                                    </span>
                            </div>

                            <div class="my-2">
                                @if($product->in_cart)
                                    <button
                                        wire:click="removeFromCart({{ $product }})"
                                        class="w-full bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                                        Remove From Cart
                                    </button>
                                @else
                                    <button
                                        wire:click="addToCart({{ $product }})"
                                        class="w-full bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                        Add to Cart
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div>
                {{--                {{ $products->links() }}--}}
            </div>
        @else
            <span>No any product founds</span>
        @endif

    </div>
</div>
