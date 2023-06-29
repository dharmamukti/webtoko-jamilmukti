<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class ProfilController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        $products = Product::paginate($request->input('limit', 32));

        return view('pages.profil', [
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::where('categories_id', $category->id)->paginate($request->input('limit', 32));

        return view('pages.profil', [
            'categories' => $categories,
            'category' => $category,
            'products' => $products
        ]);
    }
}
