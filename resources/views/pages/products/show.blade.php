<x-app-layout>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $product->main_image) }}" class="img-fluid rounded shadow" alt="{{ $product->name }}">
            </div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bold">{{ $product->name }}</h1>
                <hr class="my-4">
                <div class="product-description fs-5">
                    {!! $product->description !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
