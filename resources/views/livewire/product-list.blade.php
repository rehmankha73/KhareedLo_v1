<div class="flex flex-row">
    <div class="w-1/3 px-4 pb-4">
        <section class="mb-2">
            <h2 class="text-2xl font-bold">Search Product</h2>
            <div class="w-full my-2 flex flex-row">
                <input class="rounded" type="text" placeholder="Search any product">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search</button>
            </div>
        </section>

        <section class="my-4">
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
        @if($products->count() > 0)
            <div>
                @foreach($products as $product)
                    <a href="{{ route('products.show' , ['slug' => $product->slug]) }}">
                        <div class="bg-gray-50 rounded p-4 flex flex-row mb-4 rounded-md shadow-lg">
                            <div>
                                <img width="200" height="200" src="{{ $product->featured_image_url }}"
                                     alt="Product image">
                            </div>

                            <div class="px-4 pb-4">
                                <div class="mb-2">
                                    <h1 class="font-bold text-xl">
                                        {{ $product->name }}
                                    </h1>
                                    <span
                                        class="font-bold text-sm text-gray-400">{{ $product->product_category->name }}</span>
                                </div>

                                <div class="flex flex-row justify-between my-2">
                                    <p class="text-lg text-yellow-400">{{ $product->unit_price }}</p>
                                    <p class="text-sm text-gray-400">(103 Reviews)</p>
                                </div>

                                <p class="text-sm text-gray-400 my-4">
                                    {{ substr($product->description, 0, 100) }}
                                </p>

                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div>
                {{ $products->links() }}
            </div>
        @else
            <span>No any product founds</span>
        @endif

    </div>
</div>
