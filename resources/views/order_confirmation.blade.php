@extends('layouts.publicmaster')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h1>Thank you {{ $fullname }}</h1>
				<h2>Your Order is Being Processed</h2>
				<p>A confrimation mail would be sent to the provided email address</p>
			</div>
		</div>
	</div>
@endsection