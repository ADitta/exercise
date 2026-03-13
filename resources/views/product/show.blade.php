<x-layout>
    <h1 class="mb-md">{{ $product->name }}</h1>

    <div class="product-page">
        <div>
            <img src="{{ asset($product->mainImage->imagePath) }}" alt="{{ $product->mainImage->imageUrl }}">
        </div>

        <div>
            {!! $product->description !!}

            <p>&pound;{{ $product->price }}</p>
        </div>
    </div>
</x-layout>