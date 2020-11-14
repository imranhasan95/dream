@extends('layouts.apps')

@section('conten')


<div class="page-wrapper"> <!-- content -->
    <div class="content container-fluid">
         <div class="page-header">
  <div class="row">
    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
      <h5 class="text-uppercase">Email Settings</h5>
    </div>
    <div class="col-lg-5 col-md-12 col-sm-12 col-12">
      <ul class="list-inline breadcrumb float-right">
        <li class="list-inline-item"><a href="#">Home</a></li>
        <li class="list-inline-item"><a href="#">Settings</a></li>
        <li class="list-inline-item"> Email Settings</li>
      </ul>
    </div>
  </div>
</div>
<div class="content-page p-4">
   <div class="row">
    <div class="col-md-12 offset-md-0 mb-4">
      <form>
        <div class="form-check-inline">
          <label class="form-check-label" for="phpmail">
            <input type="radio" class="form-check-input" id="phpmail" name="mailoption" value="option1" checked>PHP Mail
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label" for="smtpmail">
            <input type="radio" class="form-check-input" id="smtpmail" name="mailoption" value="option2">SMTP
          </label>
        </div>
       </form>
    </div>
  </div>
    <h4 class="page-title">PHP Email Settings</h4>
                    <div class="row">
                        <div class="col-sm-6">
          <div class="form-group custom-mt-form-group">
            <input type="email"  >
            <label class="control-label">Email From Address</label><i class="bar"></i>
          </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group custom-mt-form-group">
            <input type="text"  >
            <label class="control-label">Email From Name</label><i class="bar"></i>
          </div>
                        </div>
                    </div>
      <h4 class="page-title m-t-30">SMTP Email Settings</h4>
                    <div class="row">
                        <div class="col-sm-6">
           <div class="form-group custom-mt-form-group">
            <input type="text"  >
            <label class="control-label">SMTP HOft</label><i class="bar"></i>
          </div>
                        </div>
                        <div class="col-sm-6">
          <div class="form-group custom-mt-form-group">
            <input type="text"  >
            <label class="control-label">SMTP USER</label><i class="bar"></i>
          </div>
                        </div>
                        <div class="col-sm-6">
          <div class="form-group custom-mt-form-group">
            <input type="password"  >
            <label class="control-label">SMTP PASSWORD</label><i class="bar"></i>
          </div>
                        </div>
                        <div class="col-sm-6">
          <div class="form-group custom-mt-form-group">
            <input type="text"  >
            <label class="control-label">SMTP PORT</label><i class="bar"></i>
          </div>
                        </div>
                        <div class="col-sm-6">
          <div class="form-group custom-mt-form-group">
            <select >
              <option>None</option>
                                    <option>SSL</option>
                                    <option>TLS</option>
             </select>
             <label class="control-label">SMTP Security</label><i class="bar"></i>
          </div>
                        </div>
                        <div class="col-sm-6">
          <div class="form-group custom-mt-form-group">
            <input type="text"  >
            <label class="control-label">SMTP Authentication Domain</label><i class="bar"></i>
          </div>
                        </div>
                    </div>
                    <div class="col-sm-12 m-t-20 text-center">
                        <button type="button" class="btn btn-primary btn-lg mb-3">Save &amp; update</button>
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
