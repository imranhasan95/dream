<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use Image;

class ProfileController extends Controller
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


         return view('auth.profile');
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
        //
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
      // $user_id = Auth::id();
       $user = User::findOrFail($id);

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

       if ($request->hasFile('profile_image')) {
        // new photo uploads -start
        $profile_image = $request->file('profile_image');
        $filename = $request->id . '.' . $profile_image->getClientOriginalExtension();
         Image::make($profile_image)->resize(300, 300)->save( base_path('public/uploads/profile_image/' . $filename ),40 );
         User::findOrFail($request->id)->update([
           'profile_image' => $filename,
         ]);
        // new photo uploads -end
      }
      //  User::findOrFail($request->id)->update([
      //   'name' => $request->name,
      // ]);

      else {
        echo "na";
      }
      // return back()->with('status', 'Profile Image Update Successfully!');
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
