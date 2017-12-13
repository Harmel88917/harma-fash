<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HarmaFash</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="Footer-with-button-logo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
         body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family:;
                background: white;
            }
            .spacer {
            margin-bottom: 100px;
        }
        .cart-image {
            width: 100px;
        }
        footer {
            background-color:#F2F4F4;
            padding: 20px 0;
            font:normal 14px/1.5em "Liberation sans", Arial, Helvetica, sans-serif;
            color:#0F1010;
            margin-top: 20px;
            border-top: thin solid #ddd;
            
        }
        a{
            color: #0F1010;
        }
        .table>tbody>tr>td {
            vertical-align: middle;
        }
        .side-by-side {
            display: inline-block;
        }
    </style>
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="">
                        <u><font face = "Comic sans MS" color = "#010101" size="6"><b>HarmA</font></u><font color="#077713" face = "Comic sans MS" size="6" >Fash</b></font>
                    </a>
                </div>
                 
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <form action="" methode = "post" class="navbar-form navbar-left">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="{{ set_active('welcome') }}"><a href="{{ url('/') }}" title = "home page"><font color="#077713">Home</font></a>
                            <li class="{{ set_active('login') }}"><a href="{{ route('login') }}" title = "Have an account, sign in"><font color="#077713">Login</font></a>
                            <li class="{{ set_active('register') }}"><a href="{{ route('register') }}" title = "Don't have an account, register"><font color="#077713">Sign up</font></a>
                            <li class="{{ set_active('shop') }}"><a href="{{ url ('/shop') }}" title = "Shop now"><font color="#077713">Shop</font></a>
                            <li class="{{ set_active('contact-us') }}"><a href="{{ url('/contact-us') }}" title = "Send us feedback"><font color="#077713">Contact</font></a>
                        
                       @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    

<!--Footer-->
<footer >
<div id= "footer1">
    <div class= "container">
        <div class="footer">
            <div class="row">           
                <div class="col-sm-3">
                              <br/><br/>
                              <a class="navbar-brand" href="{{ url('#') }}" title="You are on the Home page">
                              <font face = "Comic sans MS" color = "#010101" size="20"><i><u>HarmA</u></i></font>
                              <font face = "Comic sans MS" color="#077713" size="20"><i>Fash</i></font></a>
                            </div>
                                                    
                <div class="col-xs-6 col-md-3" >
                    <h2><span>Brands</span></h2>
                    <span><a href="product.php">Nike</a>
                    </span><br />
                    <span><a href="product.php" >Adidas</a>
                    </span><br />
                    <span><a href="product.php" >Reebok</a>
                    </span><br />
                    <span><a href="product.php" >Umbro</a>
                    </span><br />
                    <span><a href="product.php" >Kappa</a>
                    </span>
                </div>
                    
                <div class="col-xs-6 col-md-3" >
                    <h2><span></span> Links</h2>
                    <span><a href="{{ url('/') }}">Home</a></span><br />
                    <span><a href="#">About</a></span><br />
                    <span><a href="#">Services</a></span><br />
                    <span><a href="contact.php">Contact</a></span><br />
                    <span><a href="{{ route('register') }}">Create an account</a></span><br />
                </div>
                    
                <div class="col-xs-12 col-md-3" >
                    <div class="social-networks">
                        <h2><span>Contact</span> Us</h2>
                        <p> <span>Address:</span>Kenya/ Nairobi(Strathmore University)<br/>
                            <span>Telephone:</span> +254 000 000 000<br />
                            <span>Telephone:</span> +254 111 222 222<br />
                            <span>FAX:</span> +254-4544<br />
                            <span>Others:</span> +254 777 888 999<br />
                            <span>E-mail:</span> <a href="https://www.gmail.com">harmelngongo@gmail.com</a> 
                        </p>
                        <p><span>E-mail:</span> <a href="https://www.gmail.com">tshabulandamiel@outlook.com</a> </p>
                        <ul class="list-inline social-buttons" >
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <li><a  href="https://www.facebook.com/Harmel Ngongo" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <li><a href="https://www.gmail.com" target="_blank" class="google"><i class="fa fa-google-plus"></i></a>
                            <li><a href="https://www.instagram.com/harmelngongo" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                            <li><a href="https://github.com/Harmel88917" class="github"><i class="fa fa-github"></i></a>
                            <li><a href="#" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- Footer of copyright-->
<table bgcolor="black" width="100%" height="20px">
    <tr>
        <td bgcolor="#828383">
            <div class= "container"><br/>
                <div class="col-md-4">
                    <font color="white"><p>Copyright &copy; HarmaFash-Alright Reserved</p></font>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <p><span><font color="white">Design by<a href="https://www.gmail.com" target="_blank" style="color: white;"> harmelngongo@gmail.com</a></span>
                    <font size = "2" class= "pull-right" color="white"> +254 717 716 291</font></p>
                </div>
            </div>
        </td>
    </td>
</table>
<!--End Footer-->

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
