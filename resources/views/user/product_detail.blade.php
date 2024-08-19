<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>

<body>
    @include('home.header')

    {{-- content --}}
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('products/' . $data->image) }}" alt="{{ $data->title }}" class="img-fluid shadow-sm" style="max-height: 400px; object-fit: cover;">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-3">{{ $data->title }}</h2>
                <h4 class="text-muted mb-4">Category: {{ $data->category }}</h4>
                <h5 class="text-success mb-4">Price: ${{ $data->price }}</h5>
                <p class="mb-4">{{ $data->description }}</p>
                <p class="mb-4">Quantity: {{ $data->quantity }}</p>
                <a href="{{ url('add_cart', $data->id) }}" class="btn btn-primary btn-lg">Add to cart</a>
            </div>
        </div>
    </div>

    @include('home.footer')

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
