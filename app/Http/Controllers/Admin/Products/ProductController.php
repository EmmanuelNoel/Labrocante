<?php

namespace App\Http\Controllers\Admin\Products;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Produit;
use App\Models\ProduitMedia;
use App\Models\ProduitStatus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Services\ImageService;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Produit::with('category', 'medias', 'status', 'author')->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = CategoryProduct::all();
        $statuses = ProduitStatus::all();
        return view('admin.products.create', compact('categories', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request): RedirectResponse
    {
        if ($request->validated()) {
        //    $product = Produit::create($request->except('images', '_token'));
              $user_id = Auth::user()->id;
            $product = Produit::create(array_merge(
                $request->except('images', '_token'),
                ['user_id' => $user_id]
            ));

            if ($request->images && count($request->images) > 0) {
                (new ImageService())->storeProductImages($request->images, $product);
            }

            return redirect()->route('produits.index')->with([
                'message' => 'Create product successfully',
                'alert-type' => 'success'
            ]);
        }

        return back()->with([
            'message' => 'Something was wrong, please try again late',
            'alert-type' => 'error'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Produit::findOrFail($id)->with('category', 'medias', 'status', 'author')->first();
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
