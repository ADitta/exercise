<x-layout>
    <h1 class="mb-lg">{{ $product->name }}</h1>

   <div class="md:flex gap-8">
            <div class="carousel h-fit flex-1 max-md:mb-md">
                @foreach ($product->images as $index => $image)
                    <div id="slide{{ $index }}" class="carousel-item relative w-full">
                        <img src="{{ $image->imagePath }}" alt="{{ $image->imageAlt }}"
                            class="w-full" />
                        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                            <a class="carousel-button-default  {{ $index - 1 < 0 ? 'carousel-button-disabled' : 'btn-secondary '}}" href="#slide{{ $index - 1 }}">❮</a>
                            <a href="#slide{{ $index + 1 }}"
                                class="carousel-button-default {{ $index + 1 == count($product->images) ? 'carousel-button-disabled' : 'btn-secondary '}}">❯</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex-1 pb-md">
                <div class="*:mb-md ">
                    {!! $product->description !!}
                </div>
                <p class="mb-md font-bold text-3xl">&pound;{{ number_format($product->price, 2) }}</p>
                
            </div>
        </div>
</x-layout>