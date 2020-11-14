<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\classadd;
use Image;
use App\User;
use Hash;
use Carbon\Carbon;
use Auth;

class ClassaddController extends Controller
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

          $classing = classadd::all();
          return view('class.index', [
            'classing' => $classing,
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
            'class_name'=>'required|unique:classadds',
        ]);

        classadd::create($request->all());

        return back()->with('status', 'Add Class successfully!');
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
      $classid = classadd::find($id);
      return view('class.edit-class', [
        'classid' => $classid,
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
      $classid = classadd::findOrFail($request->id)->update([
        'class_name' => $request->class_name,
      ]);
      return redirect('classadd')->with('edit_status', 'Add class name Update successfully!');
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
