@extends('layouts.apping')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
               <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">add parent</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
               <li class="list-inline-item"><a href="{{ route('addparent.index') }}">Parents</a></li>
               <li class="list-inline-item"> Add parent</li>
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
                     <div class="page-title">Parents information</div>
                   </div>

                 </div>
               </div>
               <div class="card-body">
                 @if (session('status'))
                     <div class="alert alert-success" role="alert">
                         {{ session('status') }}
                     </div>
                 @endif
                  <form method="post" action="{{ route('addparent.store') }}" enctype="multipart/form-data">
                 <div class="row">

                       @csrf
                   <div class="col-lg-6 col-md-6 col-sm-6 col-12">

                       <div class="form-group custom-mt-form-group">
                         <input type="text"  name="name" value="{{ old('name') }}" />
                           <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id ?? ""}}">
                         <label class="control-label">Name</label><i class="bar"></i>
                         @error ('name')
                             <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                       <div class="form-group custom-mt-form-group">
                         	<input type="text" name="email" value="{{ old('email') }}" />
                         <label class="control-label">Email</label><i class="bar"></i>
                         @error ('email')
                             <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                       {{-- <div class="form-group custom-mt-form-group">
                         <input type="password"  />
                         <label class="control-label">Password</label><i class="bar"></i>
                       </div> --}}
                       <div class="form-group custom-mt-form-group">
                         <input type="text" name="occupation" value="{{ old('occupation') }}" />
                         <label class="control-label">Occupation</label><i class="bar"></i>
                         @error ('occupation')
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
                           <input class="" type="date" name="brithday" >
                         <label class="control-label">Birth Date</label><i class="bar"></i>
                       </div>
                     </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                       <div class="form-group custom-mt-form-group">
                         <input type="text" name="id_number" value="{{ old('id_number') }}" >
                         <label class="control-label">ID</label><i class="bar"></i>
                         @error ('id_number')
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
                       {{-- <div class="form-group custom-mt-form-group">
                         <input type="password"  />
                         <label class="control-label">Comfirm Password</label><i class="bar"></i>
                       </div> --}}
                       <div class="form-group custom-mt-form-group">
                         <input type="number" name="phone_number" value="{{ old('phone_number') }}"  />
                         <label class="control-label">Mobile number</label><i class="bar"></i>
                         @error ('phone_number')
                             <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                       <div class="form-group custom-mt-form-group">
                         <input type="text" name="student_name" value="{{ old('student_name') }}" />
                         <label class="control-label">Student Name</label><i class="bar"></i>
                         @error ('student_name')
                             <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                       <div class="form-group custom-mt-form-group">
                         <input type="text" name="class_section" value="{{ old('class_section') }}" />
                         <label class="control-label">Class-Section</label><i class="bar"></i>
                         @error ('class_section')
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
                            <input type="file" name="parent_image" accept="image/*" style="margin-bottom:10px;">
                         <label class="control-label">Parents Image</label><i class="bar"></i>
                       </div>

                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                       <div class="form-group text-center custom-mt-form-group">
                         <button class="btn btn-primary mr-2" type="submit">Submit</button>
                         <button class="btn btn-secondary" type="reset">Cancel</button>
                       </div>

                   </div>

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

@endsection

@section('script')

@endsection
