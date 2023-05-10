<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Lister les produits et les categories puis les filtrer par catégorie
     */
    public function index($categorie = 0) {

        //lister tout les produits
        $products = Product::orderBy('created_at' , 'desc')->paginate(10) ;

        if ($categorie != 0 ) {
        $products = Product::where('category_id' , $categorie)->orderBy('created_at' , 'desc' )->paginate(10) ;
        }

        $categories = Category::orderBy('name' , 'asc')->get() ;
    
        return view('welcome' , compact('products' , 'categories')) ;
        
    }


    //afficher le detail du produits mais aussi les produits similaires
    public function detail(Product $product) {
        
       // dd($product->category_id) ;
        //selectionner les produits qui ont la meme categorie que ce produit
        $products = Product::where('category_id' , $product->category_id)->orderBy('created_at' , 'desc' )->inRandomOrder()->limit(4)->get() ;

    return view ('detail' , compact ('product' , 'products')) ;

    }

    //Recoit la méthode a ajouter
    public function addToCart(Product $product) {
        //

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
