<x-guest-layout>

    {{--Show product--}}
    <section class="container mx-auto bg-white p-6">
        <nav class="flex flex-row border-t border-gray-200 py-4 mb-2 space-x-2">
            <span>
                <a href="#">Home</a>
            </span>
            <span>
            >
            </span>
            <span>
                Products
            </span>
        </nav>

    @livewire('product-show', ['product' => $product])
    </section>

</x-guest-layout>
