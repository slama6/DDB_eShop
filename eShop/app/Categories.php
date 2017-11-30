<?php namespace App;

//use Jenssegers\Mongodb\Eloquent\Model; //Illuminate\Database
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model {

    public static function getCategories(){
        $categories = DB::collection('categories')->get();
        return $categories;
    }




}