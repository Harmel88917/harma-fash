@extends('layouts.app')

@section('title')
  HarmaFash
@endsection

@section('content')
    
    <div class="container">
        <div class="content" >
          <!-- Slider -->
            
      
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                  <div class="item active">
                    <img src="images/add7.jpg" alt="Adidas" style="width:100%;">
                    <div class="carousel-caption">
                      <h3>Adidas shoes</h3>
                      <p>Good shoes for smart people</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="images/nike7.jpg" alt="Nike" style="width:100%;">
                    <div class="carousel-caption">
                      <h3>Nike Shoes</h3>
                      <p>Good shoes for smart people</p>
                    </div>
                  </div>
                
                  <div class="item">
                    <img src="images/reebok7.jpeg" alt="Reebok" style="width:100%;">
                    <div class="carousel-caption">
                      <h3>Reebok shoes</h3>
                      <p>Good shoes for smart people</p>
                    </div>
                  </div>
              
                </div>

                <!-- Left and right controls -->
                </div><h3 align="center"><font face = "Georgia" color = "#077713" size="20"><i>
              Welcome to HarmAFash</i></font></h3>
            
          <br/><br/><br/>
    <!-- End Slider -->

    <!--First column of the product-->
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/sam.jpg" alt="...">
      <div class="caption">
        <h3>Adidas Shoes</h3>
        <p class="description">Lorem ipsum dolor sit amet, mel diam aeque inimicus te, eros delectus oportere eos at. Putant ancillae consectetuer quo ad, ei sed esse harum. Vim sint omnes voluptua te, mei ex docendi deterruisset. Te usu officiis indoctum, sint noluisse disputationi ius eu. Mel ex omnis vitae adolescens, et verear fabulas per.</p>
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
        <p class="description">Lorem ipsum dolor sit amet, mel diam aeque inimicus te, eros delectus oportere eos at. Putant ancillae consectetuer quo ad, ei sed esse harum. Vim sint omnes voluptua te, mei ex docendi deterruisset. Te usu officiis indoctum, sint noluisse disputationi ius eu. Mel ex omnis vitae adolescens, et verear fabulas per.</p>
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
        <p class="description">Lorem ipsum dolor sit amet, mel diam aeque inimicus te, eros delectus oportere eos at. Putant ancillae consectetuer quo ad, ei sed esse harum. Vim sint omnes voluptua te, mei ex docendi deterruisset. Te usu officiis indoctum, sint noluisse disputationi ius eu. Mel ex omnis vitae adolescens, et verear fabulas per.</p>
        <div class="clearfix">
          <div class="price pull-left">$35</div>
          <a href="{{ url ('/shop') }}" title = "Shop now" class="btn btn-success pull-right" role="button">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
  <!--Second column of the product ends here-->
  <h3><center>Clients' comments</center></h3>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h5>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h5>
      </div>
      <div class="item">
        <h5>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h5>
      </div>
      <div class="item">
        <h5>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h5>
      </div>
    </div>
  </div><!--Second column of the product-->
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/ngongo.jpg" alt="...">
      <div class="caption">
        <h3>Nike Shoes</h3>
        <p class="description">Lorem ipsum dolor sit amet, mel diam aeque inimicus te, eros delectus oportere eos at. Putant ancillae consectetuer quo ad, ei sed esse harum. Vim sint omnes voluptua te, mei ex docendi deterruisset. Te usu officiis indoctum, sint noluisse disputationi ius eu. Mel ex omnis vitae adolescens, et verear fabulas per.</p>
        <div class="clearfix">
          <div class="price pull-left">$35</div>
          <a href="{{ url ('/shop') }}" title = "Shop now" class="btn btn-success pull-right" role="button">Shop Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/tshabz.jpg" alt="...">
      <div class="caption">
        <h3>Nike Bag</h3>
        <p class="description">Lorem ipsum dolor sit amet, mel diam aeque inimicus te, eros delectus oportere eos at. Putant ancillae consectetuer quo ad, ei sed esse harum. Vim sint omnes voluptua te, mei ex docendi deterruisset. Te usu officiis indoctum, sint noluisse disputationi ius eu. Mel ex omnis vitae adolescens, et verear fabulas per.</p>
        <div class="clearfix">
          <div class="price pull-left">$35</div>
          <a href="{{ url ('/shop') }}" title = "Shop now" class="btn btn-success pull-right" role="button">Shop Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/baby.jpg" alt="...">
      <div class="caption">
        <h3>Nike Shoes</h3>
        <p class="description">Lorem ipsum dolor sit amet, mel diam aeque inimicus te, eros delectus oportere eos at. Putant ancillae consectetuer quo ad, ei sed esse harum. Vim sint omnes voluptua te, mei ex docendi deterruisset. Te usu officiis indoctum, sint noluisse disputationi ius eu. Mel ex omnis vitae adolescens, et verear fabulas per.</p>
        <div class="clearfix">
          <div class="price pull-left">$35</div>
          <a href="{{ url ('/shop') }}" title = "Shop now" class="btn btn-success pull-right" role="button">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
  <!--Second column of the product ends here-->
  <h3><center>Clients' comments </center></h3>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h5>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h5>
      </div>
      <div class="item">
        <h5>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h5>
      </div>
      <div class="item">
        <h5>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h5>
      </div>
    </div>
  </div><!--Second column of the product-->
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/kappa2.jpg" alt="...">
      <div class="caption">
        <h3>Kappa Bag</h3>
        <p class="description">Lorem ipsum dolor sit amet, mel diam aeque inimicus te, eros delectus oportere eos at. Putant ancillae consectetuer quo ad, ei sed esse harum. Vim sint omnes voluptua te, mei ex docendi deterruisset. Te usu officiis indoctum, sint noluisse disputationi ius eu. Mel ex omnis vitae adolescens, et verear fabulas per.</p>
        <div class="clearfix">
          <div class="price pull-left">$35</div>
          <a href="{{ url ('/shop') }}" title = "Shop now" class="btn btn-success pull-right" role="button">Shop Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/david.jpg" alt="...">
      <div class="caption">
        <h3>Kappa Shes</h3>
        <p class="description">Lorem ipsum dolor sit amet, mel diam aeque inimicus te, eros delectus oportere eos at. Putant ancillae consectetuer quo ad, ei sed esse harum. Vim sint omnes voluptua te, mei ex docendi deterruisset. Te usu officiis indoctum, sint noluisse disputationi ius eu. Mel ex omnis vitae adolescens, et verear fabulas per.</p>
        <div class="clearfix">
          <div class="price pull-left">$35</div>
          <a href="{{ url ('/shop') }}" title = "Shop now" class="btn btn-success pull-right" role="button">Shop Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/harmel.jpg" alt="...">
      <div class="caption">
        <h3>Kappa Bag</h3>
        <p class="description">Lorem ipsum dolor sit amet, mel diam aeque inimicus te, eros delectus oportere eos at. Putant ancillae consectetuer quo ad, ei sed esse harum. Vim sint omnes voluptua te, mei ex docendi deterruisset. Te usu officiis indoctum, sint noluisse disputationi ius eu. Mel ex omnis vitae adolescens, et verear fabulas per.</p>
        <div class="clearfix">
          <div class="price pull-left">$35</div>
          <a href="{{ url ('/shop') }}" title = "Shop now" class="btn btn-success pull-right" role="button">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--Second column of the product ends here-->
  <div class="brands">
    <h3>Brands</h3>
      <div class="logos"> <a href="#"><img src="images/logo1.gif" alt="" /></a> 
          <a href="#"><img src="images/logo2.gif" alt="" /></a> 
          <a href="#"><img src="images/logo3.gif" alt="" /></a> 
         <a href="#"><img src="images/logo4.gif" alt="" /></a> 
         <a href="#"><img src="images/logo5.gif" alt="" /></a> 
      </div>
    </div>
  </div>
 
@endsection
