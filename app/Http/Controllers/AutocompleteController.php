<?php

namespace Market\Http\Controllers;

use Illuminate\Http\Request;
use Market\Models\Product\Product;
use Response;
use Input;


class AutocompleteController extends Controller
{
    //

    public function index()
    {
    	return view('autocomplete');
    }


	public function autocomplete()
	{


		$queries = Product::where(function($query)
		{
	    	$term = Input::get('term');
	    	$query->where('name', 'like', '%'.$term.'%');
		})->take(6)->get();

		foreach ($queries as $query)
		{
		    $results[] = [ 'id' => $query->id, 'avatar' =>$query->image,'value' => $query->name];
		}
		return Response::json($results);
	

	}




}
