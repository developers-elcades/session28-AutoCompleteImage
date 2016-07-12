<?php

namespace Market\Http\Controllers\Product;

use Illuminate\Http\Request;

use Market\Http\Requests;
use Market\Http\Controllers\Controller;
use Market\Models\Product\Product;
use Market\Models\Product\Mark;
use Market\http\Requests\Product\ProductCreateRequest;
use Market\http\Requests\Product\ProductUpdateRequest;
use Session;
use DB;


class ProductController extends Controller
{

    public function index()
    {

        return View('product/index');
    }


    public function storeprocedure()
    {
        
        $products = DB::select("call sp_producto(2)");   
        return View('product/store')->with('products',$products);      
    
    }


    public function create()
    {


    }


    public function store(ProductCreateRequest $request)
    {


    }



    public function show($id)
    {
        

    }


    public function edit($id)
    {
    

    }

    
    public function update(ProductUpdateRequest $request, $id)
    {



    }



    public function destroy($id)
    {


                
    }
}
