@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-3">
         <div class="navbar-fixed-left"><h3><b><center>Links</center></b></h3>
           <div class="list-group">
                <a href="{{ url('/checkout') }}" class="list-group-item man">Send your details First</a>
                <a href="" class="list-group-item shoes">Proceed to payment</a>
                <a href="{{ url('/cart') }}" class="list-group-item children">Your Cart ({{ Cart::instance('default')->count(false) }})</a>
                <a href="{{ url('/wishlist') }}" class="list-group-item women">Your wishlist ({{ Cart::instance('wishlist')->count(false) }})</a>
                <a href="{{ url ('/shop') }}" class="list-group-item Accessories">Continue shopping</a>
            </div>
            </div><br />
        </div>
    </div>
    <div class="row">
        </div>
            <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="images/sam.jpg" alt="...">
              <div class="caption">
                <h3>Adidas Shoes</h3>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="images/messi.jpg" alt="...">
              <div class="caption">
                <h3>Adidas Bag</h3>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="images/charles.jpg" alt="...">
              <div class="caption">
                <h3>Adidas Shoes</h3>
              </div>
            </div>
          </div>

    </div>
</div>
@endsection
