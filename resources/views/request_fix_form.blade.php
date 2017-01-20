@extends('layouts.publicmaster')

@section('page-title', 'Request Fix')
@section('content')
	<div class="container content">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading"><h2><i class="fa fa-hand-o-right"></i> Complete the Details Below</h2></div>
						<div class="panel-body">
							<form id="requestfix" method="post" action="{{url('/submit_order_details')}}" class="form-horizontal">
								{{ csrf_field() }}

                        <div class="form-group">
                            
								<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }} col-md-12">
									<label>Full Name</label>
									<div class="clearfix"></div>
									<div class="input-group col-md-6">
										<span class="input-group-addon bg-primary"><i class="fa fa-user"></i></span>
										<input type="text" class="form-control" placeholder="First Name" name='firstname' value="{{ old('firstnamae') }}" required/>
										@if ($errors->has('firstname'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('firstname') }}</strong>
		                                    </span>
		                                @endif
									</div>
									<div class="input-group{{ $errors->has('lastname') ? ' has-error' : '' }} col-md-6">
										<span class="input-group-addon bg-primary"><i class="fa fa-user"></i></span>
										<input type="text" class="form-control" placeholder="Last Name" name='lastname' value="{{ old('lastname') }}" required/>
										@if ($errors->has('lastname'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('lastname') }}</strong>
		                                    </span>
		                                @endif
									</div>

								</div>
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-12">
									<label for="email">Email Address</label>
									<div class="clearfix"></div>
									<div class="input-group">
										<span class="input-group-addon bg-primary"><i class="fa fa-envelope"></i></span>
										<input type="email" class="form-control" name="email" value="{{ old('email') }}" required/>
										@if ($errors->has('email'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>
								<div class="form-group col-md-12">
									<label>Device Details</label>
									<div class="clearfix"></div>
									<div class="input-group col-md-4">
										<span class="input-group-addon bg-primary"><i class="fa fa-laptop"></i></span>
										<input type="text" class="form-control" value="{{$model->brand->category->name}}" name='category' required/>
									</div>									
									<div class="input-group col-md-4">
										<span class="input-group-addon bg-primary"><i class="fa fa-tags"></i></span>
										<input type="text" class="form-control" value="{{ $model->brand->name }}" name='brand_name' required/>
									</div>

									<div class="input-group col-md-4">
										<span class="input-group-addon bg-primary"><i class="fa fa-building"></i></span>
										<input type="text" class="form-control"  value="{{ $model->model }}" name='model_name' required/>
									</div>
								</div>
								<div class="form-group{{ $errors->has('IMEI') ? ' has-error' : '' }} col-md-12">
									<label>IMEI/Serial No.</label>
									<div class="clearfix"></div>
									<div class="input-group">
										<span class="input-group-addon bg-primary"><i class="fa fa-barcode"></i></span>
										<input type="email" class="form-control" name="serial" value="{{ old('IMEI') }}" />
										@if ($errors->has('IMEI'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('IMEI') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} col-md-12">
									<label>Phone</label>
									<div class="clearfix"></div>
									<div class="input-group">
										<span class="input-group-addon bg-primary"><i class="fa fa-phone"></i></span>
										<input type="text" class="form-control bfh-phone" data-format="+234 (ddd) dddd-dddd" name="phone" value="{{ old('phone') }}" required>
										@if ($errors->has('phone'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('phone') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('pickup_address') ? ' has-error' : '' }} col-md-12">
									<label>Pick up Address</label>
									<div class="clearfix"></div>
									<div class="input-group">
										<span class="input-group-addon bg-primary"><i class="fa fa-map-marker"></i></span>
										<input type="text" class="form-control" name="pickup_address" value="{{ old('pickup_address') }}" required>
										@if ($errors->has('pickup_address'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('pickup_address') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('pickup_date') ? ' has-error' : '' }} col-md-12">
									<label>Pick up Date</label>
									<div class="clearfix"></div>
									<div class="input-group">
										<span class="input-group-addon bg-primary"><i class="fa fa-calendar"></i></span>
										<input type="text" class="form-control" name="pickup_date" value="{{ old('pickup_date') }}" id="datepicker" required>
										@if ($errors->has('pickup_date'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('pickup_date') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('coupon') ? ' has-error' : '' }} col-md-12">
									<label>Coupon Code</label>
									<div class="clearfix"></div>
									<div class="input-group">
										<span class="input-group-addon bg-primary"><i class="fa fa-tag"></i></span>
										<input type="text" class="form-control" name="coupon" value="{{ old('coupon') }}">
										@if ($errors->has('coupon'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('coupon') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>
								
								<div class="form-group col-md-12">
									<button type="submit" class="btn btn-primary pull-right">Submit Request</button>
								</div>

							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-flat">
						<div class="panel-heading"><h2>Adverts</h2></div>
						<div class="panel-body">
							<div id="ads" class="text-center">
								@if (count($errors) > 0)
							        <div class="alert alert-danger">
							            <ul>
							                @foreach ($errors->all() as $error)
							                    <li>{{ $error }}</li>
							                @endforeach
							            </ul>
							        </div>
							    @endif
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>

@endsection

@section('more-styles')
<link rel="stylesheet" href="/plugins/datepicker/datepicker3.css">
<style type="text/css">
.fh5co-cover{
	float: none
}
.content {
	margin-top: 1em;	
}
#requestfix .input-group{
	float:left;
	padding:3px;
}
.panel-heading h2{
	color: #fff;
}
.panel-body .btn-primary{
	background-color: #337ab7;
	border-color: #337ab7;
}
</style>
@endsection

@section('more-scripts')
<script src="/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript">
	$('#datepicker').datepicker({
      autoclose: true
    });
</script>
@endsection