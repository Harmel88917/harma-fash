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

				
            	<div class="panel panel-default">
	                <div class="panel-heading">Contact US Form</div>
	                <div class="panel-body">	 
						<form action = "contact-us" method="POST">
						{{ csrf_field() }}
		            
		                	<div class="form-group col-lg-4">
			                    <label>Name</label>
			                    <input type="text" name="name" placeholder =" Enter your fulname " class="form-control" required = ""/>
		                    </div>

		                    <div class="form-group col-lg-4">
			                    <label>Email Address</label>
			                    <input type="email" name="email" class="form-control" placeholder =" Your Email" required = ""/>
		                    </div>

		                    <div class="form-group col-lg-4">
		                    	<label>Phone Number</label>
		                        <input type="tel" name="phone" class="form-control" placeholder =" Your Tel. Number" required = ""/>
		                    </div>

		                    <div class="clearfix"></div>
		                    <div class="form-group col-lg-12">
		                        <label>Message</label>
		                        <textarea class="form-control" rows="6" name = "message" placeholder =" Write your message here" required = "text"/></textarea>
		                    </div>

		                    <div class="form-group col-lg-12 text-center">
		                        <input type="hidden" name="save" value="contact">
		                        <button type="submit" class="btn btn-success" role="button">SEND</button>
		                    </div>
		        	    </form>
	        	    </div>
        	    </div>
        	</div>
        </div>
 
@endsection