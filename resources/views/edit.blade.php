@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-5 m-auto">
              <div class="card">
                  <div class="card-header text-center ">Edit Profile Image</div>
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                      <form  action="{{  route('userimage.update', [$users_info->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <input type="hidden" class="form-control" name="id" value="{{ $users_info->id }}">
                          <input type="hidden" name="_method" value="PUT">
                        </div>
                        <div class="form-group">
                          <label >Current  Imeges</label>
                            <img src="{{ asset('uploads/user_image') }}/{{ $users_info->user_image }}" alt="" width="150" height="150">
                        </div>
                          <div class="form-group">
                            <label >New Photo</label>
                            <input type="file" name="new_photo" class="form-control" onchange="readURL(this);">
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
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
