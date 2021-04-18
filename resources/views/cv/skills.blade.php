<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="cv-style/portfolio.css">
    <link rel="stylesheet" href="cv-style/animate.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" 
        crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../vsproject/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://npmcdn.com/tootik@1.0.2/css/tootik.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">

    </head>
    <header>
    <a class="home-style" href=" {{ route('home') }}">{{__('Home page')}}</a>
        <a class="contact-style" href="{{ route('contact') }}">{{__('Feedback')}}</a>
    </header>
<body>
<section id="skills" class="section section-skills wow fadeInUp" data-wow-offset="40" style="visibility: visible; animation-name: fadeInUp;">
            <div class="header-section">
                <h2 class="h2-section">
                {{__('SKILLS')}}
                </h2>
            </div>
            <div class="row">
                <div class="col-md-5 col-xs-12">
                    <div class="professional-skills">
                        <div class="title-skills">
                            <h3>{{__('PROFESSIONAL SKILLS')}}</h3>
                        </div>
                        <div class="skill wow ">
                            <div class="title-progress">
                                <span class="skill-name">HTML & CSS</span>
                                <span class="skill-value">75%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="title-progress">
                                <span class="skill-name">JavaScript</span>
                                <span class="skill-value">40%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="title-progress">
                                <span class="skill-name">Photoshop</span>
                                <span class="skill-value">65%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="title-progress">
                                <span class="skill-name">Jquery</span>
                                <span class="skill-value">70%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-xs-12">
                    <div class="additional-skills wow fadeInUp" data-wow-duration="2s">
                        <div class="title-skills">
                            <h3>{{__('ADDITIONAL SKILLS')}}</h3>
                        </div>
                        <div class="circle-progress">
                            <div class="row">
                                <div class="set-size charts-container col-xs-12">
                                    <div class="pie-wrapper progress-60 ">
                                      <span class="label"><span class="smaller">60%</span></span>
                                      <div class="pie">
                                        <div class="left-side half-circle"></div>
                                        <div class="right-side half-circle"></div>
                                      </div>
                                      <span class="additional" style="font-size: 20px; position: absolute; right: 20px; top: -30px;">{{__('English')}}</span>
                                    </div>
                                  
                                    <div class="pie-wrapper progress-90"> 
                                      <span class="label"><span class="smaller">90%</span></span>
                                      <div class="pie">
                                        <div class="left-side half-circle"></div>
                                        <div class="right-side half-circle"></div>
                                      </div>
                                      <span class="additional" style="font-size: 20px; position: absolute; right: 20px; top: -30px;">{{__('Teamwork')}}</span>
                                    </div>
                                  
                                  
                                    <div class="pie-wrapper progress-75 style-2">
                                      <span class="label"><span class="smaller">75%</span></span>
                                      <div class="pie">
                                        <div class="left-side half-circle"></div>
                                        <div class="right-side half-circle"></div>
                                      </div>
                                      <span class="additional" style="font-size: 20px; position: absolute; right: 20px; top: -30px; text-align: center;">{{__('Creativiy')}}</span>
                                      <div class="shadow"></div>
                                    </div>
                                   
                                  </div>
                      </div>
                        </div>

                        <div class="other-skills">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="other">
                                       <div class="skill">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                        <span>{{__('Photography')}}</span>
                                       </div>

                                       <div class="skill">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                        <span>{{__('Mobile App Design')}}</span>
                                       </div>

                                       <div class="skill">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                        <span>{{__('Logo Design')}}</span>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="other">
                                        <div class="skill">
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            <span>{{__('3D Animation')}}</span>
                                           </div>
                                           <div class="skill">
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            <span>{{__('Audio & Video Editing')}} </span>
                                           </div>
                                           <div class="skill">
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            <span>UX/UI {{__('Design')}}</span>
                                           </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="education" class="section section-education wow fadeInUp" data-wow-offset="40" style="visibility: visible; animation-name: fadeInUp;">
            <div class="header-section">
                <h2 class="h2-section">{{__('EDUCATION')}}</h2>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="education-content">
                        <div class="period">
                            <h3>2008 - 2017</h3>
                        </div>
                        <ul class="ul-education">
                            <li class="li-university">
                                <div class="university">
                                    <span class="education-icon"><i class="fa fa-university"></i></span>
                                    <span class="university-name">{{__('School №33')}}</span>
                                </div>
                            </li>
                        </ul>
                        <p class="prg-education">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
               
                <div class="col-sm-4 col-xs-12">
                    <div class="education-content">
                        <div class="period">
                            <h3>2017 - 2019</h3>
                        </div>
                        <ul class="ul-education">
                            <li class="li-university">
                                <div class="university">
                                    <span class="education-icon"><i class="fa fa-university"></i></span>
                                    <span class="university-name">{{__('Abai school-gymnasium')}}</span>
                                </div>
                            </li>
                        </ul>
                        <p class="prg-education">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
              
                <div class="col-sm-4 col-xs-12">
                    <div class="education-content">
                        <div class="period">
                            <h3>2019 - 2023</h3>
                        </div>
                        <ul class="ul-education">
                            <li class="li-university">
                                <div class="university">
                                    <span class="education-icon"><i class="fa fa-university"></i></span>
                                    <span class="university-name">{{__('Suleyman Demirel University')}}</span>
                                </div>
                            </li>
                        </ul>
                        <p class="prg-education">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="interests" class="section section-interests wow fadeInUp" data-wow-offset="40" style="visibility: visible; animation-name: fadeInUp;">
            <div class="header-section">
                <h2 class="h2-section">{{__('INTERESTS')}}</h2>
            </div>
            <div class="text-interests">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <!-- more icons for interests : https://www.iconfinder.com/ -->
            <div class="swiper-container swiper-container-horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-active" style="width: 145px; margin-right: 40px;">
                        <div>
                            <img width="90px" style="margin-top: -15px"; src="https://freepngimg.com/thumb/travel/30826-8-travel-free-download.png" alt="Travel">
                        </div>
                        <h4>{{__('Travel')}}</h4>
                    </div>
                    <div class="swiper-slide swiper-slide-next">
                        <div>
                            <img width="60px" style="margin-top: -15px;" src="https://freepngimg.com/thumb/music/6-2-music-free-png-image.png" alt="Music">
                        </div>
                        <h4>{{__('Music')}}</h4>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img width="140px" src="https://freepngimg.com/thumb/playstation/29045-6-playstation.png" alt="Gaming">
                        </div>
                        <h4>{{__('Gaming')}}</h4>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img width="50px" style="margin-top: -10px;" src="http://pngimg.com/uploads/football/football_PNG52732.png" alt="Footnall">
                        </div>
                        <h4>{{__('Football')}}</h4>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img width="70px" style="margin-top: -20px;" src="https://freepngimg.com/thumb/avengers/24571-8-avengers-transparent-image.png" alt="Movies">
                        </div>
                        <h4>{{__('Movies')}}</h4>
                    </div>
                </div>
            </div>
        </section>
        
            </body>
            </html>