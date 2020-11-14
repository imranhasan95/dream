<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Insert Image into Mysql Database in Laravel 6</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
  <br />
  <h3 align="center">Insert Image </h3>
    <br />
    @if($errors->any())
    <div class="alert alert-danger">
           <ul>
           @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
           </ul>
        </div>
    @endif

    @if(session()->has('success'))
     <div class="alert alert-success">
     {{ session()->get('success') }}
     </div>
    @endif
    <br />

    <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title">User Form</h3>
         </div>
         <div class="panel-body">
         <br />
         <form method="post" action="{{ route('userimage.store') }}"  enctype="multipart/form-data">
          @csrf
          <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right">Enter </label>
           <div class="col-md-8">
            <input type="text" name="user_id" class="form-control"  value="{{ Auth::user()->id ?? ""}}"/>
            {{-- <input type="hidden" name="email" class="form-control" value="{{ Auth::user()->email ?? ""}}"/> --}}
           </div>
          </div>
         </div>
         <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right">Select Profile Image</label>
           <div class="col-md-8">
            <input type="file" name="user_image" />
           </div>
          </div>
         </div>
         <div class="form-group" align="center">
          <input type="submit"  class="btn btn-primary"  />
         </div>
         </form>
      </div>
     </div>
     <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title">User Data</h3>
         </div>
         <div class="panel-body">
         <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <tr>
                     <th width="30%">Image</th>
                     <th width="70%">Name</th>
                  </tr>
                  @foreach($serimages as $row)
                  <tr>
                   <td>
                    <img src="{{ asset('uploads/user_image') }}/{{ $row->user_image }}"  class="img-thumbnail" width="75" />
                   </td>
                   <a type="button" class="btn btn-warning text-center"  href="{{ route('userimage.edit', [$row->id]) }}">Edit</a>
                  </tr>
                  @endforeach
              </table>

             </div>
         </div>
     </div>
    </div>
 </body>
</html>
