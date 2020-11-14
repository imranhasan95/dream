@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
     <div class="page-header">
       <div class="row">
         <div class="col-lg-7 col-md-12 col-sm-12 col-12">
           <h5 class="text-uppercase">Horizontal Form</h5>
         </div>
         <div class="col-lg-5 col-md-12 col-sm-12 col-12">
           <ul class="list-inline breadcrumb float-right">
             <li class="list-inline-item"><a href="#">Home</a></li>
             <li class="list-inline-item"><a href="#">Forms</a></li>
             <li class="list-inline-item">Horizontal Form</li>
           </ul>
         </div>
       </div>
     </div>

               <div class="row">
                   <div class="col-md-6">
                       <div class="card-box">
                           <h4 class="card-title">Basic Form</h4><br>
                           <form action="#">
                               <div class="form-group row">
                                   <label class="col-md-3 col-form-label">First Name</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 col-form-label">Last Name</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 col-form-label">Email Address</label>
                                   <div class="col-md-9">
                                       <input type="email" class="form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 col-form-label">Username</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 col-form-label">Password</label>
                                   <div class="col-md-9">
                                       <input type="password" class="form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 col-form-label">Repeat Password</label>
                                   <div class="col-md-9">
                                       <input type="password" class="form-control">
                                   </div>
                               </div>
                               <div class="text-right">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                               </div>
                           </form>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="card-box">
                           <h4 class="card-title">Address Form</h4><br>
                           <form action="#">
                               <div class="form-group row">
                                   <label class="col-md-3 col-form-label">Address Line 1</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 col-form-label">Address Line 2</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 col-form-label">City</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 col-form-label">state</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 col-form-label">Country</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 col-form-label">postal Code</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control">
                                   </div>
                               </div>
                               <div class="text-right">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="card-box">
                           <h4 class="card-title">Two Column Horizontal Form</h4><br>
                           <h4 class="card-title">Personal Information</h4><br>
                           <form action="#">
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">First Name</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Last Name</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Gender</label>
                                           <div class="col-md-9">
                       <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1" checked>
                         <label class="form-check-label" for="gender_male">
                         Male
                         </label>
                       </div>
                       <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
                         <label class="form-check-label" for="gender_female">
                         Female
                         </label>
                       </div>

                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Blood Group</label>
                                           <div class="col-md-9">
                                               <select class="select">
                                                   <option>Select</option>
                                                   <option value="1">A+</option>
                                                   <option value="2">O+</option>
                                                   <option value="3">B+</option>
                                                   <option value="4">AB+</option>
                                               </select>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Username</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Email</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Password</label>
                                           <div class="col-md-9">
                                               <input type="password" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Repeat Password</label>
                                           <div class="col-md-9">
                                               <input type="password" class="form-control">
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <h4 class="card-title">Address</h4><br>
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Address Line 1</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Address Line 2</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">state</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">City</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Country</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-md-3 col-form-label">postal Code</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="text-right">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <form action="#">
                           <div class="card-box">
                               <div class="row">
                                   <div class="col-md-6">
                                       <h4 class="card-title">Personal Details</h4><br>
                                       <div class="form-group row">
                                           <label class="col-lg-3 col-form-label">Name:</label>
                                           <div class="col-lg-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-lg-3 col-form-label">Password:</label>
                                           <div class="col-lg-9">
                                               <input type="password" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-lg-3 col-form-label">state:</label>
                                           <div class="col-lg-9">
                                               <select class="select">
                                                   <option>Select state</option>
                                                   <option value="1">California</option>
                                                   <option value="2">Texas</option>
                                                   <option value="3">Florida</option>
                                               </select>
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-lg-3 col-form-label">About:</label>
                                           <div class="col-lg-9">
                                               <input type="text" placeholder="Enter message" class="form-control">
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <h4 class="card-title">Personal details</h4><br>
                                       <div class="form-group row">
                                           <label class="col-lg-3 col-form-label">Name:</label>
                                           <div class="col-lg-9">
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <input type="text" placeholder="First name" class="form-control">
                                                   </div>
                                                   <div class="col-md-6">
                                                       <input type="text" placeholder="Last name" class="form-control">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-lg-3 col-form-label">Email:</label>
                                           <div class="col-lg-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-lg-3 col-form-label">Phone:</label>
                                           <div class="col-lg-9">
                                               <input type="text" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label class="col-lg-3 col-form-label">Address:</label>
                                           <div class="col-lg-9">
                                               <input type="text" class="form-control m-b-20">
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <div class=" m-b-20">
                                                           <select class="select">
                                                               <option>Select Country</option>
                                                               <option value="1">USA</option>
                                                               <option value="2">France</option>
                                                               <option value="3">India</option>
                                                               <option value="4">Spain</option>
                                                           </select>
                                                       </div>
                                                       <input type="text" placeholder="ZIP code" class="form-control">
                                                   </div>
                                                   <div class="col-md-6">
                                                       <input type="text" placeholder="state/Province" class="form-control m-b-20">
                                                       <input type="text" placeholder="City" class="form-control">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="text-right">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                               </div>
                           </div>
                       </form>
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

@endsection

@section('script')

@endsection
