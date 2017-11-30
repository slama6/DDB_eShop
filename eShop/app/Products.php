<?php namespace App;
/**
 * Created by PhpStorm.
 * User: tomas
 * Date: 29.11.17
 * Time: 20:03
 */



use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model {

    public static function getAll(){
        $products = DB::collection('products')->get();
        return $products;
    }



}