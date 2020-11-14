@extends('layouts.app')
@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
       <div class="page-header">
         <div class="row">
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">activities</h5>
           </div>
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="#">Home</a></li>
               <li class="list-inline-item"><a href="#">Management</a></li>
               <li class="list-inline-item">Activities</li>
             </ul>
           </div>
         </div>
       </div>

               <div class="row">
                   <div class="col-md-12">
                       <div class="activity">
                           <div class="activity-box">
                               <ul class="activity-list">
                                   <li>
                                       <div class="activity-user">
                                           <a href="profile.html" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
                                               <img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                           </a>
                                       </div>
                                       <div class="activity-content">
                                           <div class="timeline-content">
                                               <a href="profile.html" class="name">Lesley Grauer</a> added new Events<a href="#">Events list</a>
                                               <span class="time">4 mins ago</span>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="activity-user">
                                           <a href="profile.html" class="avatar" title="Jeffery Lalor" data-toggle="tooltip">L</a>
                                       </div>
                                       <div class="activity-content">
                                           <div class="timeline-content">
                                               <a href="profile.html" class="name">Jeffery Lalor</a> added <a href="profile.html" class="name">Loren Gatlin</a> and <a href="profile.html" class="name">Tarah Shropshire</a> to conduct <a href="#">Seminars</a>
                                               <span class="time">6 mins ago</span>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="activity-user">
                                           <a href="profile.html" title="Catherine Manseau" data-toggle="tooltip" class="avatar">
                                               <img alt="Catherine Manseau" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                           </a>
                                       </div>
                                       <div class="activity-content">
                                           <div class="timeline-content">
                                               <a href="profile.html" class="name">Catherine Manseau</a>Finished Subject<a href="#">Appointment booking with principal</a>
                                               <span class="time">12 mins ago</span>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="activity-user">
                                           <a href="#" title="Bernardo Galaviz" data-toggle="tooltip" class="avatar">
                                               <img alt="Bernardo Galaviz" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                           </a>
                                       </div>
                                       <div class="activity-content">
                                           <div class="timeline-content">
                                               <a href="profile.html" class="name">Bernardo Galaviz</a> changed the Events name <a href="#">Events list</a>
                                               <span class="time">1 day ago</span>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="activity-user">
                                           <a href="profile.html" title="Mike Litorus" data-toggle="tooltip" class="avatar">
                                               <img alt="Mike Litorus" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                           </a>
                                       </div>
                                       <div class="activity-content">
                                           <div class="timeline-content">
                                               <a href="profile.html" class="name">Mike Litorus</a> added new Events<a href="#">Events list</a>
                                               <span class="time">2 days ago</span>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="activity-user">
                                           <a href="profile.html" title="Jeffery Lalor" data-toggle="tooltip" class="avatar">
                                               <img alt="Jeffery Lalor" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                           </a>
                                       </div>
                                       <div class="activity-content">
                                           <div class="timeline-content">
                                               <a href="profile.html" class="name">Jeffery Lalor</a> added <a href="profile.html" class="name">Jeffrey Warden</a> and <a href="profile.html" class="name">Bernardo Galaviz</a> to the Events.
                                               <span class="time">7 days ago</span>
                                           </div>
                                       </div>
                                   </li>
                               </ul>
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

  @endsection

@section('script')

@endsection
