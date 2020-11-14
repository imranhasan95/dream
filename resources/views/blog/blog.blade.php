@extends('layouts.apping')

@section('contents')

<div class="page-wrapper"> <!-- content -->
          <div class="content container-fluid">
    <div class="page-header">
        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12 col-12">
            <h5 class="text-uppercase">Blog</h5>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 col-12">
            <ul class="list-inline breadcrumb float-right">
              <li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="list-inline-item"><a href="{{ route('addblog.index') }}">Blog</a></li>
              <li class="list-inline-item"> Blog</li>
            </ul>
          </div>
        </div>
      </div>
             <div class="row">
                  <div class="col-lg-12 col-sm-12 col-12 text-right m-b-30">
                      <a class="btn btn-primary btn-rounded float-right" href="{{ route('addblog.create') }}"><i class="fa fa-plus"></i> Add Blog</a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4">
                      <div class="blog grid-blog">
                          <div class="blog-image">
                              <a href="blog-details.html"><img class="img-fluid" src="{{ asset('admin/assets/img/blog/blog-01.jpg') }}" alt=""></a>
                          </div>
                          <div class="blog-content">
                              <h3 class="blog-title"><a href="blog-details.html">Do You Know the ABCs School?</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis noftrud exercitation ullamco sit laboris.</p>
                              <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Read More</a>
                              <div class="blog-info clearfix">
                                  <div class="post-left">
                                      <ul>
                                          <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span>December 6, 2018</span></a></li>
                                      </ul>
                                  </div>
                                  <div class="post-right"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>21</a> <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>8</a> <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>17</a></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                      <div class="blog grid-blog">
                          <div class="blog-image">
                              <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-02.jpg" alt=""></a>
                          </div>
                          <div class="blog-content">
                              <h3 class="blog-title"><a href="blog-details.html">Do You Know the ABCs School?</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis noftrud exercitation ullamco sit laboris.</p>
                              <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Read More</a>
                              <div class="blog-info clearfix">
                                  <div class="post-left">
                                      <ul>
                                          <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span>December 6, 2018</span></a></li>
                                      </ul>
                                  </div>
                                  <div class="post-right"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>21</a> <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>8</a> <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>17</a></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                      <div class="blog grid-blog">
                          <div class="blog-image">
                              <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-03.jpg" alt=""></a>
                          </div>
                          <div class="blog-content">
                              <h3 class="blog-title"><a href="blog-details.html">Do You Know the ABCs School?</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis noftrud exercitation ullamco sit laboris.</p>
                              <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Read More</a>
                              <div class="blog-info clearfix">
                                  <div class="post-left">
                                      <ul>
                                          <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span>December 6, 2018</span></a></li>
                                      </ul>
                                  </div>
                                  <div class="post-right"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>21</a> <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>8</a> <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>17</a></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                      <div class="blog grid-blog">
                          <div class="blog-image">
                              <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-04.jpg" alt=""></a>
                          </div>
                          <div class="blog-content">
                              <h3 class="blog-title"><a href="blog-details.html">Do You Know the ABCs School?</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis noftrud exercitation ullamco sit laboris.</p>
                              <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Read More</a>
                              <div class="blog-info clearfix">
                                  <div class="post-left">
                                      <ul>
                                          <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span>December 6, 2018</span></a></li>
                                      </ul>
                                  </div>
                                  <div class="post-right"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>21</a> <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>8</a> <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>17</a></div>
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
