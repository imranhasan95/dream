@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
     <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">Employee</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="#">Home</a></li>
               <li class="list-inline-item"><a href="#">Management</a></li>
               <li class="list-inline-item"> All Employees</li>
             </ul>
           </div>
         </div>
       </div>
               <div class="row">
                   <div class="col-sm-4 col-3">

                   </div>
                   <div class="col-sm-8 col-9 text-right m-b-20">
                       <a href="add-employee.html" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Employee</a>
                       <div class="view-icons">
                           <a href="all-employees.html" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
                           <a href="employees-list.html" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
                       </div>
                   </div>
               </div>
     <div class="content-page">
               <div class="row filter-row">
                   <div class="col-sm-6 col-md-3">
           <div class="form-group custom-mt-form-group">
             <input type="text"  />
             <label class="control-label">Employee ID</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
           <div class="form-group custom-mt-form-group">
             <input type="text"  />
             <label class="control-label">Employee Name</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
           <div class="form-group custom-mt-form-group">
             <select >
                <option>Select Designation</option>
                               <option>Maths</option>
                              <option>Library</option>
                               <option>Science</option>
                               <option>English</option>
              </select>
              <label class="control-label">Designation</label><i class="bar"></i>
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
                                       <th style="min-width:50px;">Name</th>
                                       <th style="min-width:80px;">Employee ID</th>
                                       <th style="min-width:50px;">Email</th>
                                       <th style="min-width:50px;">Mobile</th>
                                       <th style="min-width:70px;">Join Date</th>
                                       <th style="min-width:50px;">Role</th>
                                       <th class="text-right">Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">J</a>
                                           <h2><a href="profile.html">Ruth C. Gault <span>Maths Teacher</span></a></h2>
                                       </td>
                                       <td>EM-0001</td>
                                       <td>ruthcgault@example.com</td>
                                       <td>410-610-2754</td>
                                       <td>1 Jan 2013</td>
                                       <td>
                                           <div class="dropdown">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Maths Teacher </a>
                                               <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Science Teacher</a>
                                                   <a class="dropdown-item" href="#">English</a>
                                                   <a class="dropdown-item" href="#">Library</a>
                                                   <a class="dropdown-item" href="#">Sports</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right" >
                     <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
                       <i class="fa fa-pencil" aria-hidden="true"></i>
                     </a>
                     <button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                     </button>
                   </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">R</a>
                                           <h2><a href="profile.html">Richard Miles <span>English</span></a></h2>
                                       </td>
                                       <td>EM-0002</td>
                                       <td>richardmiles@example.com</td>
                                       <td>973-584-58700</td>
                                       <td>18 Mar 2014</td>
                                       <td>
                                           <div class="dropdown">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">English</a>
                                               <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Science Teacher</a>
                                                   <a class="dropdown-item" href="#">English</a>
                                                   <a class="dropdown-item" href="#">Library</a>
                                                   <a class="dropdown-item" href="#">Sports</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right" >
                     <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
                       <i class="fa fa-pencil" aria-hidden="true"></i>
                     </a>
                     <button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                     </button>
                   </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">J</a>
                                           <h2><a href="profile.html">John Smith <span>Sports</span></a></h2>
                                       </td>
                                       <td>EM-0003</td>
                                       <td>johnsmith@example.com</td>
                                       <td>973-584-58700</td>
                                       <td>1 Apr 2014</td>
                                       <td>
                                           <div class="dropdown">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Sports </a>
                                               <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Science Teacher</a>
                                                   <a class="dropdown-item" href="#">English</a>
                                                   <a class="dropdown-item" href="#">Library</a>
                                                   <a class="dropdown-item" href="#">Sports</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right" >
                     <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
                       <i class="fa fa-pencil" aria-hidden="true"></i>
                     </a>
                     <button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                     </button>
                   </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">M</a>
                                           <h2><a href="profile.html">Mike Litorus <span>Library</span></a></h2>
                                       </td>
                                       <td>EM-0004</td>
                                       <td>mikelitorus@example.com</td>
                                       <td>973-584-58700</td>
                                       <td>1 Apr 2014</td>
                                       <td>
                                           <div class="dropdown">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Library </a>
                                               <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Science Teacher</a>
                                                   <a class="dropdown-item" href="#">English</a>
                                                   <a class="dropdown-item" href="#">Library</a>
                                                   <a class="dropdown-item" href="#">Sports</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right" >
                     <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
                       <i class="fa fa-pencil" aria-hidden="true"></i>
                     </a>
                     <button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                     </button>
                   </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">W</a>
                                           <h2><a href="profile.html">Wilmer Deluna <span>Science Teacher</span></a></h2>
                                       </td>
                                       <td>EM-0005</td>
                                       <td>wilmerdeluna@example.com</td>
                                       <td>973-584-58700</td>
                                       <td>22 May 2014</td>
                                       <td>
                                           <div class="dropdown">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Science Teacher </a>
                                               <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Science Teacher</a>
                                                   <a class="dropdown-item" href="#">English</a>
                                                   <a class="dropdown-item" href="#">Library</a>
                                                   <a class="dropdown-item" href="#">Sports</a>
                                               </div>
                                           </div>
                                       </td>
                                      <td class="text-right" >
                     <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
                       <i class="fa fa-pencil" aria-hidden="true"></i>
                     </a>
                     <button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                     </button>
                   </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">J</a>
                                           <h2><a href="profile.html">Jeffrey Warden <span>Sports</span></a></h2>
                                       </td>
                                       <td>EM-0006</td>
                                       <td>jeffreywarden@example.com</td>
                                       <td>973-584-58700</td>
                                       <td>16 Jun 2013</td>
                                       <td>
                                           <div class="dropdown">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Sports </a>
                                               <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Science Teacher</a>
                                                   <a class="dropdown-item" href="#">English</a>
                                                   <a class="dropdown-item" href="#">Library</a>
                                                   <a class="dropdown-item" href="#">Sports</a>
                                               </div>
                                           </div>
                                       </td>
                                      <td class="text-right" >
                     <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
                       <i class="fa fa-pencil" aria-hidden="true"></i>
                     </a>
                     <button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                     </button>
                   </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">B</a>
                                           <h2><a href="profile.html">Bernardo Galaviz <span>English</span></a></h2>
                                       </td>
                                       <td>EM-0007</td>
                                       <td>bernardogalaviz@example.com</td>
                                       <td>973-584-58700</td>
                                       <td>1 Jan 2013</td>
                                       <td>
                                           <div class="dropdown">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">English </a>
                                               <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Science Teacher</a>
                                                   <a class="dropdown-item" href="#">English</a>
                                                   <a class="dropdown-item" href="#">Library</a>
                                                   <a class="dropdown-item" href="#">Sports</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right" >
                     <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
                       <i class="fa fa-pencil" aria-hidden="true"></i>
                     </a>
                     <button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                     </button>
                   </td>
                                   </tr>
                               </tbody>
                           </table>
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
   </div>
    <div id="delete_employee" class="modal" role="dialog">
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
