@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
       <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">expenses</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="index.html">Home</a></li>
               <li class="list-inline-item"><a href="index.html">Accounts</a></li>
               <li class="list-inline-item">Expenses</li>
             </ul>
           </div>
         </div>
       </div>
       <div class="content-page">
               <div class="row">
                   <div class="col-sm-8 col-5">
                       <h4 class="page-title">Expenses</h4>
                   </div>
                   <div class="col-sm-4 col-7 text-right m-b-30">
                       <a href="#" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#add_expense"><i class="fa fa-plus"></i> Add Expense</a>
                   </div>
               </div>
               <div class="row filter-row">
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <div class="form-group custom-mt-form-group">
             <input type="text"  />
             <label class="control-label w-100">Item Name</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <div class="form-group custom-mt-form-group">
             <select >
                <option> -- Select -- </option>
                               <option>Loren Gatlin</option>
                               <option>Tarah Shropshire</option>
              </select>
              <label class="control-label">Purchased By</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
           <div class="form-group custom-mt-form-group">
             <select >
                <option> -- Select -- </option>
                               <option> Cash </option>
                               <option> Cheque </option>
              </select>
              <label class="control-label">Paid By</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                       <div class="form-group custom-mt-form-group">
              <input class="form-control floating datetimepicker" type="text" >
             <label class="control-label">From</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                      <div class="form-group custom-mt-form-group">
              <input class="form-control floating datetimepicker" type="text" >
             <label class="control-label">To</label><i class="bar"></i>
           </div>
                   </div>
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                       <a href="#" class="btn btn-success btn-block mt-4 mb-2"> Search </a>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="table-responsive">
                           <table class="table table-striped custom-table m-b-0 datatable">
                               <thead>
                                   <tr>
                                       <th>Item</th>
                                       <th>Purchase From</th>
                                       <th>Purchase Date</th>
                                       <th>Purchased By</th>
                                       <th>Amount</th>
                                       <th>Paid By</th>
                                       <th class="text-center">status</th>
                                       <th class="text-right">Actions</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>
                                           <strong>Table</strong>
                                       </td>
                                       <td>Amazon</td>
                                       <td>5 May 2018</td>
                                       <td>Loren Gatlin</td>
                                       <td>$1215</td>
                                       <td>Cash</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-danger"></i> Pending
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_expense"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Delete" data-toggle="modal" data-target="#delete_expense"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <strong>chair</strong>
                                       </td>
                                       <td>Amazon</td>
                                       <td>5 May 2018</td>
                                       <td>Tarah Shropshire</td>
                                       <td>$1215</td>
                                       <td>Cheque</td>
                                       <td class="text-center">
                                           <div class="dropdown action-label">
                                               <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                   <i class="fa fa-dot-circle-o text-success"></i> Approved
                                               </a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                   <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="text-right">
                                           <div class="dropdown dropdown-action">
                                               <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#" title="Edit" data-toggle="modal" data-target="#edit_expense"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   <a class="dropdown-item" href="#" title="Delete" data-toggle="modal" data-target="#delete_expense"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                               </div>
                                           </div>
                                       </td>
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
       <div id="add_expense" class="modal" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content modal-lg">
                   <div class="modal-header">
                       <h4 class="modal-title">Add Expense</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <div class="modal-body">
                       <form>
                           <div class="row">
                               <div class="col-sm-6">
                  <div class="form-group custom-mt-form-group">
                   <input type="text"  />
                   <label class="control-label w-100">Item Name</label><i class="bar"></i>
                 </div>
                               </div>
               <div class="col-sm-6">
                  <div class="form-group custom-mt-form-group">
                   <input type="text"  />
                   <label class="control-label w-100">Purchase From</label><i class="bar"></i>
                 </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-sm-6">
                  <div class="form-group custom-mt-form-group">
                    <input class="form-control floating datetimepicker" type="text" >
                   <label class="control-label">Purchase Date</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                  <div class="form-group custom-mt-form-group">
                   <select >
                      <option>Daniel Porter</option>
                                           <option>Roger Dixon</option>
                    </select>
                    <label class="control-label">Purchased By </label><i class="bar"></i>
                 </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-sm-6">
                  <div class="form-group custom-mt-form-group">
                   <input type="text" value="$50"  />
                   <label class="control-label w-100">Amount</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                  <div class="form-group custom-mt-form-group">
                   <select >
                       <option>Cash</option>
                                           <option>Cheque</option>
                    </select>
                    <label class="control-label">Paid By</label><i class="bar"></i>
                 </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-sm-6">
                  <div class="form-group custom-mt-form-group">
                   <select >
                     <option>Pending</option>
                                           <option>Approved</option>
                    </select>
                    <label class="control-label">status</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                  <div class="form-group custom-mt-form-group">
                   <input type="file" />
                   <label class="control-label w-100">Attachments</label><i class="bar"></i>
                 </div>
                               </div>
                           </div>
                           <div class="attach-files">
                               <ul>
                                   <li>
                                       <img src="assets/img/user.jpg" alt="">
                                       <a href="#" class="fa fa-close file-remove"></a>
                                   </li>
                                   <li>
                                       <img src="assets/img/user.jpg" alt="">
                                       <a href="#" class="fa fa-close file-remove"></a>
                                   </li>
                               </ul>
                           </div>
                           <div class="m-t-20 text-center">
                               <button class="btn btn-primary btn-lg">Create Expense</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <div id="edit_expense" class="modal" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content modal-lg">
                   <div class="modal-header">
                       <h4 class="modal-title">Edit Expense</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <div class="modal-body">
                       <form>
                           <div class="row">
                               <div class="col-sm-6">
                  <div class="form-group custom-mt-form-group">
                   <input type="text" value="Dell Laptop"  />
                   <label class="control-label w-100">Item Name</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                  <div class="form-group custom-mt-form-group">
                   <input type="text" value="Amazon" >
                   <label class="control-label w-100">Purchase From</label><i class="bar"></i>
                 </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-sm-6">

                  <div class="form-group custom-mt-form-group">
                    <input class="form-control floating datetimepicker" type="text" >
                   <label class="control-label">Purchase Date</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                                  <div class="form-group custom-mt-form-group">
                   <select >
                      <option>Daniel Porter</option>
                                           <option>Roger Dixon</option>
                    </select>
                    <label class="control-label">Purchased By </label><i class="bar"></i>
                 </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-sm-6">
                  <div class="form-group custom-mt-form-group">
                   <input type="text" placeholder="$50" value="$10000"  />
                   <label class="control-label w-100">Amount</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                 <div class="form-group custom-mt-form-group">
                   <select >
                     <option>Cash</option>
                                           <option>Cheque</option>
                    </select>
                    <label class="control-label">Paid By</label><i class="bar"></i>
                 </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-sm-6">

                 <div class="form-group custom-mt-form-group">
                   <select >
                     <option>Pending</option>
                                           <option>Approved</option>
                    </select>
                    <label class="control-label">status</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group custom-mt-form-group">
                   <input type="file" />
                   <label class="control-label w-100">Attachments</label><i class="bar"></i>
                 </div>
                               </div>
                           </div>
                           <div class="attach-files">
                               <ul>
                                   <li>
                                       <img src="assets/img/user.jpg" alt="">
                                       <a href="#" class="fa fa-close file-remove"></a>
                                   </li>
                                   <li>
                                       <img src="assets/img/user.jpg" alt="">
                                       <a href="#" class="fa fa-close file-remove"></a>
                                   </li>
                               </ul>
                           </div>
                           <div class="m-t-20 text-center">
                               <button class="btn btn-primary btn-lg mb-3">Save Changes</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <div id="delete_expense" class="modal" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content modal-md">
                   <div class="modal-header">
                       <h4 class="modal-title">Delete Expense</h4>
                   </div>
                   <div class="modal-body card-box">
                       <p>Are you sure want to delete this expense?</p>
                       <div class="m-t-20 text-left">
                           <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                           <button type="submit" class="btn btn-danger">Delete</button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
@endsection

@section('script')

@endsection
