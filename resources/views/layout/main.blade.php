<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title','Owl Online Bookstore')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
              crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: dodgerblue; min-height: 100px;">
            <a class="navbar-brand" href="{{route('home')}}">
                <i class="fa fa-home fa-lg" aria-hidden="true">
                </i>
                OWL Online Bookstore</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <form class="form-inline my-2 my-lg-0" action="{{route('search')}}" method="post">
                        {{csrf_field()}}
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search_data">
                        <button class="btn" type="submit" style="background-color: #0a0a0a; color: white">Search</button>
                    </form>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('books')}}">Books<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>

                        <div style="background-color: dodgerblue" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @forelse($categories as $category)
                                <a class="dropdown-item" href="{{route('category',$category->id)}}">{{$category->name}}</a>
                            @empty
                                <a class="dropdown-item" href="#">empty</a>
                            @endforelse
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cart.index')}}" style="color: #0a0a0a">
                            <i class="fa fa-shopping-cart " aria-hidden="true">
                            </i>
                            Shopping Cart
                            <span class="alert-badge" style="background-color: red">
                                {{Cart::count()}}
                            </span>

                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle " aria-hidden="true">
                            </i>
                            Account
                        </a>
                        <div style="background-color: dodgerblue" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">My Account</a>
                            <a class="dropdown-item" href="{{url('/logout')}}">Sign Out</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactUs')}}" style="color: #0a0a0a">
                           Contact Us
                        </a>
                    </li>

                </ul>

            </div>
        </nav>

 @yield('content')
<footer class="footer">
  <div class="row full-width">
    <div class="small-6 medium-4 large-4 columns">
      <h4>Follow Us</h4>
      <ul class="footer-links">
        <li><a href="https://github.com/webdevmatics">GitHub</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="https://twitter.com/webdevmatics">Twitter</a></li>
      </ul>
    </div>
  </div>
</footer>
    <script src="{{asset('dist/css/foundation.css')}}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{asset('dist/css/app.css')}}"></script>
    <script src="{{asset('dist/js/app.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
