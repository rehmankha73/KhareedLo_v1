<div>
    <div class="flex flex-row py-4">
        <div class="w-2/3 p-4 ">
            <div class="w-full bg-white overflow-auto space-y-6 shadow-lg rounded-lg p-4">
                <div class="flex cart-title justify-between border-b px-5 md:px-10 py-5">
                    <h1 class="font-semibold text-2xl">Shopping Cart</h1>
                    <h2 class="font-semibold text-2xl md:mr-10">Items</h2>
                </div>
                @if($items->count() > 0)
                    <table class="table-fixed table-width">
                        <thead>
                        <tr>
                            <th colspan="3" scope="col"
                                class="text-sm text-left px-6 py-3 font-medium text-gray-700 uppercase">
                                Product
                            </th>
                            <th scope="col" class="text-sm px-6 py-3 font-medium text-gray-700 uppercase">
                                Quantity
                            </th>
                            <th scope="col" class="text-sm px-6 py-3 font-medium text-gray-700 uppercase">
                                Price
                            </th>
                            <th scope="col" class="text-sm px-6 py-3 font-medium text-gray-700 uppercase">
                                Total
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key => $item)
                            <tr class="text-center border">
                                <td colspan="3" class="w-full px-6 py-4 whitespace-wrap text-justify">
                                    <div class="flex flex-row">
                                        <img alt="{{ $item->name }}" src="{{ $item->attributes['image_url'] }}"
                                             width="50" height="50"/>
                                        <p class="ml-4 text-md">{{ $item->name }}</p>
                                    </div>

                                    <span
                                        wire:click="removeItem({{ $item->id }})"
                                        class="cursor-pointer font-semibold hover:text-red-500 text-gray-500 text-xs">
                                            Remove
                                    </span>
                                </td>

                                <td class="inline-block mx-auto px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-center items-center">
                                        <svg
                                            wire:click="decreaseQuantity({{ $key }} ,{{ $item->id }})"
                                            class="fill-current text-gray-600 w-3 cursor-pointer"
                                            viewBox="0 0 448 512">
                                            <path
                                                d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                        </svg>

                                        <input
                                            wire:model.number="quantities.{{$key}}"
                                            class="mx-2 border text-center w-16"
                                            min="1"
                                            type="number" value="0"
                                            readonly
                                        />

                                        <svg
                                            wire:click="increaseQuantity({{ $key }} ,{{ $item->id }})"
                                            class="fill-current text-gray-600 w-3 cursor-pointer" viewBox="0 0 448 512"
                                        >
                                            <path
                                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                        </svg>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="text-center w-1/5 font-semibold text-sm align-top">$ {{ $item->price }}</span>
                                </td>

                                <td class="px-6 py-2 whitespace-nowrap">
                                    <span
                                        class="text-center w-1/5 font-semibold text-sm">$ {{ $item->getPriceSum() }}</span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="px-5 md:px-10 py-5 text-red-500"> No items found.</p>
                @endif

                <div class="flex justify-between table-width px-5 md:px-10 mt-10">
                    <a
                        href="{{ route('home') }}"
                        class="flex mt-3 font-semibold text-indigo-600 text-sm">
                        <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                            <path
                                d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/>
                        </svg>
                        <span>
                                    Continue Shopping
                            </span>
                    </a>

                    @if($items->count())
                        <div class="inline-block">
                            <button
                                wire:click="clearCart"
                                class="outline-none bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase"
                            >
                                Clear Cart
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="w-1/3 p-4">
            <div
                class="w-full p-5 shadow-lg rounded-lg mx-auto">
                <h2 class="font-semibold text-2xl border-b pb-8">Order Summary</h2>
                <div class="flex justify-between mt-10 mb-5">
                        <span class="font-semibold text-sm uppercase">
                              {{ $items->count() }} Items
                        </span>
                    <span class="font-semibold text-sm">$ {{ Cart::getSubTotal() }}</span>
                </div>

                {{--                <div class="flex justify-between mt-10 mb-5">--}}
                {{--                    <span class="font-semibold text-sm uppercase">Sales Tax</span>--}}
                {{--                    <span class="font-semibold text-sm">$ </span>--}}
                {{--                </div>--}}

                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span>Total cost</span>
                        <span>$  {{ Cart::getTotal() }} </span>
                    </div>
                    <a href="{{ route('checkout') }}"
                       class="block text-center py-2 w-full bg-blue-500 font-semibold hover:bg-blue-600 text-sm text-white uppercase"
                    >
                        Checkout
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
