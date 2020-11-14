<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userimages;
use Image;

class UserimagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $serimages = Userimages::all();
         return view('store_image', [
           'serimages' => $serimages,
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

      $info = Userimages::create($request->except('_token'));
      if ($request->hasFile('user_image')) {
         $user_imegrs = $request->file('user_image');
         $db_file = $info->id . '.' . $user_imegrs->getClientOriginalExtension();
          Image::make($user_imegrs)->resize(300, 300)->save( base_path('public/uploads/user_image/' . $db_file ),40 );
          $info->user_image = $db_file;
          $info->save();
      }

      return back()->with('status', 'User Imegrs insert  successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // return view('edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $users_info = Userimages::findOrFail($id);
       return view('edit', [
         'users_info' => $users_info,
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
      if ($request->hasFile('new_photo')) {
        // new photo uploads -start
        $user_imegrs = $request->file('new_photo');
        $filename = $request->id . '.' . $user_imegrs->getClientOriginalExtension();
         Image::make($user_imegrs)->resize(300, 300)->save( base_path('public/uploads/user_image/' . $filename ),40 );
         Userimages::findOrFail($request->id)->update([
           'user_image' => $filename,
         ]);
        // new photo uploads -end
      }
      return redirect('userimage')->with('edit_status', 'Userimage Update successfully!');
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
