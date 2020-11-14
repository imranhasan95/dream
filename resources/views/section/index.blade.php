@extends('layouts.apping')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
               <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">add Section</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
               <li class="list-inline-item"><a href="{{ route('sectionadd.index') }}">Section</a></li>
             </ul>
           </div>
         </div>
       </div>
       <div class="page-content">
         <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
               <div class="page-title">
                 <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="page-title">Section information</div>
                   </div>
                 </div>
               </div>
               <div class="card-body col-lg-06 col-md-12 col-sm-12 col-12">
                 @if (session('status'))
                     <div class="alert alert-success" role="alert">
                         {{ session('status') }}
                     </div>
                 @endif
                  <form method="post" action="{{ route('sectionadd.store') }}">
                 <div class="row">
                       @csrf
                   <div class="col-lg-06 col-md-12 col-sm-12 col-12">
                       <div class="form-group custom-mt-form-group">
                         <input type="text" placeholder="Enter your Name" name="section_name"/>
                         <label class="control-label">Section Name</label><i class="bar"></i>
                         @error ('section_name')
                             <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                   <div class="col-lg-06 col-md-12 col-sm-12 col-12">
                       <div class="form-group text-center custom-mt-form-group">
                         <button class="btn btn-primary mr-2" type="submit">Submit</button>
                         <button class="btn btn-secondary" type="reset">Cancel</button>
                       </div>
                   </div>
                   </div>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
         {{--  --}}
         <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
               <div class="page-title">
                 <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="page-title">Section information</div>
                   </div>
                 </div>
               </div>
               <div class="card-body col-lg-06 col-md-12 col-sm-12 col-12">
                 @if (session('edit_status'))
                     <div class="alert alert-success" role="alert">
                         {{ session('edit_status') }}
                     </div>
                 @endif

                   <div class="col-lg-06 col-md-12 col-sm-12 col-12">
                     <div class="table-responsive-lg">
                         <table class="table table-striped custom-table datatable">
                             <thead>
                                 <tr>
                                     <th style="width:10%; min-width:10%;">Name </th>
                                     <th class="text-right" style="width:10%;">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                               @foreach ($sectioning as $sectioni)
                                 <tr>
                                     <td>
                                         <h2><a href="">{{ $sectioni->section_name }}<span></span></a></h2>
                                           </td>
                                          <td class="text-right" >
                                             <a href="{{ route('sectionadd.edit', [$sectioni->id]) }}" class="btn btn-primary btn-sm mb-1">
                                               <i class="fa fa-pencil" aria-hidden="true"></i>
                                             </a>
                                             <button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
                                               <i class="fa fa-trash" aria-hidden="true"></i>
                                             </button>
                                         </td>
                                 </tr>
                               @endforeach
                             </tbody>
                         </table>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         {{--  --}}
       </div>
           </div>
       </div>

@endsection

@section('script')

@endsection
