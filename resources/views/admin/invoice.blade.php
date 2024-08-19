<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Laporan Pesanan</title>
</head>
<body>
    <div class="container my-4">
        <h2 class="text-center mb-4">Laporan Pesanan</h2>
        <hr>
        <div class="mb-4">
            <p><strong>Customer:</strong> {{ $order->name }}</p>
            <p><strong>Alamat:</strong> {{ $order->rec_address }}</p>
            <p><strong>Telepon:</strong> {{ $order->phone }}</p>
            <p><strong>Status:</strong> {{ $order->status }}</p>
        </div>

        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col" class="text-end">Harga</th>
                    <th scope="col" class="text-center">Gambar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="text-center">1</th>
                    <td>{{ $order->product->title }}</td>
                    <td class="text-end">$ {{ $order->product->price }}</td>
                    <td>
                        <img src="products/{{ $order->product->image }}" alt="Product Image" class="img-thumbnail" style="width: 150px;">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
