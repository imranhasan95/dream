@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
     <div class="page-header">
       <div class="row">
         <div class="col-lg-7 col-md-12 col-sm-12 col-12">
           <h5 class="text-uppercase">Basic Inputs</h5>
         </div>
         <div class="col-lg-5 col-md-12 col-sm-12 col-12">
           <ul class="list-inline breadcrumb float-right">
             <li class="list-inline-item"><a href="#">Home</a></li>
             <li class="list-inline-item"><a href="#">Forms</a></li>
             <li class="list-inline-item">Basic Inputs</li>
           </ul>
         </div>
       </div>
     </div>

               <div class="row">
                   <div class="col-lg-12">
                       <div class="card-box">
                           <h4 class="card-title">Basic Inputs</h4>
                           <form action="#">
                               <div class="form-group row ">
                                   <label class="col-form-label col-md-2">Text Input</label>
                                   <div class="col-md-10">
                                       <input type="text" class="form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">Password</label>
                                   <div class="col-md-10">
                                       <input type="password" class="form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">Disabled Input</label>
                                   <div class="col-md-10">
                                       <input type="text" class="form-control" disabled="disabled">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">Readonly Input</label>
                                   <div class="col-md-10">
                                       <input type="text" class="form-control" value="readonly" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">Placeholder</label>
                                   <div class="col-md-10">
                                       <input type="text" class="form-control" placeholder="Placeholder">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">File input</label>
                                   <div class="col-md-10">
                                       <input class="form-control" type="file">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">Default select</label>
                                   <div class="col-md-10">
                                       <select class="form-control">
                                           <option>-- Select --</option>
                                           <option>Option 1</option>
                                           <option>Option 2</option>
                                           <option>Option 3</option>
                                           <option>Option 4</option>
                                           <option>Option 5</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">Radio</label>
                                   <div class="col-md-10">
                                       <div class="radio">
                                           <label>
                                               <input type="radio" name="radio"> Option 1
                                           </label>
                                       </div>
                                       <div class="radio">
                                           <label>
                                               <input type="radio" name="radio"> Option 2
                                           </label>
                                       </div>
                                       <div class="radio">
                                           <label>
                                               <input type="radio" name="radio"> Option 3
                                           </label>
                                       </div>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">Checkbox</label>
                                   <div class="col-md-10">
                                       <div class="checkbox">
                                           <label>
                                               <input type="checkbox" name="checkbox"> Option 1
                                           </label>
                                       </div>
                                       <div class="checkbox">
                                           <label>
                                               <input type="checkbox" name="checkbox"> Option 2
                                           </label>
                                       </div>
                                       <div class="checkbox">
                                           <label>
                                               <input type="checkbox" name="checkbox"> Option 3
                                           </label>
                                       </div>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">Textarea</label>
                                   <div class="col-md-10">
                                       <input type="text" class="form-control" placeholder="Enter text here"/>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">Input Addons</label>
                                   <div class="col-md-10">
                                       <div class="input-group">
                     <div class="input-group-prepend">
                       <span class="input-group-text">$</span>
                     </div>
                                           <input class="form-control" type="text">
                     <div class="input-group-append">
                         <button class="btn btn-primary" type="button">Button</button>
                     </div>
                                       </div>
                                   </div>
                               </div>
                           </form>
                       </div>
                       <div class="card-box">
                           <h4 class="card-title">Input Sizes</h4>
                           <form action="#">
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">Large Input</label>
                                   <div class="col-md-10">
                                       <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">Default Input</label>
                                   <div class="col-md-10">
                                       <input type="text" class="form-control" placeholder=".form-control">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-form-label col-md-2">Small Input</label>
                                   <div class="col-md-10">
                                       <input type="text" class="form-control form-control-sm" placeholder=".form-control-sm">
                                   </div>
                               </div>
                           </form>
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

@endsection

@section('script')

@endsection
