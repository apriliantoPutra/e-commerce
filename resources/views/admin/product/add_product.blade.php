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
                    <h2 class="h5 no-margin-bottom">Add Product</h2>
                </div>
            </div>
            {{-- content --}}
            <form class="mx-4 my-5" action="{{ url('store_product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title Product</label>
                    <input type="text" class="form-control" id="title" name="title_product" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description Product</label>
                    <textarea class="form-control" id="description" name="description_product" rows="3" required></textarea>

                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Category Product</label>
                    <select class="form-select" aria-label="Default select example" name="category_product">

                        @foreach ($category as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                </div>



                <div class="mb-3">
                    <label for="price" class="form-label">Price Product</label>
                    <input type="text" class="form-control" id="price" name="price_product" required>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity Product</label>
                    <input type="number" class="form-control" id="quantity" name="quantity_product" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile" name="image_product" >
                  </div>

                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>


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
