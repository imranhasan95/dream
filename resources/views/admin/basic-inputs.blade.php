@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
       <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">Basic Inputs</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="#">Home</a></li>
               <li class="list-inline-item"><a href="#">Forms</a></li>
               <li class="list-inline-item"> Basic Inputs</li>
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
                     <div class="page-title"> Basic Inputs</div>
                   </div>
                 </div>
               </div>
               <div class="card-body">
                 <div class="row">
                   <div class="col-lg-12">
                      <form>
                       <div class="form-group custom-mt-form-group">
                         <input type="text"  />
                         <label class="control-label">Text Input</label><i class="bar"></i>
                       </div>
                       <div class="form-group custom-mt-form-group">
                         <input type="password"  />
                         <label class="control-label">Password</label><i class="bar"></i>
                       </div>
                       <div class="form-group custom-mt-form-group">
                         <input type="text" disabled="disabled"  />
                         <label class="control-label">Disabled Input</label><i class="bar"></i>
                       </div>
                       <div class="form-group custom-mt-form-group">
                         <input type="text" value="Readonly" readonly="Readonly"  />
                         <label class="control-label">Readonly Input</label><i class="bar"></i>
                       </div>
                       <div class="form-group custom-mt-form-group">
                         <input type="text" value="Placeholder" placeholder="Placeholder"  />
                         <label class="control-label">Placeholder</label><i class="bar"></i>
                       </div>
                       <div class="form-group custom-mt-form-group">
                          <input type="file" name="pic" accept="image/*" style="margin-bottom:10px;">
                         <label class="control-label">File input</label><i class="bar"></i>
                       </div>
                       <div class="form-group custom-mt-form-group">
                         <select >
                           <option>-- Select --</option>
                           <option>Option 1</option>
                           <option>Option 2</option>
                           <option>Option 3</option>
                           <option>Option 4</option>
                           <option>Option 5</option>
                          </select>
                          <label class="control-label">Default select</label><i class="bar"></i>
                       </div>
                       <div class="form-group row ">
                         <label class="col-form-label col-md-2">Radio</label>
                         <div class="col-md-10">
                           <div class="radio">
                             <label>
                               <input type="radio" name="radio"> Option 1
                             </label>
                           </div>
                           <div class="radio">
                             <label>
                               <input type="radio" name="radio"> Option 2
                             </label>
                           </div>
                           <div class="radio">
                             <label>
                               <input type="radio" name="radio"> Option 3
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="form-group row ">
                         <label class="col-form-label col-md-2">Checkbox</label>
                         <div class="col-md-10">
                           <div class="checkbox">
                             <label>
                               <input type="checkbox" name="checkbox"> Option 1
                             </label>
                           </div>
                           <div class="checkbox">
                             <label>
                               <input type="checkbox" name="checkbox"> Option 2
                             </label>
                           </div>
                           <div class="checkbox">
                             <label>
                               <input type="checkbox" name="checkbox"> Option 3
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="form-group">
                         <textarea id="message" class="form__field" placeholder="Textarea" rows="4"></textarea>
                         <label for="message" class="form-label">Textarea</label>
                       </div>
                     </form>
                     <div class="card-box">
                       <h4 class="card-title">Input Sizes</h4>
                       <form action="#">
                         <div class="form-group custom-mt-form-group">
                           <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg"  />
                           <label class="control-label">Large Input</label><i class="bar"></i>
                         </div>
                         <div class="form-group custom-mt-form-group">
                           <input type="text" class="form-control" placeholder=".form-control"  />
                           <label class="control-label">Default Input</label><i class="bar"></i>
                         </div>
                         <div class="form-group custom-mt-form-group">
                           <input type="text" class="form-control form-control-sm" placeholder=".form-control-sm"  />
                           <label class="control-label">Small Input</label><i class="bar"></i>
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
