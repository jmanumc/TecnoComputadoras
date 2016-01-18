<?php

namespace TecnoComputadoras\Http\Controllers\Admin;

use Illuminate\Http\Request;

use TecnoComputadoras\Http\Requests;
use TecnoComputadoras\Http\Requests\StoreCategoryRequest;
use TecnoComputadoras\Http\Requests\UpdateCategoryRequest;
use TecnoComputadoras\Http\Controllers\Controller;

use TecnoComputadoras\Category;

use Laracasts\Flash\Flash;

class CategoriesController extends Controller
{
	public function __construct ()
	{
		$this->middleware('auth');
	}

	public function index ()
	{
		$categories = Category::orderBy('id', 'DESC')->paginate(10);

		return view('admin.categories.index')->with('categories', $categories);
	}

    public function create ()
    {
    	return view('admin.categories.create');
    }

    public function store (StoreCategoryRequest $request)
    {
    	$category = new Category($request->all());
    	$category->save();

    	Flash::success('La categoria ' . $category->name . ' ha sido creada exitosamente');
    	return redirect()->route('admin.categories.index');
    }

    public function edit ($id)
    {
    	$category = Category::findOrFail($id);

    	return view('admin.categories.edit')->with('category', $category);
    }

    public function update (UpdateCategoryRequest $request, $id)
    {
    	$category = Category::findOrFail($id);
    	$category->fill($request->all());
    	$category->save();

    	Flash::success('La categoria ' . $category->name . ' ha sido actualizada exitosamente');
    	return redirect()->route('admin.categories.index');
    }

    public function destroy ($id)
    {
    	$category = Category::findOrFail($id);
    	$category->delete();

    	Flash::success('La categoria ' . $category->name . ' ha sido eliminada exitosamente');
    }
}
