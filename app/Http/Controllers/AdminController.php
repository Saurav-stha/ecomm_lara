<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    public function view_category(){

        $categories = Category::all();

        return view('admin.category', compact('categories'));
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

    public function del_category($catid){

        $delCat = Category::find($catid);

        $delCat->delete();

        toastr()
            ->closeButton()
            ->timeOut(2500)
            ->success('Category Deletion Success!');

        return redirect()->back();
    }

    public function edit_category($catid){

        $editCat = Category::find($catid);
        
        return view('admin.edit_category', compact('editCat'));
    }

    public function update_category(Request $req, $catid)
    {
        $updateCat = Category::find($catid);

        $updateCat->category_name = $req->category;

        $updateCat->save();

        toastr()
            ->closeButton()
            ->timeOut(2500)
            ->success('Category Updated!');

        return redirect('/view_category');
    }
}
