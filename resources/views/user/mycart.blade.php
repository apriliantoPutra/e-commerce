<!DOCTYPE html>
<html>

<head>
    @include('home.css')
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

        {{-- content --}}
        <?php
        $totalPrice = 0;
        ?>



        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $cart)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $cart->product->title }}</td>
                        <td>${{ $cart->product->price }}</td>
                        <td>
                            <img src="/products/{{ $cart->product->image }}" style="width: 100px" alt="">
                        </td>
                    </tr>

                    <?php
                    $totalPrice = $totalPrice + $cart->product->price;
                    ?>

                @endforeach

            </tbody>
        </table>
        <!-- Total Price -->
        <div class="text-right mt-3 mb-5">
            <h4>Total Price: ${{ $totalPrice }}</h4>
        </div>

        <form class="my-5" action="{{ url('confirm_order') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name Receiver</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Receiver</label>
                <input type="text" class="form-control" id="phone" name="phone"
                    value="{{ Auth::user()->phone }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address Receiver</label>
                <textarea class="form-control" id="address" name="address" rows="3">{{ Auth::user()->address }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cash On Delivery</button>
            <a href="{{ url('stripe', $totalPrice) }}" class="btn btn-success">Pay Using Card</a>
        </form>
    </div>


    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
