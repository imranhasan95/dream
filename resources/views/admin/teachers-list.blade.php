@extends('layouts.app')

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
                       <a href="add-teacher.html" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Teacher</a>
                       <div class="view-icons">
                           <a href="all-teachers.html" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
                           <a href="teachers-list.html" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
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
             <select >
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
               <div class="row">
                   <div class="col-md-12">
                       <div class="table-responsive">
                           <table class="table table-striped custom-table datatable">
                               <thead>
                                   <tr>
                                       <th style="min-width:50px;">Name (Subject)</th>
                                       <th style="min-width:70px;">Teacher ID</th>
                                       <th style="min-width:50px;">Gender</th>
                   <th style="min-width:50px;">Address</th>
                   <th style="min-width:80px;">Date of Birth</th>
                                       <th style="min-width:50px;">Email</th>
                                       <th style="min-width:50px;">Mobile</th>
                                       <th class="text-right" style="width:15%;" >Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">R</a>
                                           <h2><a href="profile.html">Ruth C. Gault <span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d001</td>
                                       <td>Male</td>
                                       <td>520 Cambridge Place,USA</td>
                   <td>1 Jun 1985</td>
                                       <td>ruthcgault@example.com</td>
                                       <td>410-610-2754</td>
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
                                           <h2><a href="profile.html">Michael  <span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d021</td>
                                       <td>Male</td>
                                       <td>4850 Edgewood Road,USA</td>
                   <td>1 Jan 1986</td>
                                       <td>michaelvbuttars@example.com</td>
                                       <td>870-983-5423</td>
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
                                           <h2><a href="profile.html">Martin<span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d022</td>
                                       <td>Male</td>
                                       <td>1018 Marshville Road,USA</td>
                   <td>5 apri 1983</td>
                                       <td>martincchapman@example.com</td>
                                       <td>845-594-9679</td>
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
                                           <a href="profile.html" class="avatar">K</a>
                                           <h2><a href="profile.html">Kenneth <span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d023</td>
                                       <td>Male</td>
                                       <td>11 Johnstown Road,USA</td>
                   <td>10 Jan 1987</td>
                                       <td>kennethrgarner@example.com</td>
                                       <td>847-383-8653</td>
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
                                           <h2><a href="profile.html">Ronald <span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d024</td>
                                       <td>Male</td>
                                       <td>2306 Bernardo street,USA</td>
                   <td>11 Jan 1982</td>
                                       <td>ronaldrlebow@example.com</td>
                                       <td>813-240-7315</td>
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
                                           <h2><a href="profile.html">Brenda <span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d025</td>
                                       <td>Male</td>
                                       <td>80 Poplar Chase Lane,USA</td>
                   <td>21 Jun 1988</td>
                                       <td>brendaaarnold@example.com</td>
                                       <td>208-381-8106</td>
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
                                           <a href="profile.html" class="avatar">D</a>
                                           <h2><a href="profile.html">Daniel <span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d026</td>
                                       <td>Male</td>
                                       <td>4824 Kimberly Way,USA</td>
                   <td>1 Jan 1985</td>
                                       <td>danielrpeabody@example.com</td>
                                       <td>616-843-8603</td>
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
                                           <a href="profile.html" class="avatar">D</a>
                                           <h2><a href="profile.html">Dennis <span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d027</td>
                                       <td>Male</td>
                                       <td>1441 Argonne street,USA</td>
                   <td>22 Jan 1983</td>
                                       <td>dennistcabrera@example.com</td>
                                       <td>302-258-6160</td>
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
                                           <a href="profile.html" class="avatar">H</a>
                                           <h2><a href="profile.html">Heriberto <span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d028</td>
                                       <td>Male</td>
                                       <td>3343 Shinn Avenue,USA</td>
                   <td>1 July 1982</td>
                                       <td>heribertomniebuhr@example.com</td>
                                       <td>724-552-9237</td>
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
                                           <h2><a href="profile.html">Jean <span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d029</td>
                                       <td>Male</td>
                                       <td>2297 Aspen Courtc ,USA</td>
                   <td>1 feb 1985</td>
                                       <td>jeanjhenderson@example.com</td>
                                       <td>617-330-4593</td>
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
                                           <a href="profile.html" class="avatar">D</a>
                                           <h2><a href="profile.html">Daniel <span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d026</td>
                                       <td>Male</td>
                                       <td>4824 Kimberly Way,USA</td>
                   <td>1 Jan 1985</td>
                                       <td>danielrpeabody@example.com</td>
                                       <td>616-843-8603</td>
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
                                           <a href="profile.html" class="avatar">D</a>
                                           <h2><a href="profile.html">Dennis <span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d027</td>
                                       <td>Male</td>
                                       <td>1441 Argonne street,USA</td>
                   <td>1 Jan 1985</td>
                                       <td>dennistcabrera@example.com</td>
                                       <td>302-258-6160</td>
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
                                           <a href="profile.html" class="avatar">H</a>
                                           <h2><a href="profile.html">Heriberto<span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d028</td>
                                       <td>Male</td>
                                       <td>3343 Shinn Avenue,USA</td>
                   <td>1 Jan 1985</td>
                                       <td>heribertomniebuhr@example.com</td>
                                       <td>724-552-9237</td>
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
                                           <h2><a href="profile.html">Jean<span>(Maths)</span></a></h2>
                                       </td>
                                       <td>TE-0d029</td>
                                       <td>Male</td>
                                       <td>2297 Aspen Courtc ,USA</td>
                   <td>1 Jan 1985</td>
                                       <td>jeanjhenderson@example.com</td>
                                       <td>617-330-4593</td>
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
