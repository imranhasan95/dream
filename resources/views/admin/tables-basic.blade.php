@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
          <div class="content container-fluid">
    <div class="page-header">
        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12 col-12">
            <h5 class="text-uppercase">basic tables</h5>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 col-12">
            <ul class="list-inline breadcrumb float-right">
              <li class="list-inline-item"><a href="#">Home</a></li>
              <li class="list-inline-item"><a href="#">Tables</a></li>
              <li class="list-inline-item">Basic Tables</li>
            </ul>
          </div>
        </div>
      </div>
              <div class="row">
                  <div class="col-sm-5 col-4">

                  </div>
                  <div class="col-sm-7 col-8 text-right m-b-30">
                      <div class="btn-group btn-group-sm">
                          <button class="btn btn-white">CSV</button>
                          <button class="btn btn-white">PDF</button>
                          <button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-6">
                      <div class="card-box">
                          <div class="card-block">
                              <h4 class="card-title">Basic Table</h4><br>
              <div class="table-responsive">
                <table class="table m-b-0">
                  <thead>
                    <tr>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>john@example.com</td>
                    </tr>
                    <tr>
                      <td>Mary</td>
                      <td>Moe</td>
                      <td>mary@example.com</td>
                    </tr>
                    <tr>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="card-box">
                          <div class="card-block">
                              <h5 class="text-bold card-title">striped Rows</h5><br>
              <div class="table-responsive">
                <table class="table table-striped m-b-0">
                  <thead>
                    <tr>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>john@example.com</td>
                    </tr>
                    <tr>
                      <td>Mary</td>
                      <td>Moe</td>
                      <td>mary@example.com</td>
                    </tr>
                    <tr>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6">
                      <div class="card-box">
                          <div class="card-block">
                              <h5 class="text-bold card-title">Bordered Table</h5><br>
              <div class="table-responsive">
                <table class="table table-bordered m-b-0">
                  <thead>
                    <tr>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>john@example.com</td>
                    </tr>
                    <tr>
                      <td>Mary</td>
                      <td>Moe</td>
                      <td>mary@example.com</td>
                    </tr>
                    <tr>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="card-box">
                          <div class="card-block">
                              <h4 class="card-title">Hover Rows</h4><br>
              <div class="table-responsive">
                <table class="table table-hover m-b-0">
                  <thead>
                    <tr>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>john@example.com</td>
                    </tr>
                    <tr>
                      <td>Mary</td>
                      <td>Moe</td>
                      <td>mary@example.com</td>
                    </tr>
                    <tr>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6">
                      <div class="card-box">
                          <div class="card-block">
                              <h4 class="card-title">Contextual Classes</h4><br>
              <div class="table-responsive">
                <table class="table m-b-0 m-b-0">
                  <thead>
                    <tr>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Default</td>
                      <td>Defaultson</td>
                      <td>def@somemail.com</td>
                    </tr>
                    <tr class="table-primary">
                      <td>Primary</td>
                      <td>Doe</td>
                      <td>john@example.com</td>
                    </tr>
                    <tr class="table-secondary">
                      <td>Secondary</td>
                      <td>Moe</td>
                      <td>mary@example.com</td>
                    </tr>
                    <tr class="table-success">
                      <td>Success</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
                    </tr>
                    <tr class="table-danger">
                      <td>Danger</td>
                      <td>Refs</td>
                      <td>bo@example.com</td>
                    </tr>
                    <tr class="table-warning">
                      <td>Warning</td>
                      <td>Activeson</td>
                      <td>act@example.com</td>
                    </tr>
                    <tr class="table-info">
                      <td>Info</td>
                      <td>Activeson</td>
                      <td>act@example.com</td>
                    </tr>
                    <tr class="table-light">
                      <td>Light</td>
                      <td>Activeson</td>
                      <td>act@example.com</td>
                    </tr>
                    <tr class="table-dark">
                      <td>Dark</td>
                      <td>Activeson</td>
                      <td>act@example.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="card-box">
                          <div class="card-block">
                              <h4 class="card-title">Responsive Tables</h4><br>
                              <div class="table-responsive">
                                  <table class="table m-b-0">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>Firstname</th>
                                              <th>Lastname</th>
                                              <th>Age</th>
                                              <th>City</th>
                                              <th>Country</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>1</td>
                                              <td>Anna</td>
                                              <td>Pitt</td>
                                              <td>35</td>
                                              <td>New York</td>
                                              <td>USA</td>
                                          </tr>
                                          <tr>
                                              <td>1</td>
                                              <td>Anna</td>
                                              <td>Pitt</td>
                                              <td>35</td>
                                              <td>New York</td>
                                              <td>USA</td>
                                          </tr>
                                          <tr>
                                              <td>1</td>
                                              <td>Anna</td>
                                              <td>Pitt</td>
                                              <td>35</td>
                                              <td>New York</td>
                                              <td>USA</td>
                                          </tr>
                                          <tr>
                                              <td>1</td>
                                              <td>Anna</td>
                                              <td>Pitt</td>
                                              <td>35</td>
                                              <td>New York</td>
                                              <td>USA</td>
                                          </tr>
                                          <tr>
                                              <td>1</td>
                                              <td>Anna</td>
                                              <td>Pitt</td>
                                              <td>35</td>
                                              <td>New York</td>
                                              <td>USA</td>
                                          </tr>
                                          <tr>
                                              <td>1</td>
                                              <td>Anna</td>
                                              <td>Pitt</td>
                                              <td>35</td>
                                              <td>New York</td>
                                              <td>USA</td>
                                          </tr>
                    <tr>
                                              <td>1</td>
                                              <td>Anna</td>
                                              <td>Pitt</td>
                                              <td>35</td>
                                              <td>New York</td>
                                              <td>USA</td>
                                          </tr>
                    <tr>
                                              <td>1</td>
                                              <td>Anna</td>
                                              <td>Pitt</td>
                                              <td>35</td>
                                              <td>New York</td>
                                              <td>USA</td>
                                          </tr>
                    <tr>
                                              <td>1</td>
                                              <td>Anna</td>
                                              <td>Pitt</td>
                                              <td>35</td>
                                              <td>New York</td>
                                              <td>USA</td>
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
  </div>

@endsection

@section('script')

@endsection
