<?php

namespace App\Http\Controllers;

use App\Subjectadd;
use Image;
use App\User;
use Hash;
use Carbon\Carbon;
use Auth;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectaddController extends Controller
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
      $subjecting = Subjectadd::all();
      return view('subject.index', [
        'subjecting' => $subjecting,
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
            'subject_name'=>'required|String|unique:subjectadds',
        ]);
        Subjectadd::create($request->all());

        return back()->with('status', 'Add Subject successfully!');
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
        $subjects = Subjectadd::find($id);
        return view('subject.edit-subject', [
          'subjects' => $subjects,
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
      $subjects = Subjectadd::findOrFail($request->id)->update([
        'subject_name' => $request->subject_name,
      ]);
      return redirect('subjectadd')->with('edit_status', 'Add Subject name Update successfully!');
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
