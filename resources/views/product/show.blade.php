<x-layout :title="'Product | ' . $product->name" backLink='/'>
    <h1 class="mb-lg">{{ $product->name }}</h1>

    <div class="md:flex gap-8">
        <div class="carousel h-fit flex-1 max-md:mb-md">
            @foreach ($product->images as $index => $image)
                <div id="slide{{ $index }}" class="carousel-item relative w-full">
                    <img src="{{ $image->imagePath }}" alt="{{ $image->imageAlt }}" class="w-full" />
                    <div class="carousel-buttons-container">
                        <a class="carousel-button-default  {{ $index - 1 < 0 ? 'carousel-button-disabled' : 'btn-secondary ' }}"
                            href="#slide{{ $index - 1 }}">❮</a>
                        <a href="#slide{{ $index + 1 }}"
                            class="carousel-button-default {{ $index + 1 == count($product->images) ? 'carousel-button-disabled' : 'btn-secondary ' }}">❯</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex-1 pb-md">
            <div class="*:mb-md ">
                {!! $product->description !!}
            </div>
            <p class="mb-md font-bold text-3xl">&pound;{{ number_format($product->price, 2) }}</p>
            <button onclick="enquiry_modal.showModal()" class="btn btn-secondary">Enquire</button>

            <dialog id="enquiry_modal" class="modal">
                <div class="modal-box bg-white">
                    <h2 class="mb-md">Enquiry form</h2>
                    <form id="enquiry_form" action="{{ route('enquiry.store') }}" method="POST" class="flex flex-col w-full gap-4">
                        @csrf
                        <input name="productName" type="text" hidden value="{{ $product->name }}">
                        <input name="productSlug" type="text" hidden value="{{ $product->slug }}">
                        <x-forms.input value='name' />
                        <x-forms.input value='email' />
                        <x-forms.text-area value='enquiry' />
                    </form>


                    <div class="modal-action">
                        <button type="submit" form="enquiry_form" class="btn btn-secondary">Submit</button>
                        <form method="dialog">
                            <button class="btn btn-accent">Cancel</button>
                        </form>
                    </div>
                </div>
            </dialog>
        </div>
         @if ($errors->any())
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    enquiry_modal.showModal()
                })
            </script>
        @endif
    </div>
</x-layout>
