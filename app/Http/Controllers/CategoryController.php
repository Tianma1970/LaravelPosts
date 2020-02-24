<?php

namespace App\Http\Controllers;

use Auth;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('parent_id', 0)->orderBy('name')->get();
        return view('categories/index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd("titta, det är en controller");
        if(Auth::guest()) {
            abort(403);
        }
        return view('categories/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name'      => 'required'
        ]);
        $validData['user_id'] = Auth::id();

        $category = Category::create($validData);

        return redirect('/categories')->with('status', 'category added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        return redirect('/home')->with('status', 'category deleted successfully');
    }

    /**
     * Collects the items to be deleted
     */

    public function deleteMany(Request $request)
    {
        $idsToDelete = $request->input('ids');
        Category::destroy($idsToDelete);
        return redirect('/categories')->with('status', 'categories deleted successfully');
    }

    public function show (Category $category)
    {
        return view('/categories/show', [
            'category'  => $category
        ]);

    }
}
