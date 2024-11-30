<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        $products = Product::with('category')->orderBy('id', 'DESC')->take(6)->get();
        $categories = Category::all();
    
        $popularProducts = Product::select('products.*')
            ->join('transaction_details', 'products.id', '=', 'transaction_details.product_id')
            ->selectRaw('count(transaction_details.product_id) as product_count')
            ->groupBy('products.id')
            ->orderByRaw('product_count DESC')
            ->take(6)
            ->get();
    
        return view('front.index', [
            'products' => $products,
            'categories' => $categories,
            'popularProducts' => $popularProducts,
        ]);
    }

    public function details(Product $product){
        $randomProducts = Product::where('id', '!=', $product->id)->inRandomOrder()->limit(4)->get(); 
        return view('front.details', [
            'product' => $product,
            'randomProducts' => $randomProducts,
        ]);
    }

    public function search(Request $request){
        $keyword = $request->input('keyword');

        $products = Product::where('name', 'LIKE',  '%'. $keyword. '%')->get();
        return view('front.search',[
            'products' => $products,
            'keyword' => $keyword
        ]);
    }

    public function category(Category $category){
        $products = Product::where('category_id', $category->id)->with('category')->get();

        return view('front.category',[
            'products' => $products,
            'category' => $category
        ]);
    }
}
