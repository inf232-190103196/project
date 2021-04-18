<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Feedback</title>
    <link rel="stylesheet" href="cv-style/portfolio.css">
    <link rel="stylesheet" href="cv-style/animate.css">
         <!-- Bootstrap-->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
         <!-- Localization(jquery)-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../vsproject/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
         <!-- Animation-->
        <link rel="stylesheet" href="https://npmcdn.com/tootik@1.0.2/css/tootik.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>

<body>
<div id="Header">
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
			<div class="container-fluid">
				<button class = "navbar-toggler" data-toggle="collapse" data-target="#Navbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="Navbar">
				<ul class="mr-auto navbar-nav" id ="navbarToggle">
					
					@php $locale = session()->get('locale'); @endphp
					<li class="nav-item dropdown">
						 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     @switch($locale)
                        @case('en')
                                <img src="{{asset('cv-style/USA.png')}}" width="45px"> {{__('English') }}
                               @break
                          @case('ru')
                                <img  src="{{asset('cv-style/ru.png')}}" width="45px"> {{__('Russian') }}
                                @break
                          @case('kz')
                                <img src="{{asset('cv-style/kz.svg.png')}}" width="45px"> {{__('Kazakh') }}
                                @break
                         @default
                                <img  src="{{asset('cv-style/USA.png')}}" width="45px"> English
                            @endswitch

						<span class="caret"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/en"><img src="{{asset('cv-style/USA.png')}}" width="45px"> English</a>
                            <a class="dropdown-item" href="/ru"><img src="{{asset('cv-style/ru.png')}}" width="45px"> Russian</a>
                            <a class="dropdown-item" href="/kz"><img src="{{asset('cv-style/kz.svg.png')}}" width="45px"> Kazakh</a>

                        </div>
					</li>
				</ul>
				</div>
			</div>
		</nav>
        </div>
 <main class="py-4">
        @yield('content')
    </main>

	</div>
    

<section id="contact-us" class="section section-contact-us wow fadeInUp" data-wow-offset="40" style="visibility: visible; animation-name: fadeInUp;">
            <div class="header-section">
                <h2 class="h2-section">{{__('Order a website') }}</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12"  >
                    <div class="form-content">
                    <form action="/question" method="POST" enctype="multipart/form-data">
                    @csrf
                            <input type="text" name="name" id="name" placeholder="name" required="">
                            <input type="text" name="email" id="email" placeholder="email" required="">
                            <textarea id="message" name="message" placeholder="Site details" required=""></textarea>

                            <label for="" ><p>{{__('Submit your file')}}</p></label>
                            <input type="file" name="file" id="image" placeholder="Site layout" required="">
                           
                            
                            <input type="submit" class="btn btn-outline-success" value="Submit" id="question"> 
                            </input>
                           <a class="sending" href="{{ route('sending') }}"><b>{{__('Submit')}}</b></a>
                         
                            
                            
                            <!--<input type="submit" name="btn-save1" class="btn-save1" id="form-submit" 
                            value="Order a website" class="disabled" style="pointer-events: all; cursor: pointer;">-->
                               
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                        </form>
                    </div>
                </div>
            </div>
           
        </section>
        <a class="home-style" href="{{ route('home') }}">{{__('Home page')}}</a>
        <a class="skill-style" href=" {{ route('skills') }}">{{__('Skills')}}</a>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        
</body>
</html>