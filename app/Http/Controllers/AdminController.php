<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function view_category()
    {

        return view('admin.category', [
            'data' => Category::all()
        ]);
    }
    public function add_category(Request $request)
    {

        $category = new Category;
        $category->name = $request->add_category; // name dari kolom di tabel, sedangkan $request->add_category dari name form
        $category->save();


        // toastr()->addSuccess('Category added successfuly!!'); default
        toastr()->closeButton()->addSuccess('Category added successfuly!!');
        // toastr()->closeButton()->addWarning('Category added successfuly!!'); warning with button close
        return redirect()->back(); // kembali ke awal


    }
    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        toastr()->timeOut(3000)->closeButton()->success('Category delete successfuly!!');
        return redirect()->back();
    }
    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.edit_category', [
            'data' => $data
        ]);
    }

    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);
        $data->name = $request->update_category;
        $data->save();
        toastr()->timeOut(3000)->closeButton()->success('Category update successfuly!!');
        return redirect('/view_category');
    }


    // product
    public function add_product()
    {
        $category = Category::all();
        return view('admin.product.add_product', compact('category'));
    }
    public function store_product(Request $request)
    {
        $product = new Product;
        $product->title = $request->title_product;
        $product->description = $request->description_product;
        $product->price = $request->price_product;
        $product->category = $request->category_product;
        $product->quantity = $request->quantity_product;

        // image
        $image = $request->image_product;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            // $request->image->move('products', $imagename);
            $image->move('products', $imagename);
            $product->image = $imagename;
        }

        $product->save();
        toastr()->closeButton()->addSuccess('Product added successfuly!!');
        return redirect()->back();
    }
    public function view_product()
    {
        $data = Product::paginate(3); // hanya menampilkan 3
        return view('admin.product.view_product', compact('data'));
    }
    public function delete_product($id)
    {
        $data = Product::find($id); // menghapus keseluruhan pada database
        // menghapus gambar produk pada storage
        $image_path = public_path('products/' . $data->image);
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $data->delete();
        toastr()->timeOut(3000)->closeButton()->success('Product delete successfuly!!');
        return redirect()->back();
    }
    public function edit_product($id)
    {
        $category = Category::all();
        $data = Product::find($id);

        return view('admin.product.edit_product', compact('category', 'data'));
    }
    public function update_product(Request $request, $id)
    {
        $data = Product::find($id);
        $data->title = $request->title_product;
        $data->description = $request->description_product;
        $data->price = $request->price_product;
        $data->category = $request->category_product;
        $data->quantity = $request->quantity_product;

        $image = $request->image_product;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            // $request->image->move('products', $imagename);
            $image->move('products', $imagename);
            $data->image = $imagename;
        }

        $data->save();

        toastr()->timeOut(3000)->closeButton()->success('Product update successfuly!!');
        return redirect('/view_product');
    }

    public function search_product(Request $request)
    {
        $search = $request->search_product;
        $data = Product::where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('category', 'LIKE', '%' . $search . '%')
            ->paginate(3);

        return view('admin.product.view_product', compact('data'));
    }

    // order
    public function view_order()
    {
        $data = Order::all();
        return view('admin.order.view_order', compact('data'));
    }
    public function on_the_way($id)
    {
        $data = Order::find($id);
        $data->status = 'On The Way';
        $data->save();

        toastr()->timeOut(3000)->closeButton()->success('Order change to on the way successfuly!!');
        return redirect()->back();
    }
    public function delivery($id)
    {
        $data = Order::find($id);
        $data->status = 'Delivery';
        $data->save();

        toastr()->timeOut(3000)->closeButton()->success('Order change to delivery successfuly!!');
        return redirect()->back();
    }
    public function done($id)
    {
        $data = Order::find($id);
        $data->status = 'Done';
        $data->save();

        toastr()->timeOut(3000)->closeButton()->success('Order change to done successfuly!!');
        return redirect()->back();
    }

    // print
    public function print_pdf($id)
    {
        $order = Order::find($id);

        $pdf = Pdf::loadView('admin.invoice', compact('order')); // loadView halaman yg dicetak
        return $pdf->download('invoice.pdf'); // nama file pdf


    }
}
