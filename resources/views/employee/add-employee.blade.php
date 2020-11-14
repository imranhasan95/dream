@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
          <div class="content container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12 col-12">
            <h5 class="text-uppercase">Add Employee</h5>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 col-12">
            <ul class="list-inline breadcrumb float-right">
              <li class="list-inline-item"><a href="#">Home</a></li>
              <li class="list-inline-item"><a href="#">Management</a></li>
              <li class="list-inline-item"> Add Employee</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <div class="page-title">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-title"> Add Details</div>
                  </div>

                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <form>
                      <div class="form-group custom-mt-form-group">
                        <input type="text"  />
                        <label class="control-label">Firstname</label><i class="bar"></i>
                      </div>
                      <div class="form-group custom-mt-form-group">
                        <input type="text"  />
                        <label class="control-label">Email</label><i class="bar"></i>
                      </div>
                      <div class="form-group custom-mt-form-group">
                        <input type="password"  />
                        <label class="control-label">Password</label><i class="bar"></i>
                      </div>
                      <div class="form-group custom-mt-form-group">
                        <input type="text"   />
                        <label class="control-label">Profession</label><i class="bar"></i>
                      </div>
                      <div class="form-group custom-mt-form-group">
                        <select >
                          <option>Male</option>
                          <option>Female</option>
                         </select>
                         <label class="control-label">Gender</label><i class="bar"></i>
                      </div>

                    </form>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <form>
                      <div class="form-group custom-mt-form-group">
                        <input type="text"  />
                        <label class="control-label">Lastname</label><i class="bar"></i>
                      </div>
                      <div class="form-group custom-mt-form-group">
                        <input type="password"  />
                        <label  class="control-label">Comfirm Password</label><i class="bar"></i>
                      </div>
                      <div class="form-group custom-mt-form-group">
                        <input type="number"  />
                        <label class="control-label">Mobile number</label><i class="bar"></i>
                      </div>
                      <div class="form-group custom-mt-form-group">
                        <select >
                          <option>Computer</option>
                          <option>Science</option>
                          <option>Maths</option>
                          <option>Tamil</option>
                          <option>English</option>
                          <option>Social Science</option>
                          <option>Library</option>
                         </select>
                         <label class="control-label">Department</label><i class="bar"></i>
                      </div>
                      <div class="form-group custom-mt-form-group">
                        <input type="text" class="datetimepicker"  />
                        <label class="control-label ">Birth Date</label><i class="bar"></i>
                      </div>
                    </form>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form>
                      <div class="form-group">
                        <textarea id="message" class="form__field" placeholder="Premanent Address" rows="4"></textarea>
                        <label for="message" class="form-label">Premanent Address</label>
                      </div>
                    </form>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form>
                      <div class="form-group custom-mt-form-group">
                         <input type="file" name="pic" accept="image/*" style="margin-bottom:10px;">
                        <label class="control-label"></label><i class="bar"></i>
                      </div>
                    </form>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form>
                      <div class="form-group text-center">
                        <button class="btn btn-primary mr-2" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="reset">Cancel</button>
                      </div>
                    </form>
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
      </div>

@endsection

@section('script')

@endsection
