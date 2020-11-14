<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Addstudent;
use Image;
use App\User;
use Hash;
use Carbon\Carbon;
use Auth;

class AddstudentController extends Controller
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
      return view('student.all-students');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.add-student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $info = Addstudent::create($request->except('_token'));
      if ($request->hasFile('student_imegre')) {
         $student_imegre = $request->file('student_imegre');
         $db_file = $info->id . '.' . $student_imegre->getClientOriginalExtension();
          Image::make($student_imegre)->resize(300, 300)->save( base_path('public/uploads/student_imegre/' . $db_file ),40 );
          $info->student_imegre = $db_file;
          $info->save();
      }

      if ($request->hasFile('parents_imegre')) {
         $parents_imegre = $request->file('parents_imegre');
         $db_file = $info->id . '.' . $parents_imegre->getClientOriginalExtension();
          Image::make($parents_imegre)->resize(300, 300)->save( base_path('public/uploads/parents_imegre/' . $db_file ),40 );
          $info->parents_imegre = $db_file;
          $info->save();
      }
      return back()->with('status', 'Add Student successfully!');
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
