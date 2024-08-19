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
                    <h2 class="h5 no-margin-bottom">View Order</h2>
                </div>
            </div>
            {{-- content --}}
            <table class="table table-striped mx-4">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer Name </th>
                        <th scope="col">Address Customer</th>
                        <th scope="col">Phone Customer</th>
                        <th scope="col">Name Product</th>
                        <th scope="col">price Product</th>
                        <th scope="col">Image Product</th>
                        <th scope="col">Status</th>
                        <th scope="col">Change Status</th>
                        <th scope="col">Print PDF</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $order)

                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $order->name }}</td>
                        {{-- menampilkan hanya 4 kata --}}
                        <td>{{ $order->rec_address }}</td>

                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->product->title }}</td>
                        <td>$ {{ $order->product->price }}</td>

                        <td>
                            <img width="80" src="products/{{ $order->product->image }}" alt="">
                        </td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <a href="{{ url('on_the_way', $order->id) }}" class="btn btn-info mb-2">On the Way</a>
                            <a href="{{ url('delivery', $order->id) }}" class="btn btn-primary mb-2">Delivered</a>
                            <a href="{{ url('done', $order->id) }}" class="btn btn-success mb-2">Done</a>

                        </td>
                        <td>
                            <a href="{{ url('print_pdf', $order->id) }}" class="btn btn-secondary mb-2">Print</a>


                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>

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
