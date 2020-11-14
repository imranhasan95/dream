@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
     <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">Leave Request</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="#">Home</a></li>
               <li class="list-inline-item"><a href="#">Management</a></li>
               <li class="list-inline-item"><a href="#">Employees</a></li>
               <li class="list-inline-item"> Leave Request</li>
             </ul>
           </div>
         </div>
       </div>
                <div class="row">
                   <div class="col-sm-8 col-6">

                   </div>
                   <div class="col-sm-4 col-6 text-right m-b-30">
                       <a href="#" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#add_leave"><i class="fa fa-plus"></i> Add Leave</a>
                   </div>
               </div>
     <div class="content-page">
               <div class="row filter-row">
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">

           <div class="form-group custom-mt-form-group">
             <input type="text"  />
             <label class="control-label">Employee Name</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
           <div class="form-group custom-mt-form-group">
             <select class="select2">
               <option> -- Select -- </option>
                               <option>Casual Leave</option>
                               <option>Medical Leave</option>
                               <option>Loss of Pay</option>
              </select>
              <label class="control-label">Leave Type</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">

           <div class="form-group custom-mt-form-group">
             <select class="select1">
                <option> -- Select -- </option>
                               <option> Pending </option>
                               <option> Approved </option>
                               <option> Rejected </option>
              </select>
              <label class="control-label">Leave status</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                       <div class="form-group custom-mt-form-group">
              <input class="form-control floating datetimepicker" type="text" >
             <label class="control-label">From</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                       <div class="form-group custom-mt-form-group">
              <input class="form-control floating datetimepicker" type="text" >
             <label class="control-label">To</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12 mt-3">
                       <a href="#" class="btn btn-success btn-block"> Search </a>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="table-responsive">
                           <table class="table table-striped custom-table m-b-0 datatable">
                               <thead>
                                   <tr>
                                       <th>Employee</th>
                                       <th>Leave Type</th>
                                       <th>From</th>
                                       <th>To</th>
                                       <th>No of Days</th>
                                       <th>Reason</th>
                                       <th class="text-center">status</th>
                                       <th class="text-right">Actions</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">R</a>
                                           <h2><a href="#">Richard Miles <span>Science Teacher</span></a></h2>
                                       </td>
                                       <td>Casual Leave</td>
                                       <td>8 Aug 2018</td>
                                       <td>8 Aug 2018</td>
                                       <td>2 days</td>
                                       <td>Going to Hospital</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-purple"></i> New
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">J</a>
                                           <h2><a>	John Doe  <span> Maths Teacher</span></a></h2>
                                       </td>
                                       <td>Medical Leave</td>
                                       <td>13 Jul 2018</td>
                                       <td>15 Jul 2018</td>
                                       <td>3 days</td>
                                       <td>Going to Hospital</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-success"></i> Approved
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">J</a>
                                           <h2><a>John Smith <span>Sports</span></a></h2>
                                       </td>
                                       <td>Casual Leave</td>
                                       <td>27 Jun 2018</td>
                                       <td>28 Jun 2018</td>
                                       <td>2 days</td>
                                       <td>Going to Hospital</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-success"></i> Approved
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">M</a>
                                           <h2><a>Mike Litorus  <span>English</span></a></h2>
                                       </td>
                                       <td>Casual Leave</td>
                                       <td>13 May 2018</td>
                                       <td>13 May 2018</td>
                                       <td>2 days</td>
                                       <td>Going to Hospital</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-danger"></i> Declined
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">R</a>
                                           <h2><a>Richard Parker <span>Science Teacher</span></a></h2>
                                       </td>
                                       <td>Casual Leave</td>
                                       <td>31 Mar 2018</td>
                                       <td>31 Mar 2018</td>
                                       <td>2 days</td>
                                       <td>Going to Hospital</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-purple"></i> New
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">C</a>
                                           <h2><a>Catherine Manseau <span>Science Teacher</span></a></h2>
                                       </td>
                                       <td>Casual Leave</td>
                                       <td>5 May 2018</td>
                                       <td>6 May 2018</td>
                                       <td>2 days</td>
                                       <td>Going to Hospital</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-success"></i> Approved
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">B</a>
                                           <h2><a>Buster Wigton <span>Science Teacher</span></a></h2>
                                       </td>
                                       <td>Casual Leave</td>
                                       <td>5 May 2018</td>
                                       <td>6 May 2018</td>
                                       <td>2 days</td>
                                       <td>Going to Hospital</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-success"></i> Approved
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">M</a>
                                           <h2><a>Melita Faucher <span>Science Teacher</span></a></h2>
                                       </td>
                                       <td>Casual Leave</td>
                                       <td>5 May 2018</td>
                                       <td>6 May 2018</td>
                                       <td>2 days</td>
                                       <td>Going to Hospital</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-danger"></i> Declined
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">T</a>
                                           <h2><a>Tarah Shropshire <span>Science Teacher</span></a></h2>
                                       </td>
                                       <td>Casual Leave</td>
                                       <td>5 May 2018</td>
                                       <td>6 May 2018</td>
                                       <td>2 days</td>
                                       <td>Going to Hospital</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-purple"></i> New
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">D</a>
                                           <h2><a>Domenic Houston <span>Science Teacher</span></a></h2>
                                       </td>
                                       <td>Casual Leave</td>
                                       <td>5 May 2018</td>
                                       <td>6 May 2018</td>
                                       <td>2 days</td>
                                       <td>Going to Hospital</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-success"></i> Approved
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">
                                               <img src="assets/img/user.jpg" alt="John Doe">
                                           </a>
                                           <h2><a>John Doe <span> Maths Teacher</span></a></h2>
                                       </td>
                                       <td>Casual Leave</td>
                                       <td>5 May 2018</td>
                                       <td>6 May 2018</td>
                                       <td>2 days</td>
                                       <td>Going to Hospital</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-success"></i> Approved
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">R</a>
                                           <h2><a>Rolland Webber <span>Science Teacher</span></a></h2>
                                       </td>
                                       <td>Casual Leave</td>
                                       <td>5 May 2018</td>
                                       <td>6 May 2018</td>
                                       <td>2 days</td>
                                       <td>Going to Hospital</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-danger"></i> Declined
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
         </div>
       </div>
           </div>
           <div class="notification-box">
               <div class="msg-sidebar notifications msg-noti">
                   <div class="topnav-dropdown-header">
                       <span>Messages</span>
                   </div>
                   <div class="drop-scroll msg-list-scroll">
                       <ul class="list-box">
                           <li>
                               <a href="chat.html">
                                   <div class="list-item">
                                       <div class="list-left">
                                           <span class="avatar">R</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author">Richard Miles </span>
                                           <span class="message-time">12:28 AM</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="chat.html">
                                   <div class="list-item new-message">
                                       <div class="list-left">
                                           <span class="avatar">J</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author">Ruth C. Gault</span>
                                           <span class="message-time">1 Aug</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="chat.html">
                                   <div class="list-item">
                                       <div class="list-left">
                                           <span class="avatar">T</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author"> Tarah Shropshire </span>
                                           <span class="message-time">12:28 AM</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="chat.html">
                                   <div class="list-item">
                                       <div class="list-left">
                                           <span class="avatar">M</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author">Mike Litorus</span>
                                           <span class="message-time">12:28 AM</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="chat.html">
                                   <div class="list-item">
                                       <div class="list-left">
                                           <span class="avatar">C</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author"> Catherine Manseau </span>
                                           <span class="message-time">12:28 AM</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="chat.html">
                                   <div class="list-item">
                                       <div class="list-left">
                                           <span class="avatar">D</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author"> Domenic Houston </span>
                                           <span class="message-time">12:28 AM</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="chat.html">
                                   <div class="list-item">
                                       <div class="list-left">
                                           <span class="avatar">B</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author"> Buster Wigton </span>
                                           <span class="message-time">12:28 AM</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="chat.html">
                                   <div class="list-item">
                                       <div class="list-left">
                                           <span class="avatar">R</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author"> Rolland Webber </span>
                                           <span class="message-time">12:28 AM</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="chat.html">
                                   <div class="list-item">
                                       <div class="list-left">
                                           <span class="avatar">C</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author"> Claire Mapes </span>
                                           <span class="message-time">12:28 AM</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="chat.html">
                                   <div class="list-item">
                                       <div class="list-left">
                                           <span class="avatar">M</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author">Melita Faucher</span>
                                           <span class="message-time">12:28 AM</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="chat.html">
                                   <div class="list-item">
                                       <div class="list-left">
                                           <span class="avatar">J</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author">Jeffery Lalor</span>
                                           <span class="message-time">12:28 AM</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="chat.html">
                                   <div class="list-item">
                                       <div class="list-left">
                                           <span class="avatar">L</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author">Loren Gatlin</span>
                                           <span class="message-time">12:28 AM</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="chat.html">
                                   <div class="list-item">
                                       <div class="list-left">
                                           <span class="avatar">T</span>
                                       </div>
                                       <div class="list-body">
                                           <span class="message-author">Tarah Shropshire</span>
                                           <span class="message-time">12:28 AM</span>
                                           <div class="clearfix"></div>
                                           <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                       </div>
                                   </div>
                               </a>
                           </li>
                       </ul>
                   </div>
                   <div class="topnav-dropdown-footer">
                       <a href="chat.html">See all messages</a>
                   </div>
               </div>
           </div>
       </div>
     <div id="add_leave" class="modal" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content modal-md">
                   <div class="modal-header">
                       <h4 class="modal-title">Add Leave Request</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <div class="modal-body">
                       <form>
             <div class="form-group custom-mt-form-group">
               <select >
                  <option>Select Leave Type</option>
                                   <option>Casual Leave 12 Days</option>
                                   <option>Medical Leave</option>
                                   <option>Loss of Pay</option>
                </select>
                <label class="control-label">Leave Type <span class="text-danger">*</span></label><i class="bar"></i>
             </div>
             <div class="form-group custom-mt-form-group">
               <input id="date5" class="form-control floating datetimepicker" type="text" >
               <label for="date5" class="control-label">From <span class="text-danger">*</span></label><i class="bar"></i>
             </div>
             <div class="form-group custom-mt-form-group">
               <input id="date6" class="form-control floating datetimepicker" type="text" >
               <label for="date6" class="control-label">To <span class="text-danger">*</span></label><i class="bar"></i>
             </div>
             <div class="form-group custom-mt-form-group">
               <input type="text" readonly="">
               <label class="control-label">Number of days <span class="text-danger">*</span></label><i class="bar"></i>
             </div>
             <div class="form-group custom-mt-form-group">
               <input type="text" readonly="" value="12">
               <label class="control-label">Remaining Leaves <span class="text-danger">*</span></label><i class="bar"></i>
             </div>
             <div class="form-group custom-mt-form-group">
               <input type="text" />
               <label class="control-label">Leave Reason <span class="text-danger">*</span></label><i class="bar"></i>
             </div>
                           <div class="m-t-20 text-center custom-mt-form-group">
                               <button class="btn btn-primary btn-lg">Send Leave Request</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <div id="edit_leave" class="modal" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content modal-md">
                   <div class="modal-header">
                       <h4 class="modal-title">Edit Leave</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <div class="modal-body">
                       <form>
             <div class="form-group custom-mt-form-group">
               <select >
                   <option>Select Leave Type</option>
                                   <option>Casual Leave 12 Days</option>
                </select>
                <label class="control-label">Leave Type <span class="text-danger">*</span></label><i class="bar"></i>
             </div>
             <div class="form-group custom-mt-form-group">
               <input class="form-control floating datetimepicker" value="01-01-2018" type="text" >
               <label class="control-label">From <span class="text-danger">*</span></label><i class="bar"></i>
             </div>
             <div class="form-group custom-mt-form-group">
               <input class="form-control floating datetimepicker" value="01-01-2018" type="text" >
               <label class="control-label">To <span class="text-danger">*</span></label><i class="bar"></i>
             </div>
             <div class="form-group custom-mt-form-group">
               <input type="text" value="2">
               <label class="control-label">Number of days <span class="text-danger">*</span></label><i class="bar"></i>
             </div>
             <div class="form-group custom-mt-form-group">
               <input type="text" value="12">
               <label class="control-label">Remaining Leaves <span class="text-danger">*</span></label><i class="bar"></i>
             </div>
             <div class="form-group custom-mt-form-group">
               <input value="Going to hospital" >
               <label class="control-label">Leave Reason <span class="text-danger">*</span></label><i class="bar"></i>
             </div>
                           <div class="m-t-20 text-center">
                               <button class="btn btn-primary btn-lg mb-3">Save Changes</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <div id="delete_approve" class="modal" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content modal-md">
                   <div class="modal-header">
                       <h4 class="modal-title">Decline Leave Request</h4>
                   </div>
                   <form>
                       <div class="modal-body card-box">
                           <p>Are you sure want to declined this leave Request?</p>
                           <div class="m-t-20 text-left">
                               <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                               <button type="submit" class="btn btn-danger">Decline</button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>

@endsection

@section('script')

@endsection
