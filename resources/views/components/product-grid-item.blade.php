@props(['product'])
<a href="{{ route('products.show', $product) }}">
    <img src="{{ asset($product->mainImage->imagePath) }}" alt="{{ $product->name }}">
    {{ $product->name }}
</a>