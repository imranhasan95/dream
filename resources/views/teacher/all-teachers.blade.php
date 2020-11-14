@extends('layouts.apping')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
       <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">Teachers</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="#">Home</a></li>
               <li class="list-inline-item"><a href="#">Teachers</a></li>
               <li class="list-inline-item"> All Teachers</li>
             </ul>
           </div>
         </div>
       </div>
               <div class="row">
                   <div class="col-sm-4 col-3">
                   </div>
                   <div class="col-sm-8 col-9 text-right m-b-20">
                       <a href="{{ route('addteacher.create') }}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Teacher</a>
                       <div class="view-icons">
                           <a href="{{ route('addteacher.index') }}" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                           <a href="teachers-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                       </div>
                   </div>
               </div>
     <div class="content-page">
               <div class="row filter-row">
                   <div class="col-sm-6 col-md-3">
           <div class="form-group custom-mt-form-group">
             <input type="text"  />
             <label class="control-label">Teacher ID</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
           <div class="form-group custom-mt-form-group">
             <input type="text"  />
             <label class="control-label">Teacher Name</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
           <div class="form-group custom-mt-form-group">
             <select class="">
                <option>Maths</option>
                               <option>English</option>
                               <option>Science</option>
                               <option>Social Science</option>
                               <option>Finance</option>
              </select>
              <label class="control-label">Subject</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <a href="#" class="btn btn-success btn-block mt-4 mb-2"> Search </a>
                   </div>
               </div>
               <div class="row staff-grid-row">
                   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                       <div class="profile-widget">
                           <div class="profile-img">
                               <a href="profile.html"><img class="avatar" src="assets/img/user.jpg" alt=""></a>
                           </div>
                           <div class="dropdown profile-action">
                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="edit-teacher.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                           </div>
                           <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Ruth C. Gault</a></h4>
                           <div class="small text-muted">Maths</div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                       <div class="profile-widget">
                           <div class="profile-img">
                               <a href="profile.html" class="avatar">M</a>
                           </div>
                           <div class="dropdown profile-action">
                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="edit-teacher.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                           </div>
                           <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Michael V. Buttars</a></h4>
                           <div class="small text-muted">Science</div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                       <div class="profile-widget">
                           <div class="profile-img">
                               <a href="profile.html" class="avatar">J</a>
                           </div>
                           <div class="dropdown profile-action">
                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="edit-teacher.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                           </div>
                           <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">John Smith</a></h4>
                           <div class="small text-muted">Social Science</div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                       <div class="profile-widget">
                           <div class="profile-img">
                               <a href="profile.html" class="avatar">M</a>
                           </div>
                           <div class="dropdown profile-action">
                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="edit-teacher.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                           </div>
                           <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Mike Litorus</a></h4>
                           <div class="small text-muted">Finance</div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                       <div class="profile-widget">
                           <div class="profile-img">
                               <a href="profile.html" class="avatar">W</a>
                           </div>
                           <div class="dropdown profile-action">
                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="edit-teacher.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                           </div>
                           <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Wilmer Deluna</a></h4>
                           <div class="small text-muted">H.O.D</div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                       <div class="profile-widget">
                           <div class="profile-img">
                               <a href="profile.html" class="avatar">J</a>
                           </div>
                           <div class="dropdown profile-action">
                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="edit-teacher.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                           </div>
                           <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Jeffrey Warden</a></h4>
                           <div class="small text-muted">Maths</div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                       <div class="profile-widget">
                           <div class="profile-img">
                               <a href="profile.html" class="avatar">B</a>
                           </div>
                           <div class="dropdown profile-action">
                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="edit-teacher.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                           </div>
                           <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Bernardo Galaviz</a></h4>
                           <div class="small text-muted">Maths</div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                       <div class="profile-widget">
                           <div class="profile-img">
                               <a href="profile.html" class="avatar">L</a>
                           </div>
                           <div class="dropdown profile-action">
                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="edit-teacher.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                           </div>
                           <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Lesley Grauer</a></h4>
                           <div class="small text-muted">H.O.D</div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                       <div class="profile-widget">
                           <div class="profile-img">
                               <a href="profile.html" class="avatar">J</a>
                           </div>
                           <div class="dropdown profile-action">
                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="edit-teacher.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                           </div>
                           <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Jeffery Lalor</a></h4>
                           <div class="small text-muted">H.O.D</div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                       <div class="profile-widget">
                           <div class="profile-img">
                               <a href="profile.html" class="avatar">L</a>
                           </div>
                           <div class="dropdown profile-action">
                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="edit-teacher.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                           </div>
                           <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Loren Gatlin</a></h4>
                           <div class="small text-muted">Science</div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                       <div class="profile-widget">
                           <div class="profile-img">
                               <a href="profile.html" class="avatar">T</a>
                           </div>
                           <div class="dropdown profile-action">
                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="edit-teacher.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                           </div>
                           <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Tarah Shropshire</a></h4>
                           <div class="small text-muted">Maths</div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                       <div class="profile-widget">
                           <div class="profile-img">
                               <a href="profile.html" class="avatar">C</a>
                           </div>
                           <div class="dropdown profile-action">
                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="edit-teacher.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                           </div>
                           <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Catherine Manseau</a></h4>
                           <div class="small text-muted">Science</div>
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
                                           <span class="avatar">R</span>
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
