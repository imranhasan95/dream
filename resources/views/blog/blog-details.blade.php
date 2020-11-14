@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
               <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">Blog View</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="#">Home</a></li>
               <li class="list-inline-item"><a href="#">Blog</a></li>
               <li class="list-inline-item"> Blog View</li>
             </ul>
           </div>
         </div>
       </div>
               <div class="row">
                   <div class="col-md-8">
                       <div class="blog-view">
                           <article class="blog blog-single-post">
                               <h3 class="blog-title">Do you know the ABCs school?</h3>
                               <div class="blog-info clearfix">
                                   <div class="post-left">
                                       <ul>
                                           <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span>December 6, 2018</span></a></li>
                                           <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> <span>By Andrew Dawis</span></a></li>
                                       </ul>
                                   </div>
                                   <div class="post-right"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>1 Comment</a></div>
                               </div>
                               <div class="blog-image">
                                   <a href="#"><img alt="" src="{{ asset('admin/assets/img/blog/blog-01.jpg') }}" class="img-fluid"></a>
                               </div>
                               <div class="blog-content">
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis noftrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id eft laborum.</p>
                                   <p>Sed ut perspiciatis unde omnis ifte natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam eft, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis noftrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil moleftiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                   <blockquote>
                                       <p>Veftibulum id ligula porta felis euismod semper. Sed posuere consectetur eft at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis veftibulum. Duis mollis, eft non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Veftibulum id ligula porta felis euismod semper.</p>
                                   </blockquote>
                                   <p>At vero eos et accusamus et iufto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas moleftias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id eft laborum et dolorum fuga. Et harum quidem rerum facilis eft et expedita distinctio. Nam libero tempore, cum soluta nobis eft eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda eft, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et moleftiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                               </div>
                           </article>
                           <div class="widget blog-share clearfix">
                               <h3>Share the post</h3>
                               <ul class="social-share">
                                   <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                   <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                   <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                               </ul>
                           </div>
                           <div class="widget author-widget clearfix">
                               <h3>About author</h3>
                               <div class="about-author">
                                   <div class="about-author-img">
                                       <div class="author-img-wrap">
                                           <img class="img-fluid rounded-circle" alt="" src="assets/img/user.jpg">
                                       </div>
                                   </div>
                                   <div class="author-details">
                                       <span class="blog-author-name">Linda Barrett</span>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis noftrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                   </div>
                               </div>
                           </div>
                           <div class="widget blog-comments clearfix">
                               <h3>Comments (3)</h3>
                               <ul class="comments-list">
                                   <li>
                                       <div class="comment">
                                           <div class="comment-author">
                                               <img class="avatar" alt="" src="assets/img/user.jpg">
                                           </div>
                                           <div class="comment-block">
                                               <span class="comment-by">
                         <span class="blog-author-name">Diana Bailey</span>
                                               <span class="float-right">
                           <span class="blog-reply"><a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                               </span>
                                               </span>
                                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                                               <span class="blog-date">December 6, 2018</span>
                                           </div>
                                       </div>
                                       <ul class="comments-list reply">
                                           <li>
                                               <div class="comment">
                                                   <div class="comment-author">
                                                       <img class="avatar" alt="" src="assets/img/user.jpg">
                                                   </div>
                                                   <div class="comment-block">
                                                       <span class="comment-by">
                             <span class="blog-author-name">Henry Daniels</span>
                                                       <span class="float-right">
                               <span class="blog-reply"><a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                                       </span>
                                                       </span>
                                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                       <span class="blog-date">December 6, 2018</span>
                                                   </div>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="comment">
                                                   <div class="comment-author">
                                                       <img class="avatar" alt="" src="assets/img/user.jpg">
                                                   </div>
                                                   <div class="comment-block">
                                                       <span class="comment-by">
                             <span class="blog-author-name">Diana Bailey</span>
                             <span class="float-right">
                               <span class="blog-reply"> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                             </span>
                                                       </span>
                                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                       <span class="blog-date">December 7, 2018</span>
                                                   </div>
                                               </div>
                                           </li>
                                       </ul>
                                   </li>
                                   <li>
                                       <div class="comment">
                                           <div class="comment-author">
                                               <img class="avatar" alt="" src="assets/img/user.jpg">
                                           </div>
                                           <div class="comment-block">
                                               <span class="comment-by">
                         <span class="blog-author-name">Marie Wells</span>
                         <span class="float-right">
                           <span class="blog-reply"><a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                         </span>
                                               </span>
                                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                               <span class="blog-date">December 11, 2018</span>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="comment">
                                           <div class="comment-author">
                                               <img class="avatar" alt="" src="assets/img/user.jpg">
                                           </div>
                                           <div class="comment-block">
                                               <span class="comment-by">
                         <span class="blog-author-name">Pamela Curtis</span>
                         <span class="float-right">
                           <span class="blog-reply"><a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                         </span>
                                               </span>
                                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                               <span class="blog-date">December 13, 2018</span>
                                           </div>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                           <div class="widget new-comment clearfix">
                               <h3>Leave Comment</h3>
                               <form>
                                   <div class="row">
                                       <div class="col-sm-8">
                                           <div class="form-group">
                                               <label>Name <span class="text-red">*</span></label>
                                               <input type="text" class="form-control">
                                           </div>
                                           <div class="form-group">
                                               <label>Your email address <span class="text-red">*</span></label>
                                               <input type="email" class="form-control">
                                           </div>
                                           <div class="form-group">
                                               <label>Comments</label>
                                               <input type="text" class="form-control">
                                           </div>
                                           <div class="comment-submit">
                                               <input type="submit" value="Submit" class="btn">
                                           </div>
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
                   <aside class="col-md-4">
                       <div class="widget search-widget">
                           <h5>Blog Search</h5>
                           <form class="search-form">
                               <div class="input-group">
                                   <input type="text" placeholder="Search..." class="form-control">
                                   <div class="input-group-append">
                                       <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                   </div>
                               </div>
                           </form>
                       </div>
                       <div class="widget post-widget">
                           <h5>LaTest posts</h5>
                           <ul class="laTest-posts">
                               <li>
                                   <div class="post-thumb">
                                       <a href="blog-details.html">
                                           <img class="img-fluid" src="assets/img/blog/blog-thumb-01.jpg" alt="">
                                       </a>
                                   </div>
                                   <div class="post-info">
                                       <h4>
                     <a href="blog-details.html">Lorem ipsum dolor sit amet consectetur</a>
                   </h4>
                                       <p><i aria-hidden="true" class="fa fa-calendar"></i> December 6, 2018</p>
                                   </div>
                               </li>
                               <li>
                                   <div class="post-thumb">
                                       <a href="blog-details.html">
                                           <img class="img-fluid" src="assets/img/blog/blog-thumb-02.jpg" alt="">
                                       </a>
                                   </div>
                                   <div class="post-info">
                                       <h4>
                     <a href="blog-details.html">Lorem ipsum dolor sit amet consectetur</a>
                   </h4>
                                       <p><i aria-hidden="true" class="fa fa-calendar"></i> December 6, 2018</p>
                                   </div>
                               </li>
                               <li>
                                   <div class="post-thumb">
                                       <a href="blog-details.html">
                                           <img class="img-fluid" src="assets/img/blog/blog-thumb-03.jpg" alt="">
                                       </a>
                                   </div>
                                   <div class="post-info">
                                       <h4>
                     <a href="blog-details.html">Lorem ipsum dolor sit amet consectetur</a>
                   </h4>
                                       <p><i aria-hidden="true" class="fa fa-calendar"></i> December 6, 2018</p>
                                   </div>
                               </li>
                               <li>
                                   <div class="post-thumb">
                                       <a href="blog-details.html">
                                           <img class="img-fluid" src="assets/img/blog/blog-thumb-04.jpg" alt="">
                                       </a>
                                   </div>
                                   <div class="post-info">
                                       <h4>
                     <a href="blog-details.html">Lorem ipsum dolor sit amet consectetur</a>
                   </h4>
                                       <p><i aria-hidden="true" class="fa fa-calendar"></i> December 6, 2018</p>
                                   </div>
                               </li>
                           </ul>
                       </div>
                       <div class="widget category-widget">
                           <h5>Blog Categories</h5>
                           <ul class="categories">
                               <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Lorem ipsum dolor</a></li>
                               <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Lorem ipsum dolor</a></li>
                               <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Lorem ipsum dolor</a></li>
                               <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Lorem ipsum dolor</a></li>
                               <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Lorem ipsum dolor</a></li>
                               <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Lorem ipsum dolor</a></li>
                           </ul>
                       </div>
                       <div class="widget tags-widget">
                           <h5>Tags</h5>
                           <ul class="tags">
                               <li><a href="#" class="tag">Maths</a></li>
                               <li><a href="#" class="tag">Science</a></li>
                               <li><a href="#" class="tag">Library</a></li>
                               <li><a href="#" class="tag">Family</a></li>
                               <li><a href="#" class="tag">Sports</a></li>
                               <li><a href="#" class="tag">Test</a></li>
                               <li><a href="#" class="tag">student</a></li>
                               <li><a href="#" class="tag">Employee</a></li>
                               <li><a href="#" class="tag">Assignment</a></li>
                               <li><a href="#" class="tag">Exam</a></li>
                               <li><a href="#" class="tag">Blog</a></li>
                           </ul>
                       </div>
                   </aside>
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