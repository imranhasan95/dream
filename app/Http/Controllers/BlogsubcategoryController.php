<?php

namespace App\Http\Controllers;

use App\Blogcategory;
use App\Blogsubcategory;
use Image;
use App\User;
use Hash;
use Carbon\Carbon;
use Auth;

use Illuminate\Http\Request;

class BlogsubcategoryController extends Controller
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
        $blogsubcategory = Blogsubcategory::all();

        return view('subcategory.index', [
          'blogcategory' => $blogcategory,
          'blogsubcategory' => $blogsubcategory,
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
            'subcategory'=>'required',
            'blogcategorie_id'=>'required',
        ]);

        Blogsubcategory::create($request->all());

        return back()->with('status', 'Add Blog sub category successfully!');
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
      $subcategory_info = Blogsubcategory::findOrFail($id);
      $blogsubcategory = Blogcategory::all();

      return view('subcategory.edit-sun-category', [
        'subcategory_info' => $subcategory_info,
        'blogsubcategory' => $blogsubcategory,
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
      $subcategory_info = Blogsubcategory::findOrFail($request->id)->update([
        'subcategory' => $request->subcategory,
        'blogcategorie_id' => $request->blogcategorie_id,
      ]);

      return redirect('blogsubcategory')->with('edit_status', 'Add Blog Sub Category  Update successfully!');
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
