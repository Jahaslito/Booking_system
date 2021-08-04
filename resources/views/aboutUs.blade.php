<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>About Us</title>
</head>
<body>
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
        <div class="flex items-center justify-center px-2 py-2 bg-red-600 rounded items-top hover:bg-red-800 hover:text-white dark:bg-gray-900 sm:items-center sm:pt-0">
          @if (Route::has('login'))
              <div class="text-center text-white text-md right-1 top-1 sm:block">
                  @auth
                  <a  class="pb-4 text-sm text-white no-underline" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" >Log Out</a>
                  @endauth
              </div>
          @endif
      </div>
     
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
  </form>
      </div>
      
    </nav>
    <nav
        class="flex flex-col w-full px-6 py-2 mb-6 font-sans text-center bg-white sm:flex-row sm:text-left sm:justify-center sm:items-baseline">

        <div class="self-center font-mono no-underline sm:mb-0">

            <p class="italic">Efficiently fast, your safest option </p>

        </div>
    </nav>

    <div class="bg-white rounded shadow-lg m-4 p-3 px-4">
      <p class="text-gray-700 text-xl m-2 text-center text-3xl">About Us</p>
      <div class="text-gray-700 text-base">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
                <a href="/home" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
                    Home
                </a>
                <a href="#" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
                    About Us
                </a>
                <a href="#" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
                    Contact US
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