<div>
    <div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="mt-10 sm:mt-0">
                <form wire:submit.prevent="submitForm">

                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Product Details</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Use a permanent address where you can receive mail.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-4 gap-6">
                                        <div class="col-span-2">
                                            <label for="category" class="block text-sm font-medium text-gray-700">Product
                                                Category
                                                <select
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('product_category_id') border-red-600 @enderror"
                                                    wire:model="product_category_id"
                                                >
                                                    <option value="" selected> Please Select a Category</option>
                                                    @foreach($categories as $category)
                                                        {{ $category }}
                                                        <option
                                                            value="{{ $category->id }}"
                                                        >
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </label>
                                            @error('name')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Brand</label>
                                            <input wire:model.defer="brand" type="text" name="brand" id="brand"
                                                   placeholder="Product Brand"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('brand') border-red-600 @enderror">
                                            @error('brand')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Name</label>
                                            <input wire:model.defer="name" type="text" name="name" id="name"
                                                   placeholder="Product Name"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('name') border-red-600 @enderror">
                                            @error('name')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-2">
                                            <label class="block text-sm font-medium text-gray-700">Featured
                                                Image</label>
                                            <input wire:model.defer="featured_image" type="file"
                                                   placeholder="Featured Image"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('featured_image')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror

                                            <div class="my-4">
                                                @if (is_string($featured_image_url))
                                                    <img style="width: 250px;height: auto"
                                                         src="{{ Storage::url($featured_image_url) }}">
                                                @elseif($featured_image)
                                                    <img style="width: 250px;height: auto"
                                                         src="{{ $featured_image->temporaryUrl() }}">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-span-1">
                                            <label class="block text-sm font-medium text-gray-700">Image 1</label>
                                            <input wire:model.defer="image_1" type="file" placeholder="Featured Image 1"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('image_1')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror

                                            <div class="my-4">
                                                @if (is_string($image_1_url))
                                                    <img style="width: 250px;height: auto"
                                                         src="{{ Storage::url($image_1_url) }}">
                                                @elseif($image_1)
                                                    <img style="width: 250px;height: auto"
                                                         src="{{ $image_1->temporaryUrl() }}">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-span-1">
                                            <label class="block text-sm font-medium text-gray-700">Image 2</label>
                                            <input wire:model.defer="image_2" type="file" placeholder="Featured Image 2"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('image_2')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror

                                            <div class="my-4">
                                                @if (is_string($image_2_url))
                                                    <img style="width: 250px;height: auto"
                                                         src="{{ Storage::url($image_2_url) }}">
                                                @elseif($image_2)
                                                    <img style="width: 250px;height: auto"
                                                         src="{{ $image_2->temporaryUrl() }}">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-span-1">
                                            <label class="block text-sm font-medium text-gray-700">Image 3</label>
                                            <input wire:model.defer="image_3" type="file" placeholder="Featured Image 3"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('image_3')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror

                                            <div class="my-4">
                                                @if (is_string($image_3_url))
                                                    <img style="width: 250px;height: auto"
                                                         src="{{ Storage::url($image_3_url) }}">
                                                @elseif($image_3)
                                                    <img style="width: 250px;height: auto"
                                                         src="{{ $image_3->temporaryUrl() }}">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-span-1">
                                            <label class="block text-sm font-medium text-gray-700">Image 4</label>
                                            <input wire:model.defer="image_4" type="file" placeholder="Featured Image 4"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('image_4')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror

                                            <div class="my-4">
                                                @if (is_string($image_4_url))
                                                    <img style="width: 250px;height: auto"
                                                         src="{{ Storage::url($image_4_url) }}">
                                                @elseif($image_4)
                                                    <img style="width: 250px;height: auto"
                                                         src="{{ $image_4->temporaryUrl() }}">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-span-4">
                                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                            <textarea wire:model.defer="description" rows="3" name="description"
                                                      id="description"
                                                      class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('description') border-red-600 @enderror">
                                                {{ $description }}
                                            </textarea>
                                            @error('description')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

{{--                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">--}}
{{--                                    <button type="submit"--}}
{{--                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                                        Add Product--}}
{{--                                    </button>--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Product Prices & Stock</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Use a permanent address where you can receive mail.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-4 gap-6">

                                        <div class="col-span-2">
                                            <label for="unit_price" class="block text-sm font-medium text-gray-700">Unit
                                                Price</label>
                                            <input wire:model.defer="unit_price" type="number" min="1" name="unit_price"
                                                   id="unit_price" placeholder="Unit Price for product"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('unit_price') border-red-600 @enderror">
                                            @error('unit_price')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-2">
                                            <label for="whole_sale_price"
                                                   class="block text-sm font-medium text-gray-700">Whole Sale
                                                Price</label>
                                            <input wire:model.defer="whole_sale_price" type="number" min="1"
                                                   name="whole_sale_price" id="whole_sale_price"
                                                   placeholder="Whole Sale Price"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('whole_sale_price') border-red-600 @enderror">
                                            @error('whole_sale_price')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-2">
                                            <label for="initial_stock" class="block text-sm font-medium text-gray-700">Initial
                                                Stock</label>
                                            <input wire:model.defer="initial_stock" type="number" min="1"
                                                   name="initial_stock" id="initial_stock" placeholder="Initial Stock"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('initital_stock') border-red-600 @enderror">
                                            @error('initial_stock')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-2">
                                            <label for="current_stock" class="block text-sm font-medium text-gray-700">Current
                                                Stock</label>
                                            <input wire:model.defer="current_stock" type="number" min="1"
                                                   name="current_stock" id="current_stock"
                                                   placeholder="Whole Sale Price"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('current_stock') border-red-600 @enderror">
                                            @error('current_stock')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-4">
                                            <label class="inline-flex items-center">
                                                <input
                                                    wire:model="in_stock"
                                                    type="checkbox"
                                                    value="{{ $in_stock ? false : true }}"
                                                />
                                                <span class="ml-2">
                                             In Stock
                                            </span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Product Seo</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Use a permanent address where you can receive mail.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-4 gap-6">

                                        <div class="col-span-2">
                                            <label for="meta_title" class="block text-sm font-medium text-gray-700">Meta
                                                Title</label>
                                            <input wire:model.defer="meta_title" type="text" name="meta_title"
                                                   id="meta_title" placeholder="Meta Title"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('meta_title') border-red-600 @enderror">
                                            @error('meta_title')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-2">
                                            <label for="meta_keywords" class="block text-sm font-medium text-gray-700">Meta
                                                Keyword</label>
                                            <input wire:model.defer="meta_keywords" type="text" name="meta_keywords"
                                                   id="meta_keywords" placeholder="Meta Keywords"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('meta_keywords') border-red-600 @enderror">
                                            @error('meta_keywords')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-4">
                                            <label for="meta_description"
                                                   class="block text-sm font-medium text-gray-700">Meta
                                                Description</label>
                                            <textarea wire:model.defer="meta_description" rows="3"
                                                      name="meta_description" id="meta_description"
                                                      class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('meta_description') border-red-600 @enderror">
                                                {{ $meta_description }}
                                            </textarea>
                                            @error('meta_description')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-4 py-3 text-right sm:px-6 mt-5">
                                <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ empty($product) ? 'Add' : 'Update' }} Product
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
