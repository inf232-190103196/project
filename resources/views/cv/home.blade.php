<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CV</title>
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
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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


    <div class="container">
        <section id="about" class="section section-about" style="visibility: visabile; animation-name: fadeInUp;">
            <div class="profile wow fadeInUp">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="photo-profile">
                            <img src="https://images.assetsdelivery.com/compings_v2/2nix/2nix1408/2nix140800145.jpg" style="width: 229px; height: 239px;" alt="">
                        </div>
                    </div>
                        <div class="col-sm-8 col-xs-12">
                            <div class="info-profile">
                                <h2>SULTAN ABDUALIYEV</h2>
                                
                                <h3>{{__('web developer & web designer')}}</h3>

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas reprehenderit dolores ex velit, odio est, sequi, repudiandae cum iste nihil explicabo nisi impedit. Officiis voluptatem tempora doloremque quis, similique repudiandae? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, nesciunt distinctio aliquam a molestias non? Soluta adipisci aut officiis totam. Illo sunt fuga corporis reiciendis ab eos placeat est corrupti.</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="ul-info">
                                            <li class="li-info">
                                                <span class="title-info"><b>{{__('Age')}}:</b></span>
                                                <span class="info">19</span>
                                            </li>

                                            <li class="li-info">
                                                <span class="title-info"><b>{{__('Address') }}:</b></span>
                                                <span class="info">Kaskelen, Karasay Batyr str, 2/52</span>
                                            </li>

                                            <li class="li-info">
                                                <span class="title-info"><b>{{__('Email') }}:</b></span>
                                                <span class="info"><a href="#" mailto:190103196@stu.sdu.edu.kz>190103196@stu.sdu.edu.kz</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="ul-info">
                                            <li class="li-info">
                                                <span class="title-info"><b>{{__('Phone') }}:</b></span>
                                                <span class="info"><a href="tel:+77471307700">+7 747 130 77 00</a></span>
                                            </li>

                                            <li class="li-info">
                                                <span class="title-info"><b>{{__('Website') }}:</b></span>
                                                <span class="info">----</span>
                                            </li>

                                            <li class="li-info">
                                                <span class="title-info"><b>{{__('Nationality') }}:</b></span>
                                                <span class="info">Kaz</span>
                                            </li>
                                        </ul> 
                                    </div>
                                   
                                        <span class="title-links">{{__('Social Links') }}:</span>
                                        <ul class="social-icon">
                <li><a href="#" class="social-link"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#" class="social-link"><i class="fab fa-vk"></i></a></li>
                <li><a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#" class="social-link"><i class="fab fa-google"></i></a></li>
            </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
       

        <a class="skill-style" href=" {{ route('skills') }}">{{__('Skills') }}</a>
        <a class="contact-style" href=" {{ route('contact') }}">{{__('Feedback') }}</a>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>