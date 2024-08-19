<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">View Product</h2>
                </div>
            </div>
            {{-- content --}}
            <!-- Search Form -->
            <div class="container-fluid mx-4 mb-4">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <form action="{{ url('search_product') }}" method="GET">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search name or category product" name="search_product" aria-label="Search">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table table-striped mx-4">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name Product</th>
                        <th scope="col">Description Product</th>
                        <th scope="col">price Product</th>
                        <th scope="col">Category Product</th>
                        <th scope="col">Quantity Product</th>
                        <th scope="col">Image Product</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $product)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $product->title }}</td>
                            {{-- menampilkan hanya 4 kata --}}
                            <td>{!! Str::words($product->description, 4, '...') !!}</td>

                            <td>$ {{ $product->price }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <img src="products/{{ $product->image }}" width="75px" alt="...">
                            </td>
                            <td>
                                <a href="{{ url('edit_product', $product->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ url('delete_product', $product->id) }}" onclick="confirmation(event)"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- pagination, lihat di providers/AppServiceProviders --}}
            <div class="d-flex justify-content-center">
                {{ $data->links() }}
            </div>

        </div>
    </div>
    {{-- sweet alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        function confirmation(event) {
            event.preventDefault();
            var urlToRedirect = event.currentTarget.getAttribute('href');
            console.log(urlToRedirect);

            swal({
                    title: "Are You Sure to Delete This?",
                    text: "This delete will be permanent",
                    icon: "error",
                    // icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = urlToRedirect;
                    }
                });
        }
    </script>


    <!-- JavaScript files-->
    <script src="{{ asset('/admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('/admincss/js/front.js') }}"></script>
</body>

</html>
