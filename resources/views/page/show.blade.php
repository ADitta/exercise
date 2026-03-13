<x-layout :title="$page->title">
    <x-slot:title>{{ $page->title }}</x-slot>
    <h1 class="mb-lg">{{ $page->title }}</h1>
    
    <div class="*:mb-md">
        {!! $page->content !!}
    </div>

    @isset($products)
        <div class="product-grid">
            @foreach ($products as $product)
                <x-product-grid-item :product="$product" />
            @endforeach
        </div>
    @endisset
</x-layout>
