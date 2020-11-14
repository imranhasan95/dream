
@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
     <div class="page-header">
       <div class="row">
         <div class="col-lg-7 col-md-12 col-sm-12 col-12">
           <h5 class="text-uppercase">Typography</h5>
         </div>
         <div class="col-lg-5 col-md-12 col-sm-12 col-12">
           <ul class="list-inline breadcrumb float-right">
             <li class="list-inline-item"><a href="#">Home</a></li>
             <li class="list-inline-item"><a href="#">Components</a></li>
             <li class="list-inline-item">Typography</li>
           </ul>
         </div>
       </div>
     </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="card-box">
                           <h4 class="card-title">Headings</h4><br>
                           <h1>h1. Bootstrap heading</h1>
                           <h2>h2. Bootstrap heading</h2>
                           <h3>h3. Bootstrap heading</h3>
                           <h4>h4. Bootstrap heading</h4>
                           <h5>h5. Bootstrap heading</h5>
                           <h6>h6. Bootstrap heading</h6>
                       </div>
                       <div class="card-box">
                           <h4 class="card-title">Blockquotes</h4><br>
                           <blockquote>
                               <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                           </blockquote>
             <blockquote class="blockquote">
               <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
             </blockquote>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="card-box">
                           <h4 class="card-title">Text elements</h4><br>
                           <p>You can use the mark tag to <mark>highlight</mark> text.</p>
             <p><del>This line of text is meant to be treated as deleted text.</del></p>
             <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
             <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
             <p><u>This line of text will render as underlined</u></p>
             <p><small>This line of text is meant to be treated as fine print.</small></p>
             <p><strong>This line rendered as bold text.</strong></p>
             <p><em>This line rendered as italicized text.</em></p>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-4">
                       <div class="card-box">
                           <h4 class="card-title">Bullet Lists</h4><br>
                           <ul>
                               <li>Lorem ipsum dolor sit amet</li>
                               <li>Consectetur adipiscing elit</li>
                               <li>Integer moleftie lorem at massa</li>
                               <li>Facilisis in pretium nisl aliquet</li>
                               <li>Nulla volutpat aliquam velit
                                   <ul>
                                       <li>Phasellus iaculis neque</li>
                                       <li>Purus sodales ultricies</li>
                                       <li>Vestibulum laoreet porttitor sem</li>
                                       <li>Ac tristique libero volutpat at</li>
                                   </ul>
                               </li>
                               <li>Faucibus porta lacus fringilla vel</li>
                               <li>Aenean sit amet erat nunc</li>
                               <li>Eget porttitor lorem</li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="card-box">
                           <h4 class="card-title">Bullet Lists</h4><br>
                           <ol>
                               <li>Lorem ipsum dolor sit amet</li>
                               <li>Consectetur adipiscing elit</li>
                               <li>Integer moleftie lorem at massa</li>
                               <li>Facilisis in pretium nisl aliquet</li>
                               <li>Nulla volutpat aliquam velit
                                   <ul>
                                       <li>Phasellus iaculis neque</li>
                                       <li>Purus sodales ultricies</li>
                                       <li>Vestibulum laoreet porttitor sem</li>
                                       <li>Ac tristique libero volutpat at</li>
                                   </ul>
                               </li>
                               <li>Faucibus porta lacus fringilla vel</li>
                               <li>Aenean sit amet erat nunc</li>
                               <li>Eget porttitor lorem</li>
                           </ol>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="card-box">
                           <h4 class="card-title">Unstyled Lists</h4><br>
                           <ul class="list-unstyled">
                               <li>Lorem ipsum dolor sit amet</li>
                               <li>Consectetur adipiscing elit</li>
                               <li>Integer moleftie lorem at massa</li>
                               <li>Facilisis in pretium nisl aliquet</li>
                               <li>Nulla volutpat aliquam velit
                                   <ul>
                                       <li>Phasellus iaculis neque</li>
                                       <li>Purus sodales ultricies</li>
                                       <li>Vestibulum laoreet porttitor sem</li>
                                       <li>Ac tristique libero volutpat at</li>
                                   </ul>
                               </li>
                               <li>Faucibus porta lacus fringilla vel</li>
                               <li>Aenean sit amet erat nunc</li>
                               <li>Eget porttitor lorem</li>
                           </ul>
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
