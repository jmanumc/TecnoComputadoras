<?php

namespace TecnoComputadoras\Http\Controllers\Admin;

use Illuminate\Http\Request;

use TecnoComputadoras\Http\Requests;
use TecnoComputadoras\Http\Requests\CategoryRequest;
use TecnoComputadoras\Http\Controllers\Controller;

use TecnoComputadoras\Category;

use Laracasts\Flash\Flash;

class CategoriesController extends Controller
{
	public function index ()
	{
		$categories = Category::orderBy('id', 'DESC')->paginate(10);

		return view('admin.categories.index')->with('categories', $categories);
	}

    public function create ()
    {
    	return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
    	$category = new Category($request->all());
    	$category->save();

    	Flash::success('La categoria ' . $category->name . ' ha sido creada exitosamente');
    	return redirect()->route('admin.categories.index');
    }
}
