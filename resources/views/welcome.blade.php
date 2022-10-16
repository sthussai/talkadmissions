<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravels') }}</title>

        <!-- Fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Nunito&family=Shippori+Antique&display=swap" rel="stylesheet"> 
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
      
        <!-- Styles -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body>
        
        <!--START First Parallax Image with Logo Text -->
            <div class="bgimg-1 w3-display-container" id="hero_div">
                    <div class="card-header-slanted-edge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200"><path class="polygon" d="M -20 200 V 200 C 4 198 684 200 1000 102 V 200 Z" /></svg>  
                        </div>
                <div class="w3-display-middle w3-light-grey w3-opacity-min w3-round" >
                    <h1 class="  w3-center w3-text-black w3-animate-left">
                        Upcoming medical school interviews?
                    </h1>
                    <h2 class="  w3-center w3-text-black w3-animate-left">
                        Connect with the students who've been there 
                    </h2>
                </div>
            </div>
        <!--END First Parallax Image with Logo Text -->

        <!-- START Navbar Section -->
            <div id='navbar' class="">
                    <p id='logo'><b>Talk Admissions</b></p>

                    <div class="">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="z-index: 2;">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 ">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
            </div>
        <!-- END Navbar Section -->


        <!-- START About Section -->
            <div class="w3-row w3-content" id="about">
                <div class="w3-col s12 w3-center w3-padding-64 ">
                    <h2>
                        PRACTICE WITH CURRENT MEDICAL STUDENTS 
                    </h2>
                        
                </div>
                <div class="w3-col l6 w3-padding w3-center ">
                <img src="https://talkadmissions.com/images/student.jpg" class="w3-round img w3-image " alt="Table Setting">
                </div>
                <br>
                <div class="w3-col l6 w3-padding">
                <p class="w3-justify"> The medical school admission process is competitive. The interview can be a daunting hurdle to cross. We offer you the opportunity to connect with current medical students who can give you a running start and help you succeed.  
                </p>
                <a href="#rationale">
                     <button class='w3-button w3-bar w3-dark-grey w3-round w3-margin-top'>Learn More</button>
                </a>
                </div>
            </div>
            <hr>

        <!--END About Section -->


        <!-- START Three panel section -->
            <div id="three-panels" class=" w3-center w3-text-black w3-margin-top w3-padding-64" style="padding: 0px 50px; ">
                <h2 class="w3-padding-16">
                    CHOOSE THE APPROACH THAT IS
                </h2>
                <div class="flex-row">
                    
                        <div class=" flex-col w3-margin w3-card w3-light-grey w3-padding-16 w3-round w3-container">
                            <i class="fa fa-space-shuttle w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
                            <h3>Efficient</h3>
                            <br>
                            <p>Current students give you the relevant details and share the approaches they used for success.
                                Get help with admission applications or practice for your interviews.  </p>
                        </div>
                    

                    
                        <div class=" flex-col w3-margin w3-card w3-light-grey w3-padding-16 w3-round w3-container">
                            <i class="fa fa-bullseye w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
                            <h3>Effective</h3>
                            <br>
                            <p>Practice one on one with students at the school you are looking to interview at. 
                                Benefit from their experience and get tailored guidance that sets you up for success.</p>
                        </div>

                    
                        <div class="flex-col w3-margin w3-card w3-light-grey w3-padding-16 w3-round w3-container">
                            <i class="fa fa-dollar w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
                            <h3>Economical</h3>
                            <br>
                            <p>Students can provide cost-effective guidance and mentorship without compromising on quality. 
                                Get the advice and practice you need while staying within your budget.</p>                
                        </div>
                </div>

            </div>

        <!-- END Three panel section -->


        <div id="rationale" class="w3-row w3-padding-64 ">
            <div class="w3-col l6 s12">
                <div  class="w3-margin w3-padding">
                    <h2 class="w3-padding">OUR MOTIVATIONS AND RATIONALE</h2>
                    <h3 class="w3-padding">Price control</h3>
                    <p class="w3-padding">
                    Current pre-admission markets are unregulated and competitive. Hence prices can be exorbitantly high for admission prep and interview training. We’re motivated to bring them back down to reason.
                    </p>
                    <h3 class="w3-padding">Variable needs</h3>
                    <p class="w3-padding">
                    Some students can benefit a lot from interview practice. Some may only need a little help. Some are already ready and could just use the reassurance. Paying hundreds of dollars for the average interview prep plan available in the current market is not the solution for all. 
                    </p>
                    <h3 class="w3-padding">Indeterminate impact</h3>
                    <p class="w3-padding">
                    It is hard to determine the impact of paid interview prep in securing admission. Many applicants are already strong candidates, including having solid interviewing skills, that give them a high chance of getting admitted. So how do we know that $1500 interview prep plan made a difference?
                    </p>
                </div>
            </div>
            <div class="w3-col l6 s12">

                <div class="slant-card ">
                    <div class="card-header"
                    style="background-image: url(value.jpg)">
                            
                            <div class="card-header-slanted-edge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200"><path class="polygon" d="M-20,200,1000,0V200Z" /></svg>  
                            </div>
                    </div>
    
                    <div>
                        <h2 class="name">Top Notch Service</h2>
                        <p class="bio">
                            We control costs without compromising on quality. We’re driven to help you get exceptional value for your money.
                        </p>
    
                    </div>
                </div>
            </div>
        </div>


        <!-- START 2 panel panel section -->
        <div class='flex-row ' >
                <div class=" flex-col m6 s12 w3-grey ">
                    <div class="bgimg-4 w3-opacity-min">
                    </div>  
                </div>
                <div class=" flex-col m6 s12 w3-padding-32 ">
                    <h2 style="padding:10px 40px;">
                        A fraction of the cost
                    </h2>
                    <p style="padding:10px 40px;">
                    Current companies that offer admission consultations and interview practice can charge rates upwards of $200/hour. These are high in part because they staff doctors and in part because admission to medical school is a lucrative prospect. We leverage the experience of medical students to deliver quality training and relevant guidance at a fraction of the cost. Our rates range on average from $30-$50/hour.
                    </p>
                </div>
        </div>    
        <!-- END 2 panel panel section -->

        <!-- START 2 panel panel section -->
        <div class='flex-row '>
            <div class=" flex-col m6 s12 w3-padding-32 ">
                <h2 style="padding:10px 40px;">
                    A reservoir of experience 
                </h2>
                <p style="padding:10px 40px;">
                The average medical student has sat in the interview hot seat more than three times so we have ‘lived experience’ of the situation. Then, many senior medical students have sat on the other side of the interview table, interviewing our future peers. We can speak to the nerves and the stress of the situation, as well as to the content and the approach to take.
                </p>
            </div>
            <div class=" flex-col m6 s12 w3-grey ">
                <div class="bgimg-4 w3-opacity-min">
                </div>  
            </div>
        </div>    
        <!-- END 2 panel panel section -->







        <!-- 2nd Parallax Image with Portfolio Text -->
            <div class="bgimg-3 w3-display-container w3-opacity-min">
                <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
                </div>
            </div>


            
        <!-- Footer -->
            <footer class="w3-center w3-black  ">

            <div class='w3-padding'>
            <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-top"></i>To the top</a>
            <div class="w3-xlarge w3-section">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>
            </div>  
            </footer>

        <!-- END Footer -->
            
    </body>
</html>
