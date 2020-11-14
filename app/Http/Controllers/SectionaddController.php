<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sectionadd;
use Image;
use App\User;
use Hash;
use Carbon\Carbon;
use Auth;

class SectionaddController extends Controller
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
      $sectioning = Sectionadd::all();
      return view('section.index', [
        'sectioning' => $sectioning,
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
            'section_name'=> 'required|unique:sectionadds',
        ]);

        Sectionadd::create($request->all());

        return back()->with('status', 'Add section successfully!');
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
      $sectioni = Sectionadd::find($id);
      return view('section.edit-section', [
        'sectioni' => $sectioni,
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
      $sectioni = Sectionadd::findOrFail($request->id)->update([
        'section_name' => $request->section_name,
      ]);
      return redirect('sectionadd')->with('edit_status', 'Add Section name Update successfully!');
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
