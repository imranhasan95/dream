@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">Provident Fund</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="index.html">Home</a></li>
               <li class="list-inline-item"><a href="index.html">Accounts</a></li>
               <li class="list-inline-item"> Provident Fund</li>
             </ul>
           </div>
         </div>
       </div>
               <div class="row">
                   <div class="col-sm-5 col-4">

                   </div>
                   <div class="col-sm-7 col-8 text-right m-b-30">
                       <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#add_pf"><i class="fa fa-plus"></i> Add Provident Fund</a>
                   </div>
               </div>
       <div class="content-page">
               <div class="row">
                   <div class="col-md-12">
                       <div class="table-responsive">
                           <table class="table table-striped custom-table datatable m-b-0">
                               <thead>
                                   <tr>
                                       <th>Employee Name</th>
                                       <th>Provident Fund Type</th>
                                       <th>Employee Share</th>
                                       <th>Organization Share</th>
                                       <th>status</th>
                                       <th class="text-right">Actions</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">J</a>
                                           <h2><a href="profile.html">John Doe <span> Maths Teacher</span></a></h2>
                                       </td>
                                       <td>Percentage of Basic Salary</td>
                                       <td>2%</td>
                                       <td>2%</td>
                                       <td>
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-danger"></i> Pending
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_pf" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_pf" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
       <div id="add_pf" class="modal" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content modal-lg">
                   <div class="modal-header">
                       <h4 class="modal-title">Add Provident Fund</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <div class="modal-body">
                       <form>
                           <div class="row">
                               <div class="col-sm-6">
                 <div class="form-group custom-mt-form-group">
                   <select >
                      <option value="3">John Doe (ft-0001)</option>
                                           <option value="23">Richard Miles (ft-0002)</option>
                    </select>
                    <label class="control-label">Employee Name</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                 <div class="form-group custom-mt-form-group">
                   <select >
                       <option value="Fixed Amount" selected="">Fixed Amount</option>
                                           <option value="Percentage of Basic Salary">Percentage of Basic Salary</option>
                    </select>
                    <label class="control-label">Provident Fund Type</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-12">
                                   <div class="show-fixed-amount">
                                       <div class="row">
                                           <div class="col-sm-6">
                       <div class="form-group custom-mt-form-group">
                         <input type="text" >
                         <label class="control-label w-100">Employee Share (Amount)</label><i class="bar"></i>
                       </div>
                                           </div>
                                           <div class="col-sm-6">
                       <div class="form-group custom-mt-form-group">
                         <input type="text"  />
                         <label class="control-label w-100">Organization Share (Amount)</label><i class="bar"></i>
                       </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-sm-12">
                                   <div class="show-basic-salary">
                                       <div class="row">
                                           <div class="col-sm-6">
                       <div class="form-group custom-mt-form-group">
                         <input type="text" value="Class Test"  />
                         <label class="control-label w-100">Employee Share (%)</label><i class="bar"></i>
                       </div>
                                           </div>
                                           <div class="col-sm-6">
                       <div class="form-group custom-mt-form-group">
                         <input type="text" value="Class Test"  />
                         <label class="control-label w-100">Organization Share (%)</label><i class="bar"></i>
                       </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-sm-12">
                 <div class="form-group custom-mt-form-group">
                   <input type="text"  />
                   <label class="control-label">Description</label><i class="bar"></i>
                 </div>
                               </div>
                           </div>
                           <div class="m-t-20 text-center">
                               <button class="btn btn-primary btn-lg">Save</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <div id="edit_pf" class="modal" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content modal-lg">
                   <div class="modal-header">
                       <h4 class="modal-title">Edit Provident Fund</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <div class="modal-body">
                       <form>
                           <div class="row">
                               <div class="col-md-6">
                 <div class="form-group custom-mt-form-group">
                   <select >
                      <option value="3">John Doe (ft-0001)</option>
                                           <option value="23">Richard Miles (ft-0002)</option>
                    </select>
                    <label class="control-label">Employee Name</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-md-6">
                 <div class="form-group custom-mt-form-group">
                   <select >
                     <option value="Fixed Amount" selected="">Fixed Amount</option>
                                           <option value="Percentage of Basic Salary">Percentage of Basic Salary</option>
                    </select>
                    <label class="control-label">Provident Fund Type</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="show-fixed-amount">
                                       <div class="row">
                                           <div class="col-md-6">
                       <div class="form-group custom-mt-form-group">
                         <input type="text"  />
                         <label class="control-label w-100">Employee Share (Amount)</label><i class="bar"></i>
                       </div>
                                           </div>
                                           <div class="col-md-6">
                       <div class="form-group custom-mt-form-group">
                         <input type="text"  />
                         <label class="control-label w-100">Organization Share (Amount)</label><i class="bar"></i>
                       </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="show-basic-salary">
                                       <div class="row">
                                           <div class="col-md-6">
                       <div class="form-group custom-mt-form-group">
                         <input type="text" value="2%"  />
                         <label class="control-label w-100">Employee Share (%)</label><i class="bar"></i>
                       </div>
                                           </div>
                                           <div class="col-md-6">
                       <div class="form-group custom-mt-form-group">
                         <input type="text" value="2%"  />
                         <label class="control-label w-100">Organization Share (%)</label><i class="bar"></i>
                       </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-12">
                 <div class="form-group custom-mt-form-group">
                   <input type="text"  />
                   <label class="control-label">Description</label><i class="bar"></i>
                 </div>
                               </div>
                           </div>
                           <div class="m-t-20 text-center">
                               <button class="btn btn-primary btn-lg mb-3">Save Changes</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <div id="delete_pf" class="modal" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content modal-md">
                   <div class="modal-header">
                       <h4 class="modal-title">Delete Provident Fund</h4>
                   </div>
                   <div class="modal-body card-box">
                       <p>Are you sure want to delete this?</p>
                       <div class="m-t-20">
                           <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                           <button type="submit" class="btn btn-danger">Delete</button>
                       </div>
                   </div>
               </div>
           </div>
       </div>

@endsection

@section('script')

@endsection
