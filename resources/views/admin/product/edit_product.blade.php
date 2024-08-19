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
                    <h2 class="h5 no-margin-bottom">Edit Product</h2>
                </div>
            </div>
            {{-- content --}}
            <form class="mx-4 my-5" action="{{ url('update_product', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title Product</label>
                    <input type="text" class="form-control" id="title" name="title_product" value="{{ $data->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description Product</label>
                    <textarea class="form-control" id="description" name="description_product" rows="3" required>{{ $data->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category Product</label>
                    <select class="form-select" aria-label="Default select example" name="category_product" id="category">
                        @foreach ($category as $cat)
                        <option value="{{ $cat->name }}" {{ $cat->name == $data->category ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                        @endforeach
                    </select>
                </div>




                <div class="mb-3">
                    <label for="price" class="form-label">Price Product</label>
                    <input type="text" class="form-control" id="price" name="price_product" value="{{ $data->price }}" required>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity Product</label>
                    <input type="number" class="form-control" id="quantity" name="quantity_product" value="{{ $data->quantity }}" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Input Image</label>
                    <!-- Tampilkan gambar saat ini jika ada -->
                    @if($data->image)
                        <div class="mb-2">
                            <img src="{{ asset('products/' . $data->image) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    @endif

                    <input class="form-control" type="file" id="formFile" name="image_product">
                </div>


                <button type="submit" class="btn btn-primary">Edit Product</button>
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
