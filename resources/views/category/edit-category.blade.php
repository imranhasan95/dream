@extends('layouts.apping')

@section('contents')

<div class="page-wrapper"> <!-- content -->
            <div class="content container-fluid">
                <div class="page-header">
					<div class="row">
						<div class="col-lg-7 col-md-12 col-sm-12 col-12">
							<h5 class="text-uppercase">edit Blog Category</h5>
						</div>
						<div class="col-lg-5 col-md-12 col-sm-12 col-12">
							<ul class="list-inline breadcrumb float-right">
								<li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
								{{-- <li class="list-inline-item"><a href="{{ route('classadd.index') }}">Class</a></li> --}}
								<li class="list-inline-item"> Edit Blog Category</li>
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
											<div class="page-title">Blog Category information</div>
										</div>

									</div>
								</div>
								<div class="card-body">
                  <form  action="{{  route('blogcategory.update', [$category_info->id]) }}" method="post">
                    @csrf
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
                      <input type="hidden" class="form-control" name="id" value="{{ $category_info->id }}">
                      <input type="hidden" name="_method" value="PUT">
												<div class="form-group custom-mt-form-group">
													<input type="text" value="{{ $category_info->category_name }}" name="category_name" />
													<label class="control-label">Blog Category name</label><i class="bar"></i>
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

@endsection

@section('script')

@endsection
