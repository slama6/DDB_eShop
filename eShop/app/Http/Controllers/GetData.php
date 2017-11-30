<?php
/**
 * Created by PhpStorm.
 * User: tomas
 * Date: 29.11.17
 * Time: 17:59
 */

namespace App\Http\Controllers;
use App\Categories;
use App\Products;

class GetData extends  Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index(){
        $categories = $this->loadCategories();
        $products = $this->loadProducts();
        $data=array('categories'=>$categories, 'products'=>$products);
        return view('products')->with($data);
    }

    public function loadCategories()
    {
        $categories = Categories::getCategories();
        return $categories;
    }

    public function loadProducts()
    {
        $products = Products::getAll();
        return $products;
    }



}