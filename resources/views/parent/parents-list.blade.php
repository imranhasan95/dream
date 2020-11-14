@extends('layouts.apping')

@section('contents')

<div class="page-wrapper"> <!-- content -->
          <div class="content container-fluid">
    <div class="page-header">
        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12 col-12">
            <h5 class="text-uppercase">Parents list</h5>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 col-12">
            <ul class="list-inline breadcrumb float-right">
              <li class="list-inline-item"><a href="index.html">Home</a></li>
              <li class="list-inline-item"><a href="index.html">Parents</a></li>
              <li class="list-inline-item"> Parents list</li>
            </ul>
          </div>
        </div>
      </div>
              <div class="row">
                  <div class="col-sm-4 col-3">

                  </div>
                  <div class="col-sm-8 col-9 text-right m-b-20">
                      <a href="{{ route('addparent.create') }}" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Parent</a>
                      <div class="view-icons">
                          <a href="{{ route('addparent.index') }}" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
                          <a href="parents-list.html" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
                      </div>
                  </div>
              </div>
    <div class="content-page">
              <div class="row filter-row">
                  <div class="col-sm-6 col-md-3">
          <div class="form-group custom-mt-form-group">
            <input type="text"  />
            <label class="control-label">Parents ID</label><i class="bar"></i>
          </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
          <div class="form-group custom-mt-form-group">
            <input type="text"  />
            <label class="control-label">Parents Name</label><i class="bar"></i>
          </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
          <div class="form-group custom-mt-form-group">
            <input type="text"  />
            <label class="control-label">Mobile</label><i class="bar"></i>
          </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                      <a href="#" class="btn btn-success btn-block mt-4 mb-2"> Search </a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="table-responsive-lg">
                          <table class="table table-striped custom-table datatable">
                              <thead>
                                  <tr>
                                      <th style="width:10%; min-width:10%;">Name </th>
                                      <th style="width:10%; min-width:10%;">ID</th>
                                      <th style="width:10%; min-width:10%;">Gender</th>
                                       <th style="width:100px; min-width:100px;">Student Name</th>
                                       <th style="width:10%; min-width:10%;">Occupation</th>
                                      <th style="width:100px; min-width:100px;">Address</th>
                                      <th style="width:230px; min-width:230px;">Email</th>
                                      <th style="width:70px; min-width:70px;">Mobile</th>
                                      <th class="text-right" style="width:10%;">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($addparent as $addpare)
                                  <tr>
                                      <td>
                                          <a href="{{ route('addparent.show', [$addpare->id]) }}" class="avatar"> <img src="{{ asset('uploads\parent_image') }}/{{ $addpare->parent_image }}" alt=""> </a>
                                          <h2><a href="{{ route('addparent.show', [$addpare->id]) }}">{{ $addpare->name }}<span></span></a></h2>
                                            </td>
                                            <td>{{ $addpare->id_number }}</td>
                                            <td>{{ $addpare->gender }}</td>
                                            <td>{{ $addpare->student_name }}</td>
                                            <td>{{ $addpare->occupation }}</td>
                                            <td>{{ $addpare->address }}</td>
                                            <td>{{ $addpare->email }}</td>
                                            <td>{{ $addpare->phone_number }}</td>
                                           <td class="text-right" >
                                            <a href="{{ route('addparent.edit', [$addpare->id]) }}" class="btn btn-primary btn-sm mb-1">
                                              <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                          </td>
                                  </tr>
                                @endforeach
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
  </div>
   <div id="delete_employee" class="modal" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content modal-md">
                  <div class="modal-header">
                      <h4 class="modal-title">Delete Student</h4>
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
