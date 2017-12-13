@extends('layouts.app')

@section('title')
  HarmaFash
@endsection

@section('content')
 
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				@if(Session::has('success'))
					   <div class="alert alert-success">
					     {{ Session::get('success') }}
					   </div>
				@endif

				<a href="{{ url('/home') }}"><h2><font color="#077713">Go Back</font></h2></a>
            	<div class="panel panel-default">
	                <div class="panel-heading">Please enter your details</div>
	                <div class="panel-body">	 
						<form action = "checkout" method="POST">
						{{ csrf_field() }}

		                	<div class="form-group col-lg-12">
			                    <label>Name</label>
			                    <input type="text" name="name" placeholder =" Enter your fulname " class="form-control" required = ""/>
		                    </div>

		                    <div class="form-group col-lg-12">
			                    <label>Address Line</label>
			                    <input type="text" name="addressLine" class="form-control" placeholder =" your address Line" required = ""/>
		                    </div>

		                    <div class="form-group col-lg-12">
		                    	<label>city</label>
		                        <input type="text" name="city" class="form-control" placeholder =" Your city" required = ""/>
		                    </div>

		                    <div class="form-group col-lg-12">
		                    	<label>State</label>
		                        <input type="text" name="state" class="form-control" placeholder =" Your state" required = ""/>
		                    </div>

		                    <div class="form-group col-lg-12">
		                    	<label>Country</label>
		                        <input type="text" name="country" class="form-control" placeholder =" Your Country" required = ""/>
		                    </div>

		                    <div class="form-group col-lg-12">
		                    	<label>Phone</label>
		                        <input type="text" name="phone" class="form-control" placeholder =" Your tel. Number" required = ""/>
		                    </div>

		                    <div class="clearfix"></div>
		                        <div class="form-group col-lg-12 text-center">
		                        <input type="hidden" name="save" value="checkout">
		                        <button type="submit" class="btn btn-success" role="button">Send your details</button>
		                    </div>
		        	    </form>
	        	    </div>
        	    </div>
        	</div>
        </div>
 
@endsection