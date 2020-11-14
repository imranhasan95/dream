@extends('layouts.apps')

@section('conten')

<div class="page-wrapper"> <!-- content -->
            <div class="content container-fluid">
			 <div class="page-header">
					<div class="row">
						<div class="col-lg-7 col-md-12 col-sm-12 col-12">
							<h5 class="text-uppercase">School Settings</h5>
						</div>
						<div class="col-lg-5 col-md-12 col-sm-12 col-12">
							<ul class="list-inline breadcrumb float-right">
								<li class="list-inline-item"><a href="#">Home</a></li>
								<li class="list-inline-item"><a href="#">Settings</a></li>
								<li class="list-inline-item"> School Settings</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="content-page p-4">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form>
                            <h3 class="page-title">School Settings</h3>
                            <div class="row">
                                <div class="col-sm-6">
									<div class="form-group custom-mt-form-group">
										<input type="text" value="Preschool"  >
										<label class="control-label">School Name <span class="text-danger">*</span></label><i class="bar"></i>
									</div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group custom-mt-form-group">
										<input type="text" value="Daniel Porter"  >
										<label class="control-label">Contact Person</label><i class="bar"></i>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
									<div class="form-group">
										<textarea id="message" class="form__field" placeholder="Address" rows="4">3864 Quiet Valley Lane, Sherman Oaks, CA, 91403</textarea>
										<label for="message" class="form-label">Address</label>
									</div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group custom-mt-form-group">
										<select >
											<option>USA</option>
                                            <option>United Kingdom</option>
										 </select>
										 <label class="control-label">Country</label><i class="bar"></i>
									</div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">

									<div class="form-group custom-mt-form-group">
										<select >
											<option>California</option>
                                            <option>Alaska</option>
                                            <option>Alabama</option>
										 </select>
										 <label class="control-label">state/Province</label><i class="bar"></i>
									</div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group custom-mt-form-group">
										<input type="text" value="Sherman Oaks"  >
										<label class="control-label">City</label><i class="bar"></i>
									</div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group custom-mt-form-group">
										<input type="text" value="91403"  >
										<label class="control-label">Postal Code</label><i class="bar"></i>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
									<div class="form-group custom-mt-form-group">
										<input type="email" value="danielporter@example.com"  >
										<label class="control-label">Email </label><i class="bar"></i>
									</div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group custom-mt-form-group">
										<input type="text" value="818-978-7102"  >
										<label class="control-label">Phone Number</label><i class="bar"></i>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
									<div class="form-group custom-mt-form-group">
										<input type="text" value="818-635-5579"  >
										<label class="control-label">Mobile Number</label><i class="bar"></i>
									</div>
                                </div>
                                <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
										<input type="text" value="818-978-7102"  >
										<label class="control-label">Fax</label><i class="bar"></i>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
									<div class="form-group custom-mt-form-group">
										<input type="text" value="https://www.example.com/"  >
										<label class="control-label">Website Url</label><i class="bar"></i>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center m-t-20">
                                    <button type="button" class="btn btn-primary btn-lg mb-3">Save &amp; update</button>
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
      </div>

@endsection

@section('script')

@endsection
