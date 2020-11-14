@extends('layouts.apping')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
       <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">add blog</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
               <li class="list-inline-item"><a href="#">Blog</a></li>
               <li class="list-inline-item"> Add Blog</li>
             </ul>
           </div>
         </div>
       </div>
       <div class="card">
         <div class="card-body">
          <div class="row">
           <div class="col-md-8 offset-md-2">
             <form action="{{ route('addblog.store') }}"  method="post"  enctype="multipart/form-data">
               <div class="form-group custom-mt-form-group">
                 <input type="text" name="blog_name"  />
                   <input type="hidden" class="form-control" name="added_by" value="{{ Auth::user()->id ?? ""}}">
                 <label class="control-label">Blog Name</label><i class="bar"></i>
               </div>
               <div class="form-group custom-mt-form-group">
                  <input type="file" name="blog_images" onchange="readURL(this);" accept="image/*" style="margin-bottom:10px;">
                 <label class="control-label">Blog Images</label><i class="bar"></i>
                 <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png. Maximum 10 images only.</small>
                 <div class="row">
                   <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                     <div class="product-thumbnail" >
                       <img class="hidden" id="tenant_photo_viewer" src="#" alt="your image" />
                       <script>
                             function readURL(input) {
                               if (input.files && input.files[0]) {
                                 var reader = new FileReader();
                                 reader.onload = function (e) {
                                   $('#tenant_photo_viewer').attr('src', e.target.result).width(150).height(195);
                                 };
                                 $('#tenant_photo_viewer').removeClass('hidden');
                                 reader.readAsDataURL(input.files[0]);
                               }
                             }
                     </script>
                       <span class="product-remove" id="tenant_photo_viewer" title="remove"><i class="fa fa-close"></i></span>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-6">
                   <div class="form-group custom-mt-form-group">
                     <select name="blogcategorie_id">
                       <option>Sports</option>
                       <option>Library</option>
                       <option>Management</option>
                      </select>
                      <label class="control-label">Blog Category</label><i class="bar"></i>
                   </div>
                 </div>
                 <div class="col-lg-6 col-md-6">
                   <div class="form-group custom-mt-form-group">
                     <select name="blogsubcategorie_id">
                       <option>Maths </option>
                       <option>Science</option>
                       <option>Social Science</option>
                       <option>English</option>
                       <option>Codeignitor</option>
                       <option>Tamil</option>
                       <option>H.O.D</option>
                      </select>
                      <label class="control-label">Blog Sub Category</label><i class="bar"></i>
                   </div>
                 </div>
               </div>
               <div class="form-group custom-mt-form-group">
                 <input type="text" class="form-control" name="past_description" />
                 <label class="control-label">Blog Description</label><i class="bar"></i>
               </div>
               <div class="form-group custom-mt-form-group">
                 <input type="text" class="form-control" name="shot_details" />
                 <label class="control-label">Blog Description</label><i class="bar"></i>
               </div>
               <div class="form-group custom-mt-form-group">
                 <input type="text" class="form-control" name="long_description" />
                 <label class="control-label">Blog Description</label><i class="bar"></i>
               </div>
               <!-- <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                   <h4>Blog status</h4>
                   <div class="form-check-inline">
                     <label class="form-check-label" for="radio1">
                       <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Active
                     </label>
                   </div>
                   <div class="form-check-inline">
                     <label class="form-check-label" for="radio2">
                       <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Inactive
                     </label>
                   </div>
                 </div>
                </div> -->
               <div class="m-t-20 text-center">
                 <button class="btn btn-primary btn-lg" type="submit">Publish Blog</button>
               </div>
             </form>
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
