<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <title>Home</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
     <nav class="flex flex-wrap items-center p-3 bg-red-600">
      <a href="/home" class="inline-flex items-center p-2 mr-4">

        <span class="text-xl font-bold tracking-wide text-white uppercase"
          >Logo</span
        >
      </a>
      <button
        class="inline-flex p-3 ml-auto text-white rounded outline-none hover:bg-red-600 lg:hidden hover:text-white nav-toggler"
        data-target="#navigation"
      >
        <i class="text-xl text-white fa fa-bars"></i>
      </button>
      <div
        class="w-full top-navbar lg:inline-flex lg:flex-grow lg:w-auto"
        id="navigation"
      >
        <div
          class="flex flex-col items-start w-full text-md lg:inline-flex lg:flex-row lg:ml-auto lg:mr-14 lg:w-auto lg:items-center lg:h-auto"
        >
          <a
            href="/"
            class="items-center justify-center w-full px-3 py-2 text-white rounded lg:inline-flex lg:w-auto hover:bg-red-800 hover:text-white"
          >
            <span>Home</span>
          </a>
          <a
            href="{{ url('/aboutUs') }}"
            class="items-center justify-center w-full px-3 py-2 text-white rounded lg:inline-flex lg:w-auto hover:bg-red-800 hover:text-white"
          >
            <span>About Us</span>
          </a>
          <a
            href="#contact"
            class="items-center justify-center w-full px-3 py-2 text-white rounded lg:inline-flex lg:w-auto hover:bg-red-800 hover:text-white"
          >
            <span>Contact Us</span>
          </a>

        </div>
        <div class="flex items-center justify-center px-2 py-2 bg-red-600 rounded items-top hover:bg-red-800 hover:text-white dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="text-center text-white text-md right-1 top-1 sm:block">
                    @auth
                        <a href="{{ url('/booking') }}" class="pb-4 text-sm text-white no-underline">Book</a>
                    @else
                        <a href="{{ route('login') }}" class="pb-4 text-sm text-white no-underline">Log in</a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif
        </div>
      </div>
      
    </nav>
    <nav
            class="flex flex-col w-full px-6 py-2 mb-6 font-sans text-center bg-white sm:flex-row sm:text-left sm:justify-center sm:items-baseline">

            <div class="self-center font-mono no-underline sm:mb-0">

                <p class="italic">Efficiently fast, your safest option </p>

            </div>
    </nav>
        
        
        <div class="content-center w-full h-auto bg-yellow-50">
            <div class="w-full h-full px-0 py-4 bg-black">
                <div class="h-auto py-4 text-center">

                <h1 class="h-auto text-2xl text-white sm:h-0 lg:text-3xl">Welcome to Our Website</h1>
                <h2 class="h-6 text-base text-white sm:h-0 lg:space-y-0 lg:text-xl">We make booking easy, safe and fast</h2>
                <a href="{{ url('/booking') }}" class="items-center justify-center w-full px-3 py-2 text-white bg-red-600 rounded lg:inline-flex lg:w-auto hover:bg-red-800 hover:text-white">
                    <span>BOOK NOW</span></a>
            
         <!-- @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/booking') }}"
            class="items-center justify-center w-full px-3 py-2 text-white bg-red-600 rounded lg:inline-flex lg:w-auto hover:bg-red-800 hover:text-white"
          >
            <span>BOOK NOW</span></a>
                    @else
                        <a href="{{ route('login') }}"
            class="items-center justify-center w-full px-3 py-2 text-white bg-red-600 rounded lg:inline-flex lg:w-auto hover:bg-red-800 hover:text-white"
          >
            <span>BOOK NOW</span></a>

                    @endauth
               
            @endif -->
        
        
                </div>
            </div>
        </div>

        <div class="content-center w-full h-auto px-2 py-4">
            <div class="content-center w-auto h-auto text-center ">
                <h1>Our Accomplishments</h1>
                <div class="content-center block m-auto sm:inline-block sm:space-y-5 md:space-y-0 md:flex md:flex-wrap justify-evenly">
                    <div class="block w-56 px-4 py-3 mx-auto text-center text-red-600 bg-white shadow-md ">
                        <h1 class="text-xs border-b border-gray-300 "> Customers</h1>
                        <div class="flex flex-row px-2 py-2 justify-evenly">
                           <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
  <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
</svg>
                            <span class="text-4xl text-gray-700 ">1.2K</span>
                        </div>
                    </div>
                    <div class="block w-56 px-4 py-3 mx-auto text-center text-red-600 bg-white shadow-md ">
                        <h1 class="text-xs border-b border-gray-300">Buses</h1>
                        <div class="flex flex-row px-2 py-2 justify-evenly">
                            <img src="{{url('/icons/front-of-bus.png')}} "/>
                            <span class="text-4xl text-gray-700">350</span>
                        </div>
                    </div>
                    <div class="block w-56 px-4 py-3 mx-auto text-center text-red-600 bg-white shadow-md ">
                        <h1 class="text-xs border-b border-gray-300"> Distance</h1>
                        <div class="flex flex-row px-2 py-2 justify-evenly">
                            <img src="{{url('/icons/road.png')}} "/>
                            <span class="text-4xl text-gray-700">10k km</span>
                        </div>
                    </div>
                    <div class="block w-56 px-4 py-3 mx-auto text-center text-red-600 bg-white shadow-md ">
                        <h1 class="text-xs border-b border-gray-300"> Trips</h1>
                        <div class="flex flex-row px-2 py-2 justify-evenly">
                            <img src="{{url('/icons/direction.png')}} "/>
                            <span class="text-4xl text-gray-700">2.5k</span>
                        </div>
                    </div>

        
                </div>

            </div>
        </div>
        <div class="items-center content-center justify-center w-auto h-auto px-2 py-2 text-center bg-red-600">
            <div class="content-center w-auto h-auto px-4 py-3 text-center text-white ">
                <h1 class="h-auto sm:h-0">How does it work?</h1>
                <div class="content-center block px-2 py-2 space-y-4 md:space-y-0 md:flex md:flex-wrap justify-evenly">
                    <div class="flex flex-row content-center space-x-0 sm:block ">
                        <div class="justify-start w-20 h-auto px-2 py-2 mb-4 text-center text-white border border-white rounded-full text-7xl">1</div>
                        <div class="block mx-auto">
                        <div><svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 mx-auto" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd" />
</svg></div>
                        <div class="text-4xl text-white"> <p>Book</p></div>
                        </div>
                    </div>
                     <div class="flex flex-row content-center space-x-0 sm:block ">
                        <div class="justify-start w-20 h-auto px-2 py-2 mb-4 text-center text-white border border-white rounded-full text-7xl ">2</div>
                        <div class="block mx-auto">
                        <div><svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 mx-auto" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
</svg></div>
                        <div class="text-4xl text-white"> <p>Pay</p></div>
                        </div>
                    </div>
                     <div class="flex flex-row content-center space-x-0 sm:block ">
                        <div class="justify-start w-20 h-auto px-2 py-2 mb-4 text-center text-white border border-white rounded-full text-7xl">3</div>
                        <div class="block mx-auto">
                        <div><svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 mx-auto" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
</svg></div>
                        <div class="text-4xl text-center text-white"> <p>Travel</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-auto h-auto px-2 py-0 text-center ">
            <div class="px-4 py-2"> 
            <h1 class="h-6 sm:h-0" id="contact">Contact Us</h1>
           <div class="justify-between block w-auto h-full sm:flex sm:flex-wrap">
                <div class="justify-start block py-8 text-white bg-red-600 shadow-lg sm:w-1/2">
                            <p class="text-xl border-b">Our Number</p>
                            <br>
                            <div class="justify-between block w-auto md:inline-flex">
                                <img src="{{url('/icons/phone-call.png')}}" class="mx-auto "/>
                                <div class="block">
                                    <p class="ml-4 text-xl">+254712345678</p>
                                    <p class="ml-4 text-xl">+254712345678</p>
                                </div>
                            </div>
                </div> 
                <div class="block py-8 text-white bg-gray-800 shadow-lg sm:w-1/2">
                    <p class="text-xl border-b">Our Email</p>
                    <br>
                    <div class="justify-between block w-auto md:inline-flex">
                        <img src="{{url('/icons/envelope.png')}} " class="mx-auto" />
                        <p class="ml-4 text-xl ">john.doe@example.com</p>
                    </div>
                <br>
                
                </div>
           </div>
           
            </div>
        </div>



         <footer class="pt-10 bg-gray-800 sm:mt-10">
        <div class="flex flex-wrap justify-center max-w-6xl m-auto text-gray-800">


            <!-- Col-2 -->
            <div class="w-1/2 p-5 sm:w-4/12 md:w-3/12">
                <!-- Col Title -->
                <div class="mb-6 text-xs font-medium text-gray-400 uppercase">
                    Navigation
                </div>

                <!-- Links -->
                <a href="/" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
                    Home
                </a>
                <a href="#" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
                    About Us
                </a>
                <a href="#contact" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
                    Contact Us
                </a>

            </div>

            <!-- Col-3 -->
            <div class="w-1/2 p-5 sm:w-4/12 md:w-3/12">
                <!-- Col Title -->
                <div class="mb-6 text-xs font-medium text-gray-400 uppercase">
                    Functions
                </div>

                <!-- Links -->
                <a href="#" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
                    Book Bus
                </a>
                <a href="#" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
                    Top Routes
                </a>


            </div>

            <!-- Col-3 -->
            <div class="w-1/2 p-5 sm:w-4/12 md:w-3/12">
                <!-- Col Title -->
                <div class="mb-6 text-xs font-medium text-gray-400 uppercase">
                    Community
                </div>

                <a href="#" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
                    Instagram
                </a>
                <a href="#" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
                    Facebook
                </a>
                <a href="#" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
                    Twitter
                </a>
                <a href="#" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
                    YouTube
                </a>
            </div>
        </div>

        <div class="pt-2">
            <div
                class="flex flex-col max-w-6xl px-3 pt-5 pb-5 m-auto text-sm text-gray-400 border-t border-gray-500 md:flex-row">
                <div class="mt-2">
                    © Copyright 2021. All Rights Reserved.
                </div>

                <div class="flex flex-row mt-2 md:flex-auto md:flex-row-reverse">

                    <a href="#" class="w-6 mx-1">
                        <i class="fa fa-twitter-alt"></i>
                    </a>
                    <a href="#" class="w-6 mx-1">
                        <i class="fa fa-youtube"></i>
                    </a>
                    <a href="#" class="w-6 mx-1">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="#" class="w-6 mx-1">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    
<script>
  $(document).ready(function() {
  $(".nav-toggler").each(function(_, navToggler) {
    var target = $(navToggler).data("target");
    $(navToggler).on("click", function() {
      $(target).animate({
        height: "toggle"
      });
    });
  });
});

</script>
    </body>
</html>
