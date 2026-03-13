<a href="/products/{{ $product->slug }}">
    <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}">
    {{ $product->name }}
</a>