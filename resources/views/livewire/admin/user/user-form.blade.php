<div>
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="mt-10 sm:mt-0">
            <form wire:submit.prevent="submitForm">

                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">User Details</h3>
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
                                        <label for="name"
                                               class="block text-sm font-medium text-gray-700">Name</label>
                                        <input wire:model.defer="name" type="text" name="name" id="name"
                                               placeholder="Name"
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

                                    <div class="col-span-2">
                                        <label for="email"
                                               class="block text-sm font-medium text-gray-700">Email</label>
                                        <input wire:model.defer="email" type="text" name="email" id="email"
                                               placeholder="Email"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('email') border-red-600 @enderror">
                                        @error('email')
                                        <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-2">
                                        <label for="phone"
                                               class="block text-sm font-medium text-gray-700">Phone</label>
                                        <input wire:model.defer="phone" type="text" name="phone" id="phone"
                                               placeholder="Phone"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('phone') border-red-600 @enderror">
                                        @error('phone')
                                        <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-4">
                                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                        <input wire:model.defer="address" type="text" name="address" id="address"
                                               placeholder="address"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('address') border-red-600 @enderror">
                                        @error('address')
                                        <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-2">
                                        <label for="city"
                                               class="block text-sm font-medium text-gray-700">City</label>
                                        <input wire:model.defer="city" type="text" name="city" id="city"
                                               placeholder="City"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('city') border-red-600 @enderror">
                                        @error('city')
                                        <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-2">
                                        <label for="state"
                                               class="block text-sm font-medium text-gray-700">State</label>
                                        <input wire:model.defer="state" type="text" name="state" id="state"
                                               placeholder="State"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('state') border-red-600 @enderror">
                                        @error('state')
                                        <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-2">
                                        <label for="country"
                                               class="block text-sm font-medium text-gray-700">Country</label>
                                        <input wire:model.defer="country" type="text" name="country" id="country"
                                               placeholder="country"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('country') border-red-600 @enderror">
                                        @error('country')
                                        <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-2">
                                        <label for="postcode"
                                               class="block text-sm font-medium text-gray-700">Postcode</label>
                                        <input wire:model.defer="postcode" type="text" name="postcode" id="postcode"
                                               placeholder="postcode"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('postcode') border-red-600 @enderror">
                                        @error('postcode')
                                        <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-2">
                                        <label for="password"
                                               class="block text-sm font-medium text-gray-700">Password</label>
                                        <input wire:model.defer="password" type="text" name="password" id="password"
                                               placeholder="password"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('password') border-red-600 @enderror">
                                        @error('password')
                                        <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-2">
                                        <label for="password_confirmation"
                                               class="block text-sm font-medium text-gray-700">Password Confirmation</label>
                                        <input wire:model.defer="password_confirmation" type="text" name="password_confirmation" id="password_confirmation"
                                               placeholder="password_confirmation"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('password_confirmation') border-red-600 @enderror">
                                        @error('password_confirmation')
                                        <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="px-4 py-3 text-right sm:px-6 mt-5">
                            <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ empty($user) ? 'Add' : 'Update' }} Product
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
