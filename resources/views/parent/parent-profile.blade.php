@extends('layouts.apping')

@section('contents')

<div class="page-wrapper"> <!-- content -->
      <div class="content container-fluid">
    <div class="page-header">
    <div class="row">
      <div class="col-lg-7 col-md-12 col-sm-12 col-12">
        <h5 class="text-uppercase">my Profile</h5>
      </div>
      <div class="col-lg-5 col-md-12 col-sm-12 col-12">
        <ul class="list-inline breadcrumb float-right">
          <li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="list-inline-item"><a href="{{ route('addparent.index') }}">Pages</a></li>
          <li class="list-inline-item"> Profile</li>
        </ul>
      </div>
    </div>
  </div>
          <div class="card-box m-b-0">
              <div class="row">
                  <div class="col-md-12">
                      <div class="profile-view">
                          <div class="profile-img-wrap">
                              <div class="profile-img">
                                  <a href="#"><img class="avatar" src="{{ asset('uploads\parent_image') }}/{{ $addparent_show->parent_image }}" alt=""></a>
                              </div>
                          </div>
                          <div class="profile-basic">
                              <div class="row">
                                  <div class="col-md-5">
                                      <div class="profile-info-left">
                                          <h3 class="user-name m-t-0">{{ $addparent_show->name }}</h3>
                                          <h5 class="company-role m-t-0 m-b-0">Preschool</h5>
                                          <small class="text-muted">Parent</small>
                                          <div class="staff-id"> ID : {{ $addparent_show->id_number }}</div>
                </div>
                                  </div>
                                  <div class="col-md-7">
                                      <ul class="personal-info">
                                          <li>
                                              <span class="title">Phone:</span>
                                              <span class="text"><a href="#">{{ $addparent_show->phone_number }}</a></span>
                                          </li>
                                          <li>
                                              <span class="title">Email:</span>
                                              <span class="text"><a href="#">{{ $addparent_show->email }}</a></span>
                                          </li>
                                          <li>
                                              <span class="title">Birthday:</span>
                                              <span class="text">{{ $addparent_show->brithday }}</span>
                                          </li>
                                          <li>
                                              <span class="title">Address:</span>
                                              <span class="text">{{ $addparent_show->address }}</span>
                                          </li>
                                          <li>
                                              <span class="title">Gender:</span>
                                              <span class="text">{{ $addparent_show->gender }}</span>
                                          </li>
                                      </ul>
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
  </div>

@endsection

@section('script')

@endsection
