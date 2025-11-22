<?php
  
namespace App\Http\Controllers;
  
use id;
use App\Models\Product;
// use Illuminate\Container\Attributes\Storage;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

  
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        $products = Product::latest()->paginate(5);
        
        return view('dashboard.catalog', ['title' => 'Halaman Catalog'],compact('products'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.create_catalog', ['title' => 'Create Catalog Jongveksi']);
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            'name_produk' => 'required',
            'price' => 'required',
            'description' => 'required',
            'sub_judul' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
      
        Product::create($input);
       
        return back()->with('success', 'Product created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
public function show($id)
{
    $product = Product::findOrFail($id);
     $products = \App\Models\Product::all();
    return view('detail-produk', ['title' => 'Detail Produk'], compact('product', 'products'),);
}
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $catalog): View
    {
        return view('dashboard.edit_catalog', ['title' => 'Halaman Edit Catalog'] ,compact('catalog'));
    }
  
    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Product $catalog)
{
    // Validasi input
    $request->validate([
        'name_produk' => 'required',
        'price' => 'required',
        'description' => 'required',
        'sub_judul' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
    ]);

    // Ambil input selain file
    $input = $request->only(['name_produk', 'sub_judul', 'price', 'description']);

    // Cek apakah ada file yang di-upload
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('img/'), $filename);
        $input['image'] = $filename;

        // Opsional: hapus gambar lama
        if ($catalog->image && file_exists(public_path('img/' . $catalog->image))) {
            unlink(public_path('img/' . $catalog->image));
        }
    }

    // Update data
    $catalog->update($input);

    return redirect()->route('catalog.index')->with('success', 'Product updated successfully.');
}

  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $product= Product::findOrFail($id);
        $filepath= public_path('img/' . $product->image);

       if(file_exists($filepath)){
        unlink($filepath);
    }
    $product->delete();
        return redirect()->route('catalog.index')
                         ->with('success', 'Product deleted successfully');
    }
}