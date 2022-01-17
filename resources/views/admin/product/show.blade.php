<x-app-layout>
    <div class="bg-white p-8 m-8 rounded-md w-full">

        <div class="grid grid-cols-6 gap-4 max-w-screen-2xl">
            <div class="col-span-2 p-4">
                <div class="my-4">
                    <img class="w-full" src="{{ \Illuminate\Support\Facades\Storage::url($product->featured_image)}}"/>
                </div>

                @if(!empty($product->image_1) || !empty($product->image_2) || !empty($product->image_3) || !empty($product->image_4))
                    <div class="grid  grid-cols-4 gap-2 my-4">
                        <div class="col-span-1">
                            <div class="">
                                <img class="" src="{{ \Illuminate\Support\Facades\Storage::url($product->image_1)}}"/>
                            </div>
                        </div>

                        <div class="col-span-1">
                            <div class="">
                                <img class="" src="{{ \Illuminate\Support\Facades\Storage::url($product->image_2)}}"/>
                            </div>
                        </div>

                        <div class="col-span-1">
                            <div class="">
                                <img class="" src="{{ \Illuminate\Support\Facades\Storage::url($product->image_3)}}"/>
                            </div>
                        </div>

                        <div class="col-span-1">
                            <div class="">
                                <img class="" src="{{ \Illuminate\Support\Facades\Storage::url($product->image_4)}}"/>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="col-span-4 p-4">
                <h2>{{ $product->product_code }}</h2>
                <h3>{{ $product->name }}</h3>
                <p>Category: {{ $product->product_category->name }}</p>
                <span><b>Unit Price:</b> {{ $product->unit_price }}</span> <span><b>Whole Sale Price:</b> {{ $product->whole_sale_price }}</span><br>
                <span><b>Initial Stock:</b> {{ $product->initial_stock }}</span> <span><b>Current Stock:</b> {{ $product->current_stock }}</span><br>
                @if($product->in_stock)
                    <span class="inline-block py-1 font-semi-bold text-green-900 leading-tight my-2"><b>Status:</b>
                    <span class="p-2 text-green-900 bg-green-200 rounded-full">Available in Stock</span>
                </span>
                @else
                    <span class="inline-block py-1 font-semi-bold text-red-900 leading-tight my-2"><b>Status:</b>
                   <span class="p-2 text-red-900 bg-red-200 rounded-full">Out of Stock</span>
                </span>
                @endif

                <br>
                @if(!empty($product->colors))
                    <span class="inline-block py-1 font-semi-bold text-red-900 leading-tight my-2"><b>Color:</b>
                    </span>
                    @foreach($product->colors as $color)
                        <span> {{ $color }} ,</span>
                    @endforeach
                @endif

                <br>
                @if(!empty($product->sizes))
                    <span class="inline-block py-1 font-semi-bold text-red-900 leading-tight my-2"><b>Color:</b>
                    </span>
                    @foreach($product->sizes as $size)
                        <span> {{ $size }} ,</span>
                    @endforeach
                @endif

                <br>
                @if(!empty($product->others))
                    <span class="inline-block py-1 font-semi-bold text-red-900 leading-tight my-2"><b>Color:</b>
                    </span>
                    @foreach($product->others as $other)
                        <span> {{ $other }} ,</span>
                    @endforeach
                @endif

                <p>{{ $product->description }}</p>

                <br>
                <span><b>Meta Tile:</b> {{ $product->meta_title }}</span> <span><b>Meta_KeyWord:</b> {{ $product->meta_keywords }}</span><br>
                <p>{{ $product->meta_description }}</p>

            </div>
        </div>
    </div>
</x-app-layout>
