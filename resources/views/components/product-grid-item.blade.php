@props(['product'])
<a  class="product-grid-card group"  href="{{ route('products.show', $product) }}">
    <img class="transition-all duration-300 group-hover:scale-95" src="{{ asset($product->mainImage->imagePath) }}" alt="{{ $product->mainImage->imageAlt }}">
    {{ $product->name }}
</a>