@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-3">
           <div class="list-group">
                <a href="" class="list-group-item man">Send Feedback</a>
                <a href="" class="list-group-item women">Wishlist</a>
                <a href="" class="list-group-item children">My Cart</a>
                <a href="" class="list-group-item shoes">Payment</a>
                <a href="" class="list-group-item Accessories">Continue shopping</a>
            </div><br />
        </div>
        </div>
            <h1>Continue Shopping</h1>
            <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="images/sam.jpg" alt="...">
              <div class="caption">
                <h3>Adidas Shoes</h3>
                <p class="description">Lorem ipsum dolor sit amet, mel diam aeque inimicus te, eros delectus oportere eos at. Putant ancillae consectetuer quo ad, ei sed esse harum. </p>
                <div class="clearfix">
                  <div class="price pull-left">$35</div>
                  <a href="{{ url ('/shop') }}" title = "Shop now" class="btn btn-success pull-right" role="button">Shop Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="images/messi.jpg" alt="...">
              <div class="caption">
                <h3>Adidas Bag</h3>
                <p class="description">Lorem ipsum dolor sit amet, mel diam aeque inimicus te, eros delectus oportere eos at. Putant ancillae consectetuer quo ad, ei sed esse harum. </p>
                <div class="clearfix">
                  <div class="price pull-left">$35</div>
                  <a href="{{ url ('/shop') }}" title = "Shop now" class="btn btn-success pull-right" role="button">Shop Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="images/charles.jpg" alt="...">
              <div class="caption">
                <h3>Adidas Shoes</h3>
                <p class="description">Lorem ipsum dolor sit amet, mel diam aeque inimicus te, eros delectus oportere eos at. Putant ancillae consectetuer quo ad, ei sed esse harum. </p>
                <div class="clearfix">
                  <div class="price pull-left">$35</div>
                  <a href="{{ url ('/shop') }}" title = "Shop now" class="btn btn-success pull-right" role="button">Shop Now</a>
                </div>
              </div>
            </div>
          </div>

    </div>
</div>
@endsection
