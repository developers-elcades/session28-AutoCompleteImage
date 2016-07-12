<?php

namespace Market\Http\Controllers\Product;

use Illuminate\Http\Request;

use Market\Http\Requests;
use Market\Http\Controllers\Controller;
use Session;



class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function  __construct()
    {

    }


    public function index()
    {

       return view('mark.index');

    }


    public function create()
    {
        //

        return view('mark.create');

    }


    public function store(Request $request)
    {


    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {


    }


    public function destroy($id)
    {


    }
}
