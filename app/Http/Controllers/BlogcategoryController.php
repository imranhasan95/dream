<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blogcategory;
use Image;
use App\User;
use Hash;
use Carbon\Carbon;
use Auth;

class BlogcategoryController extends Controller
{
  public function __construct()
      {
          $this->middleware('auth');
          $this->middleware('verified');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogcategory = Blogcategory::all();

        return view('category.index', [
          'blogcategory' => $blogcategory,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
            'category_name'=>'required',
        ]);

        Blogcategory::create($request->all());

        return back()->with('status', 'Add Blog category successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $category_info = Blogcategory::findOrFail($id);
      return view('category.edit-category', [
        'category_info' => $category_info,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $category_info = Blogcategory::findOrFail($request->id)->update([
            'category_name' => $request->category_name,
          ]);

          return redirect('blogcategory')->with('edit_status', 'Add Blog Category  Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
