<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Addteacher;
use Image;
use App\User;
use Hash;
use Carbon\Carbon;
use Auth;

class AddteacherController extends Controller
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
      return view('teacher.all-teachers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('teacher.add-teacher');
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
       'Firstname' => 'required',
       'last_name' => 'required',
       'joining_date' => 'required',
       'Subject' => 'required',
       'phone_number' => 'required',
       'gender' => 'required',
       'card_id' =>'required|unique:addteachers',
       'brithday' => 'required',
       'religion' => 'required',
       'classe' => 'required',
       'father_name' => 'required',
       'mother_name' => 'required',
       'nationality' => 'required',
       'social_science' => 'required',
       'section' => 'required',
       'address' => 'required',
   ]);
      $info = Addteacher::create($request->except('_token'));
      if ($request->hasFile('teacher_imegre')) {
         $teacher_imegre = $request->file('teacher_imegre');
         $db_file = $info->id . '.' . $teacher_imegre->getClientOriginalExtension();
          Image::make($teacher_imegre)->resize(300, 300)->save( base_path('public/uploads/teacher_imegre/' . $db_file ),40 );
          $info->teacher_imegre = $db_file;
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
        //
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
        //
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
