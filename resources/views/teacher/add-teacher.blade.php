@extends('layouts.apping')

@section('contents')
<div class="page-wrapper"> <!-- content -->
            <div class="content container-fluid">
                <div class="page-header">
					<div class="row">
						<div class="col-lg-7 col-md-12 col-sm-12 col-12">
							<h5 class="text-uppercase">add teacher</h5>
						</div>
						<div class="col-lg-5 col-md-12 col-sm-12 col-12">
							<ul class="list-inline breadcrumb float-right">
								<li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
								<li class="list-inline-item"><a href="{{ route('addteacher.index') }}">Teacher</a></li>
								<li class="list-inline-item"> Add Teacher</li>
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
											<div class="page-title">basic information</div>
										</div>

									</div>
								</div>
								<div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											 <form method="post" action="{{ route('addteacher.store') }}" enctype="multipart/form-data">
                           @csrf
												<div class="form-group custom-mt-form-group">
													<input type="text"  name="Firstname" value="{{ old('Firstname') }}" />
                            <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id ?? ""}}">
													<label class="control-label">Firstname</label><i class="bar"></i>
                          @error ('Firstname')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div>
												{{-- <div class="form-group custom-mt-form-group">
													<input type="text" name="email" value="{{ old('email') }}" />
													<label class="control-label">Email</label><i class="bar"></i>
                          @error ('email')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div> --}}
												{{-- <div class="form-group custom-mt-form-group">
													<input type="password" name="password" />
													<label class="control-label">Password</label><i class="bar"></i>
                          @error ('password')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div> --}}
												<div class="form-group custom-mt-form-group">
													<input type="text" name="Subject" value="{{ old('Subject') }}" />
													<label class="control-label">Subject</label><i class="bar"></i>
                          @error ('Subject')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div>
												<div class="form-group custom-mt-form-group">
													<select name="gender" value="{{ old('gender') }}" >
														<option>Male</option>
														<option>Female</option>
													 </select>
													 <label class="control-label">Gender</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													 <input class="datetimepicker" type="" name="brithday" >
													<label class="control-label">Birth Date</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text" name="classe" value="{{ old('classe') }}" />
													<label class="control-label">Class</label><i class="bar"></i>
                          @error ('classe')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text" name="father_name" value="{{ old('father_name') }}" />
													<label class="control-label">Father Name</label><i class="bar"></i>
                          @error ('father_name')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text" name="religion" value="{{ old('religion') }}" />
													<label class="control-label">Religion</label><i class="bar"></i>
                          @error ('religion')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
												<div class="form-group custom-mt-form-group">
													<input type="text" name="last_name" value="{{ old('last_name') }}" >
													<label class="control-label">Lastname</label><i class="bar"></i>
                          @error ('last_name')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div>
												<div class="form-group custom-mt-form-group">
													 <input class="form-control floating datetimepicker" type="text" name="joining_date" value="{{ old('joining_date') }}" >
													<label class="control-label">Joining Date</label><i class="bar"></i>
												</div>
												{{-- <div class="form-group custom-mt-form-group">
													<input type="password" name="password" />
													<label class="control-label">Confirm Password</label><i class="bar"></i>
                          @error ('password')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div> --}}
												<div class="form-group custom-mt-form-group">
													<input type="number" name="phone_number" value="{{ old('phone_number') }}"  />
													<label class="control-label">Mobile number</label><i class="bar"></i>
                          @error ('phone_number')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div>
												<div class="form-group custom-mt-form-group">
													<select name="social_science" value="{{ old('social_science') }}" >
														<option>Computer</option>
														<option>Science</option>
														<option>Maths</option>
														<option>Tamil</option>
														<option>English</option>
														<option>Social Science</option>
													 </select>
													 <label class="control-label">Social Science</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text" name="card_id" value="{{ old('card_id') }}" />
													<label class="control-label">ID</label><i class="bar"></i>
                          @error ('card_id')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text" name="section" value="{{ old('section') }}" />
													<label class="control-label">Section</label><i class="bar"></i>
                          @error ('section')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text" name="mother_name" value="{{ old('mother_name') }}" />
													<label class="control-label">Mother Name</label><i class="bar"></i>
                          @error ('mother_name')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text" name="nationality" value="{{ old('nationality') }}" />
													<label class="control-label">Nationality</label><i class="bar"></i>
                          @error ('nationality')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div>

										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="form-group">
													<textarea  class="form__field" placeholder="Premanent Address" rows="4" name="address" value="{{ old('address') }}" ></textarea>
													<label for="message" class="form-label">Premanent Address</label>
                          @error ('address')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
												</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="form-group custom-mt-form-group">
													  <input type="file" name="teacher_imegre" accept="image/*" style="margin-bottom:10px;">
													<label class="control-label"></label><i class="bar"></i>
												</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="form-group text-center custom-mt-form-group">
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
