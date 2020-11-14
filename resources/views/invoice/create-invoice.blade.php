@extends('layouts.app')

@section('contents')

<div class="page-wrapper"> <!-- content -->
           <div class="content container-fluid">
     <div class="page-header">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <h5 class="text-uppercase">Create Invoice</h5>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-12">
             <ul class="list-inline breadcrumb float-right">
               <li class="list-inline-item"><a href="index.html">Home</a></li>
               <li class="list-inline-item"><a href="index.html">Accounts</a></li>
               <li class="list-inline-item">Create Invoice</li>
             </ul>
           </div>
         </div>
       </div>
       <div class="content-page">
               <div class="row">
                   <div class="col-sm-12">
                       <h4 class="page-title">Create Invoice</h4>
                   </div>
               </div>
               <div class="row">
                   <div class="col-sm-12">
                       <form>
                           <div class="row">
                               <div class="col-sm-6 col-md-3">
                 <div class="form-group custom-mt-form-group">
                   <select >
                      <option>Please Select</option>
                                           <option selected>Barry Cuda</option>
                                           <option>Tressa Wexler</option>
                    </select>
                    <label class="control-label">Teacher <span class="text-danger">*</span></label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6 col-md-3">
                 <div class="form-group custom-mt-form-group">
                   <select >
                     <option>Select</option>
                                           <option selected>Management</option>
                                           <option>staff</option>
                    </select>
                    <label class="control-label">Role <span class="text-danger">*</span></label><i class="bar"></i>
                 </div>
                               </div>

                               <div class="col-sm-6 col-md-3">
                                   <div class="form-group custom-mt-form-group mt-4">
                   <input type="text">
                   <label class="control-label">Email</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6 col-md-3">
                 <div class="form-group custom-mt-form-group">
                   <select >
                      <option>Select Tax</option>
                                           <option>VAT</option>
                                           <option>Gst</option>
                                           <option>No Tax</option>
                    </select>
                    <label class="control-label">Tax</label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6 col-md-3">
                 <div class="form-group">
                   <textarea id="message" class="form__field" placeholder="Teacher Address" rows="4"></textarea>
                   <label for="message" class="form-label">Teacher Address</label>
                 </div>
                               </div>
                               <div class="col-sm-6 col-md-3">
                 <div class="form-group">
                   <textarea id="message" class="form__field" placeholder="Billing Address" rows="4"></textarea>
                   <label for="message" class="form-label">Billing Address</label>
                 </div>
                               </div>
                               <div class="col-sm-6 col-md-3">
                 <div class="form-group custom-mt-form-group">
                    <input class="datetimepicker" type="text">
                   <label class="control-label">Invoice date <span class="text-danger">*</span></label><i class="bar"></i>
                 </div>
                               </div>
                               <div class="col-sm-6 col-md-3">

                 <div class="form-group custom-mt-form-group">
                    <input class="datetimepicker" type="text">
                   <label class="control-label">Due Date <span class="text-danger">*</span></label><i class="bar"></i>
                 </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-12 col-sm-12">
                                   <div class="table-responsive">
                                       <table class="table table-hover table-white">
                                           <thead>
                                               <tr>
                                                   <th style="width: 20px">#</th>
                                                   <th class="col-sm-2">Item</th>
                                                   <th class="col-md-6">Description</th>
                                                   <th style="width:100px;">Unit COST</th>
                                                   <th style="width:80px;">Qty</th>
                                                   <th>Amount</th>
                                                   <th> </th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>1</td>
                                                   <td>
                                                       <input class="form-control" type="text" style="min-width:150px">
                                                   </td>
                                                   <td>
                                                       <input class="form-control" type="text" style="min-width:150px">
                                                   </td>
                                                   <td>
                                                       <input class="form-control" style="width:100px" type="text">
                                                   </td>
                                                   <td>
                                                       <input class="form-control" style="width:80px" type="text">
                                                   </td>
                                                   <td>
                                                       <input class="form-control" readonly="" style="width:120px" type="text">
                                                   </td>
                                                   <td><a href="javascript:void(0)" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a></td>
                                               </tr>
                                               <tr>
                                                   <td>2</td>
                                                   <td>
                                                       <input class="form-control" type="text" style="min-width:150px">
                                                   </td>
                                                   <td>
                                                       <input class="form-control" type="text" style="min-width:150px">
                                                   </td>
                                                   <td>
                                                       <input class="form-control" style="width:100px" type="text">
                                                   </td>
                                                   <td>
                                                       <input class="form-control" style="width:80px" type="text">
                                                   </td>
                                                   <td>
                                                       <input class="form-control" readonly="" style="width:120px" type="text">
                                                   </td>
                                                   <td><a href="javascript:void(0)" class="text-danger font-18" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                                   <div class="table-responsive">
                                       <table class="table table-hover table-white">
                                           <tbody>
                                               <tr>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td class="text-right">Total</td>
                                                   <td style="text-align: right; padding-right: 30px;width: 230px">0</td>
                                               </tr>
                                               <tr>
                                                   <td colspan="5" class="text-right">Tax</td>
                                                   <td style="text-align: right; padding-right: 30px;width: 230px">
                                                       <input class="form-control text-right" value="0" readonly="" type="text">
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td colspan="5" class="text-right">
                                                       Discount %
                                                   </td>
                                                   <td style="text-align: right; padding-right: 30px;width: 230px">
                                                       <input class="form-control text-right" type="text">
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td colspan="5" style="text-align: right; font-weight: bold">
                                                       Grand Total
                                                   </td>
                                                   <td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                       $ 0.00
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div class="form-group">
                                               <label>Other Information</label>
                                               <textarea class="form-control"></textarea>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="text-center m-t-20 mb-3">
                               <button class="btn btn-primary btn-lg m-r-10">Save & Send</button>
                               <button class="btn btn-primary btn-lg">Save</button>
                           </div>
                       </form>
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
