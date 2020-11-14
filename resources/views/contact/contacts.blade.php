@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="chat-main-row">
                <div class="chat-main-wrapper">
                    <div class="col-lg-12 message-view">
                        <div class="chat-window">
                            <div class="fixed-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="page-title m-b-0 m-t-5">Contacts</h4>
                                    </div>
                                    <div class="col-6">
                                        <div class="navbar justify-content-end">
                                            <div class="search-box m-t-0">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control" placeholder="Search" required="">
                                                    <span class="input-group-append">
														<button class="btn" type="button"><i class="fa fa-search"></i></button>
													</span>
                                                </div>
                                            </div>
                                            <ul class="nav float-right custom-menu">
                                                <li class="nav-item dropdown dropdown-action">
                                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0)">Menu 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Menu 2</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-contents">
                                <div class="chat-content-wrap">
                                    <div class="chat-wrap-inner">
                                        <div class="contact-box">
                                        <div class="row">
                                            <div class="contact-cat col-sm-4 col-lg-3">
                                                <a href="add-contact.html" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add Contact</a>
                                                <div class="roles-menu">
                                                    <ul>
                                                        <li class="active"><a href="javascript:void(0);">All</a></li>
                                                        <li><a href="#">Teachers</a></li>
                                                        <li><a href="#">students</a></li>
                                                        <li><a href="#">Parents</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="contacts-list col-sm-8 col-lg-9">
                                                <ul class="contact-list">
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-left user-img m-r-10">
                                                                <a href="profile.html" title="John Doe"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Ruth C. Gault</span>
                                                                <span class="contact-date">Maths Teacher</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-left user-img m-r-10">
                                                                <a href="profile.html" title="Richard Miles"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Michael V. Buttars</span>
                                                                <span class="contact-date">Science Teacher</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-left user-img m-r-10">
                                                                <a href="profile.html" title="John Doe"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Ruth C. Gault</span>
                                                                <span class="contact-date">Maths Teacher</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-left user-img m-r-10">
                                                                <a href="profile.html" title="Richard Miles"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Michael V. Buttars</span>
                                                                <span class="contact-date">Science Teacher</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-left user-img m-r-10">
                                                                <a href="profile.html" title="John Doe"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Ruth C. Gault</span>
                                                                <span class="contact-date">Maths Teacher</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-left user-img m-r-10">
                                                                <a href="profile.html" title="Richard Miles"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Michael V. Buttars</span>
                                                                <span class="contact-date">Science Teacher</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-left user-img m-r-10">
                                                                <a href="profile.html" title="John Doe"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Ruth C. Gault</span>
                                                                <span class="contact-date">Maths Teacher</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-left user-img m-r-10">
                                                                <a href="profile.html" title="Richard Miles"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Michael V. Buttars</span>
                                                                <span class="contact-date">Science Teacher</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-left user-img m-r-10">
                                                                <a href="profile.html" title="John Doe"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Ruth C. Gault</span>
                                                                <span class="contact-date">Maths Teacher</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-left user-img m-r-10">
                                                                <a href="profile.html" title="Richard Miles"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Michael V. Buttars</span>
                                                                <span class="contact-date">Science Teacher</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="contact-alphapets">
                                                <div class="alphapets-inner">
                                                    <a href="#">A</a>
                                                    <a href="#">B</a>
                                                    <a href="#">C</a>
                                                    <a href="#">D</a>
                                                    <a href="#">E</a>
                                                    <a href="#">F</a>
                                                    <a href="#">G</a>
                                                    <a href="#">H</a>
                                                    <a href="#">I</a>
                                                    <a href="#">J</a>
                                                    <a href="#">K</a>
                                                    <a href="#">L</a>
                                                    <a href="#">M</a>
                                                    <a href="#">N</a>
                                                    <a href="#">O</a>
                                                    <a href="#">P</a>
                                                    <a href="#">Q</a>
                                                    <a href="#">R</a>
                                                    <a href="#">S</a>
                                                    <a href="#">T</a>
                                                    <a href="#">U</a>
                                                    <a href="#">V</a>
                                                    <a href="#">W</a>
                                                    <a href="#">X</a>
                                                    <a href="#">Y</a>
                                                    <a href="#">Z</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
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

@endsection

@section('script')

@endsection
