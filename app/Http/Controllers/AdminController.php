<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    public function view_category(){
        return view('admin.category');
    }

    public function add_category(Request $request){
        $cat = new Category;

        $cat->category_name = $request->new_category; // category_name in db and new_category in input tag name

        $cat->save();

        toastr()
            ->closeButton()
            ->timeOut(2500)
            ->success('New Category Added!');

        return redirect()->back();
    }
}
