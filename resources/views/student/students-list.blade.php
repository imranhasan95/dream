@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
     <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">students List</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="#">Home</a></li>
               <li class="list-inline-item"><a href="#">Students</a></li>
               <li class="list-inline-item"> Students List</li>
             </ul>
           </div>
         </div>
       </div>
               <div class="row">
                   <div class="col-sm-4 col-3">

                   </div>
                   <div class="col-sm-8 col-9 text-right m-b-20">
                       <a href="add-student.html" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Student</a>
                       <div class="view-icons">
                           <a href="all-students.html" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
                           <a href="students-list.html" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
                       </div>
                   </div>
               </div>
     <div class="content-page">
               <div class="row filter-row">
                   <div class="col-sm-6 col-md-3">
           <div class="form-group custom-mt-form-group">
             <input type="text"  />
             <label class="control-label">Student ID</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
           <div class="form-group custom-mt-form-group">
             <input type="text"  />
             <label class="control-label">Student Name</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
           <div class="form-group custom-mt-form-group">
             <select >
               <option>Select class</option>
               <option>1</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                               <option>5</option>
                               <option>6</option>
                               <option>7</option>
                               <option>8</option>
                               <option>9</option>
                               <option>10</option>
              </select>
              <label class="control-label">Class</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <a href="#" class="btn btn-success btn-block mt-4 mb-2"> Search </a>
                   </div>
               </div>
               <div class="row">
                   <div class="col-lg-12">
                       <div class="table-responsive">
                           <table class="table table-striped custom-table datatable">
                               <thead>
                                   <tr>
                                       <th style="min-width:50px;">Name </th>
                                       <th style="min-width:70px;">Student ID</th>
                                       <th style="min-width:50px;">Gender</th>
                                       <th style="min-width:90px;">Parents Name</th>
                   <th style="min-width:20px;">Class</th>
                   <th style="min-width:50px;">Section</th>
                   <th style="min-width:50px;"> Address</th>
                   <th style="min-width:80px;">Date of Birth</th>
                                       <th style="min-width:50px;">Email</th>
                                       <th style="min-width:50px;">Mobile</th>
                                       <th class="text-right" style="min-width:50px;">Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>
                                           <a href="profile.html" class="avatar">P</a>
                                           <h2><a href="profile.html">Parker <span></span></a></h2>
                                       </td>
                                       <td>ST-0d001</td>
                                       <td>Male</td>
                                       <td>Jeffrey M. Wong</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>913 Deer Ridge Drive,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>parker@example.com</td>
                                       <td>973-584-5870</td>
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
                                           <a href="profile.html" class="avatar">S</a>
                                           <h2><a href="profile.html"> Smith <span></span></a></h2>
                                       </td>
                                       <td>ST-0d002</td>
                                       <td>Male</td>
                                       <td>Michael S. Porch</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>3148 Melody Lane,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>smith@example.com</td>
                                       <td>804-478-7698</td>
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
                                           <h2><a href="profile.html">Hensley <span></span></a></h2>
                                       </td>
                                       <td>ST-0d003</td>
                                       <td>Male</td>
                                       <td>Elaine A. Keenum</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>665 Isaacs Creek Road,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>hensley@example.com</td>
                                       <td>217-509-0538</td>
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
                                           <a href="profile.html" class="avatar">F</a>
                                           <h2><a href="profile.html">Friesen <span></span></a></h2>
                                       </td>
                                       <td>ST-0d004</td>
                                       <td>Male</td>
                                       <td>Marion S. Shannon</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>3821 Ash street,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>friesen@example.com</td>
                                       <td>973-584-58700</td>
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
                                           <h2><a href="profile.html">Jackson<span></span></a></h2>
                                       </td>
                                       <td>ST-0d005</td>
                                       <td>Male</td>
                                       <td>Parker</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>3076 Gandy street,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>jackson@example.com</td>
                                       <td>315-224-9840</td>
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
                                           <a href="profile.html" class="avatar">G</a>
                                           <h2><a href="profile.html">Garrett<span></span></a></h2>
                                       </td>
                                       <td>ST-0d007</td>
                                       <td>Male</td>
                                       <td>Jennifer M. Walker</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>2281 Whispering Pines Circle,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>garrett@example.com</td>
                                       <td>973-584-58700</td>
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
                                           <a href="profile.html" class="avatar">P</a>
                                           <h2><a href="profile.html">Perry<span></span></a></h2>
                                       </td>
                                       <td>ST-0d008</td>
                                       <td>Male</td>
                                       <td>Christopher S. Ramirez</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>1875 Charles street,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>perry@example.com</td>
                                       <td>973-584-58700</td>
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
                                           <h2><a href="profile.html">Williams<span></span></a></h2>
                                       </td>
                                       <td>ST-0d009</td>
                                       <td>Male</td>
                                       <td>Danielle D. Hickson</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>2230 Paul Wayne Haggerty Road,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>williams@example.com</td>
                                       <td>504-371-7703</td>
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
                                           <h2><a href="profile.html">Parker <span></span></a></h2>
                                       </td>
                                       <td>ST-0d010</td>
                                       <td>Male</td>
                                       <td>Parker</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>1645 Gateway Avenue,California</td>
                   <td>1 Jan 2012</td>
                                       <td>johndoe@example.com</td>
                                       <td>973-584-58700</td>
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
                                           <a href="profile.html" class="avatar">F</a>
                                           <h2><a href="profile.html">Friesen <span></span></a></h2>
                                       </td>
                                       <td>ST-0d011</td>
                                       <td>Male</td>
                                       <td>Marion S. Shannon</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>3821 Ash street,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>friesen@example.com</td>
                                       <td>973-584-58700</td>
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
                                           <h2><a href="profile.html">Jackson<span></span></a></h2>
                                       </td>
                                       <td>ST-0d012</td>
                                       <td>Male</td>
                                       <td>Parker</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>3076 Gandy street,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>jackson@example.com</td>
                                       <td>315-224-9840</td>
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
                                           <a href="profile.html" class="avatar">G</a>
                                           <h2><a href="profile.html">Garrett<span></span></a></h2>
                                       </td>
                                       <td>ST-0d014</td>
                                       <td>Male</td>
                                       <td>Jennifer M. Walker</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>2281 Whispering Pines Circle,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>garrett@example.com</td>
                                       <td>973-584-58700</td>
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
                                           <a href="profile.html" class="avatar">P</a>
                                           <h2><a href="profile.html">Perry<span></span></a></h2>
                                       </td>
                                       <td>ST-0d015</td>
                                       <td>Male</td>
                                       <td>Christopher S. Ramirez</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>1875 Charles street,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>perry@example.com</td>
                                       <td>973-584-58700</td>
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
                                           <h2><a href="profile.html">Williams<span></span></a></h2>
                                       </td>
                                       <td>ST-0d016</td>
                                       <td>Male</td>
                                       <td>Danielle D. Hickson</td>
                                       <td>1</td>
                                       <td>A</td>
                                       <td>2230 Paul Wayne Haggerty Road,USA</td>
                   <td>1 Jan 2012</td>
                                       <td>williams@example.com</td>
                                       <td>504-371-7703</td>
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
                       <h4 class="modal-title">Delete student</h4>
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
