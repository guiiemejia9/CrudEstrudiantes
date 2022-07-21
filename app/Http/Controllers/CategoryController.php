<?php

namespace App\Http\Controllers;


;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\createcategoryrequest;
use Session;
class CategoryController extends Controller
{
    public function create()
    {
        return view("category.create");
    }

    public function store(createcategoryrequest $request)
    {
        $data = $request->all();


        Category::create([


            'description' => $data['description'],

        ]);
        Session::flash('save','Se ha registrado correctamente');
        return redirect()->route('category-add');
    }
    }
