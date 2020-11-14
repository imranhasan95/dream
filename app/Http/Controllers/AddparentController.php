<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addparent;
use Image;
use App\User;
use Hash;
use Carbon\Carbon;
use Auth;

class AddparentController extends Controller
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
          $addparent = Addparent::all();
          return view('parent.all-parents',[
            'addparent' => $addparent,
          ]);
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parent.add-parent');
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
      'name' => 'required',
      'id_number' =>'required|unique:addparents',
      'phone_number' => 'required',
      'gender' => 'required',
      'brithday' => 'required',
      'class_section' => 'required',
      'father_name' => 'required',
      'student_name' => 'required',
      'occupation' => 'required',
      'address' => 'required',
  ]);

     $info = Addparent::create($request->except('_token'));
     if ($request->hasFile('parent_image')) {
        $parent_image = $request->file('parent_image');
        $db_file = $info->id . '.' . $parent_image->getClientOriginalExtension();
         Image::make($parent_image)->resize(300, 300)->save( base_path('public/uploads/parent_image/' . $db_file ),40 );
         $info->parent_image = $db_file;
         $info->save();
     }
     return back()->with('status', 'Add Teacher successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $addparent_show = Addparent::find($id);
        return view('parent.parent-profile', [
          'addparent_show' => $addparent_show,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parent_info = Addparent::findOrFail($id);
        return view('parent.edit-parent', [
          'parent_info' => $parent_info,
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
      if ($request->hasFile('parent_image')) {
        // new photo uploads -start
        $pack_photo = $request->file('parent_image');
        $filename = $request->id . '.' . $pack_photo->getClientOriginalExtension();
         Image::make($pack_photo)->resize(300, 300)->save( base_path('public/uploads/parent_image/' . $filename ),40 );
         Addparent::findOrFail($request->id)->update([
           'parent_image' => $filename,
         ]);
        // new photo uploads -end
      }
      $parent_info = Addparent::findOrFail($request->id)->update([
        'name' => $request->name,
        'id_number' => $request->id_number,
        'gender' => $request->gender,
        'brithday' => $request->brithday,
        'class_section' => $request->class_section,
        'student_name' => $request->student_name,
        'father_name' => $request->father_name,
        'occupation' => $request->occupation,
        'phone_number' => $request->phone_number,
        'address' => $request->address,
      ]);
      return redirect('addparent')->with('edit_status', 'Add Parent Update successfully!');

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
