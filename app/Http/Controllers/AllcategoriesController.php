<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllcategoriesController extends Controller
{
    public function show() {

        return redirect('/categories/show', ['category', $category]);
    }
}
