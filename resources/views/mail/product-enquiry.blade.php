<x-layout title="Enquiry" :backLink="route('products.show', $enquiry['productSlug'])">
    <div class="container mx-auto card shadow-md mb-lg">
        <div class="card-body">
            <h1 class="card-title sm:text-3xl">New enquiry submitted</h1>
            <div class="divider"></div>
            <div class="sm:flex gap-20">
                <div>
                    <span class="mb-md block">
                        <h2 class="text-bold mb-2">Name</h2>
                        <p class="">{{ $enquiry['name'] }}</p>
                    </span>
                </div>
                <div>
                    <h2 class="text-bold mb-2">Email</h2>
                    <p class="">{{ $enquiry['email'] }}</p>
                </div>
            </div>


            <div class="divider"></div>

            <h2 class="bold mb-2">Product</h2>
            <a class="link" href="{{ route('products.show', $enquiry['productSlug']) }}">{{ $enquiry['productName'] }}</a>

            <div class="divider"></div>

            <h2 class="text-bold mb-2">Enquiry</h2>
            <p class="">{{ $enquiry['enquiry'] }}</p>
        </div>
    </div>
</x-layout>
