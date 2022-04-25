<x-guest-layout>

    {{--Top Rated products--}}
    <section class="container mx-auto bg-white p-4">
        <nav class="flex flex-row border-b border-t border-gray-200 py-4 mb-2 space-x-2">
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

        @livewire('product-list')
    </section>

</x-guest-layout>
