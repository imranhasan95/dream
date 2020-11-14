@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
     <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
           <h5 class="text-uppercase">users</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="#">Home</a></li>
               <li class="list-inline-item"><a href="#">Management</a></li>
               <li class="list-inline-item">Users</li>
             </ul>
           </div>
         </div>
       </div>
               <div class="row">
                   <div class="col-sm-4 col-4">

                   </div>
                   <div class="col-sm-8 col-8 text-right m-b-30">
                       <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus"></i> Add User</a>
                   </div>
               </div>
       <div class="content-page">
         <div class="row filter-row">
           <div class="col-sm-6 col-md-3">
             <div class="form-group custom-mt-form-group">
               <select >
                 <option>Select </option>
                 <option>Loren Gatlin</option>
                 <option>Tarah Shropshire</option>
                </select>
                <label class="control-label">Users</label><i class="bar"></i>
             </div>
           </div>
           <div class="col-sm-6 col-md-3">
             <div class="form-group custom-mt-form-group">
                <input class="form-control floating datetimepicker" type="text" >
               <label class="control-label">From</label><i class="bar"></i>
             </div>
           </div>
           <div class="col-sm-6 col-md-3">
             <div class="form-group custom-mt-form-group">
                <input class="form-control floating datetimepicker" type="text" >
               <label class="control-label">To</label><i class="bar"></i>
             </div>
           </div>
           <div class="col-sm-6 col-md-3">
             <a href="#" class="btn btn-success btn-block mt-4 mb-2"> Search </a>
           </div>
         </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="table-responsive">
                           <table class="table table-striped custom-table datatable">
                               <thead>
                                   <tr>
                                       <th style="width:30%;">Name</th>
                                       <th>Email</th>
                                       <th>School</th>
                                       <th>Created Date</th>
                                       <th>Role</th>
                                       <th class="text-right">Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">D</a>
                                           <h2><a href="profile.html">Daniel Porter <span>Admin</span></a></h2>
                                       </td>
                                       <td>danielporter@example.com</td>
                                       <td>Preschool</td>
                                       <td>1 Jan 2013</td>
                                       <td>
                                           <span class="badge badge-danger-border">Admin</span>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_user"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">J</a>
                                           <h2><a href="profile.html">John Doe <span> Maths Teacher</span></a></h2>
                                       </td>
                                       <td>johndoe@example.com</td>
                                       <td>Preschool</td>
                                       <td>1 Jan 2013</td>
                                       <td>
                                           <span class="badge badge-success-border">Teacher</span>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_user"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">R</a>
                                           <h2><a href="profile.html">Richard Miles <span>Admin</span></a></h2>
                                       </td>
                                       <td>richardmiles@example.com</td>
                                       <td>Preschool</td>
                                       <td>1 Jan 2013</td>
                                       <td>
                                           <span class="badge badge-success-border">Employee</span>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_user"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">J</a>
                                           <h2><a href="profile.html">John Smith <span>Sports</span></a></h2>
                                       </td>
                                       <td>johnsmith@example.com</td>
                                       <td>Preschool</td>
                                       <td>1 Jan 2013</td>
                                       <td>
                                           <span class="badge badge-success-border">Employee</span>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_user"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">M</a>
                                           <h2><a href="profile.html">Mike Litorus <span>English</span></a></h2>
                                       </td>
                                       <td>mikelitorus@example.com</td>
                                       <td>Preschool</td>
                                       <td>1 Jan 2013</td>
                                       <td>
                                           <span class="badge badge-success-border">Employee</span>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_user"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">W</a>
                                           <h2><a href="profile.html">Wilmer Deluna <span>H.O.D</span></a></h2>
                                       </td>
                                       <td>wilmerdeluna@example.com</td>
                                       <td>Preschool</td>
                                       <td>1 Jan 2013</td>
                                       <td>
                                           <span class="badge badge-success-border">Employee</span>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_user"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">B</a>
                                           <h2><a href="profile.html">Barry Cuda <span>Preschool</span></a></h2>
                                       </td>
                                       <td>barrycuda@example.com</td>
                                       <td>Ruth C. Gault</td>
                                       <td>1 Jan 2013</td>
                                       <td>
                                           <span class="badge badge-info-border">Student</span>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_user"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
   <div id="add_user" class="modal" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content modal-lg">
                   <div class="modal-header">
                       <h4 class="modal-title">Add User</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <div class="modal-body">
                       <form class="m-b-30">
                           <div class="row">
                               <div class="col-sm-6">
                 <div class="form-group custom-mt-form-group">
                   <input type="text"  />
                   <label class="control-label">Firstname <span class="text-danger">*</span></label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
                   <input type="text"  />
                   <label class="control-label">Lastname <span class="text-danger">*</span></label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                 <div class="form-group custom-mt-form-group">
                   <input type="text"  />
                   <label class="control-label">Username <span class="text-danger">*</span></label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                 <div class="form-group custom-mt-form-group">
                   <input type="text"  />
                   <label class="control-label">Email <span class="text-danger">*</span></label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                 <div class="form-group custom-mt-form-group">
                   <input type="password"  />
                   <label class="control-label">Password <span class="text-danger">*</span></label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                 <div class="form-group custom-mt-form-group">
                   <input type="password"  />
                   <label class="control-label">Confirm Password <span class="text-danger">*</span></label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                 <div class="form-group custom-mt-form-group">
                   <input type="text"  />
                   <label class="control-label">Phone <span class="text-danger">*</span></label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                 <div class="form-group custom-mt-form-group">
                   <select >
                     <option>Admin</option>
                                           <option>Student</option>
                                           <option>Employee</option>
                    </select>
                    <label class="control-label">Role</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                 <div class="form-group custom-mt-form-group">
                   <select >
                     <option>Global Technologies</option>
                                           <option>Delta Infotech</option>
                    </select>
                    <label class="control-label">School</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                 <div class="form-group custom-mt-form-group">
                   <input type="text" >
                   <label class="control-label">Employee ID  <span class="text-danger">*</span></label><i class="bar"></i>
                 </div>
                               </div>
                           </div>
                           <div class="table-responsive m-t-15">
                               <table class="table table-striped custom-table">
                                   <thead>
                                       <tr>
                                           <th>Module Permission</th>
                                           <th class="text-center">Read</th>
                                           <th class="text-center">Write</th>
                                           <th class="text-center">Create</th>
                                           <th class="text-center">Delete</th>
                                           <th class="text-center">Import</th>
                                           <th class="text-center">Export</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>Employee</td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Holidays</td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Leave Request</td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Events</td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                           <div class="m-t-20 text-center">
                               <button class="btn btn-primary btn-lg">Create User</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <div id="edit_user" class="modal" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content modal-lg">
                   <div class="modal-header">
                       <h4 class="modal-title">Edit User</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <div class="modal-body">
                       <form class="m-b-30">
                           <div class="row">
                               <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
                   <input type="text" value="John"  />
                   <label class="control-label">Firstname <span class="text-danger">*</span></label><i class="bar"></i>
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
                   <input type="text" value="Doe" />
                   <label class="control-label">Lastname <span class="text-danger">*</span></label><i class="bar"></i>
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
                   <input type="text" value="johndoe"  />
                   <label class="control-label">Username <span class="text-danger">*</span></label><i class="bar"></i>
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
                   <input type="text" value="johndoe@example.com"  />
                   <label class="control-label">Email <span class="text-danger">*</span></label><i class="bar"></i>
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
                   <input type="Password"  />
                   <label class="control-label">Password <span class="text-danger">*</span></label><i class="bar"></i>
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
                   <input type="Password" />
                   <label class="control-label">Confirm Password <span class="text-danger">*</span></label><i class="bar"></i>
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
                   <input value="973-584-58700" type="number" />
                   <label class="control-label">Phone </label><i class="bar"></i>
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
                                       <select >
                     <option>Admin</option>
                                           <option>Student</option>
                                           <option selected>Employee</option>
                    </select>
                    <label class="control-label">Role</label><i class="bar"></i>
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
                                       <select >
                     <option>Cbse School</option>
                                           <option>Icse School</option>
                    </select>
                    <label class="control-label">School</label><i class="bar"></i>
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
                   <input value="st-0001" type="text"  />
                   <label class="control-label">Employee ID <span class="text-danger">*</span> </label><i class="bar"></i>
                                   </div>
                               </div>
                           </div>
                           <div class="table-responsive m-t-15">
                               <table class="table table-striped custom-table">
                                   <thead>
                                       <tr>
                                           <th>Module Permission</th>
                                           <th class="text-center">Read</th>
                                           <th class="text-center">Write</th>
                                           <th class="text-center">Create</th>
                                           <th class="text-center">Delete</th>
                                           <th class="text-center">Import</th>
                                           <th class="text-center">Export</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>Employee</td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Holidays</td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Leave Request</td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Events</td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                           <td class="text-center">
                                               <input checked="" type="checkbox">
                                           </td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                           <div class="m-t-20 text-center">
                               <button class="btn btn-primary btn-lg">Edit User</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <div id="delete_user" class="modal" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content modal-md">
                   <div class="modal-header">
                       <h4 class="modal-title">Delete Employee</h4>
                   </div>
                   <form>
                       <div class="modal-body card-box">
                           <p>Are you sure want to delete this?</p>

                           <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                               <button type="submit" class="btn btn-danger">Delete</button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>

@endsection

@section('script')

@endsection
