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
    <title>Payment</title>
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
        class="hidden w-full top-navbar lg:inline-flex lg:flex-grow lg:w-auto"
        id="navigation"
      >
        <div
          class="flex flex-col items-start w-full text-md lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto lg:items-center lg:h-auto"
        >
          <a
            href="/home"
            class="items-center justify-center w-full px-3 py-2 text-white rounded lg:inline-flex lg:w-auto hover:bg-red-800 hover:text-white"
          >
            <span>Home</span>
          </a>
          <a
            href="#"
            class="items-center justify-center w-full px-3 py-2 text-white rounded lg:inline-flex lg:w-auto hover:bg-red-800 hover:text-white"
          >
            <span>About Us</span>
          </a>
          <a
            href="#"
            class="items-center justify-center w-full px-3 py-2 text-white rounded lg:inline-flex lg:w-auto hover:bg-red-800 hover:text-white"
          >
            <span>Contact Us</span>
          </a>
          
        </div>
      </div>
    </nav>
    <nav
        class="flex flex-col w-full px-6 py-2 mb-6 font-sans text-center bg-white sm:flex-row sm:text-left sm:justify-center sm:items-baseline">

        <div class="self-center font-mono no-underline sm:mb-0">

            <p class="italic">Efficiently fast, your safest option </p>

        </div>
    </nav>
    <div id="trip_modal" class="fixed top-0 bottom-0 left-0 right-0 z-50 hidden items-center justify-center overflow-auto text-gray-500 bg-black bg-opacity-40">
				<div class="bg-gray-50 p-3 rounded-lg">
					<div class="flex justify-between items-center">
						<h4 class="text-lg font-semibold ">Modify Trip Details</h4>
						<svg onclick="closeTripModal()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
					<div class="grid grid-cols-6 gap-6 p-4">
						<div class="col-span-6 sm:col-span-3">
			                <label for="source" class="block text-sm font-medium text-gray-700">From</label>
			                <input type="text" name="source" id="source" value="Mombasa" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="destination" class="block text-sm font-medium text-gray-700">To</label>
			                <input type="text" name="destination" id="destination" value="Kisumu" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
			                <input type="date" name="date" id="date" value="12-05-2021" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
												
					</div>
					<div class="flex justify-center items-center">
						<div class="flex flex-row space-x-5 text-right sm:justify-center">
	                        <button onclick="closeTripModal()"
	                            class="w-auto h-10 px-4 py-2 text-sm font-bold text-gray-500 transition-colors duration-150 ease-linear bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-0 hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancel
	                        </button>
	                        <button
	                            class="w-20 h-auto text-xs font-bold text-white transition-colors duration-150 ease-linear scale-90 bg-red-600 border rounded-xl focus:outline-none focus:ring-0 hover:bg-red-700 hover:shadow-md focus:bg-red-300 focus:text-red-500">Modify
	                        </button>

	                    </div>
					</div>
				</div>        
    		</div>

    		<div id="payment_modal" class="fixed top-0 bottom-0 left-0 right-0 z-50 hidden items-center justify-center overflow-auto text-gray-500 bg-black bg-opacity-40">
				<div class="bg-gray-50 p-3 rounded-lg">
					<div class="flex justify-between items-center">
						<h4 class="text-lg font-semibold ">Confirm Payment</h4>
						<svg onclick="closePaymentModal()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
                    <div class="w-auto">
                        <p class="text-center">Change contact if it is not the number paying for the booking</p>
                    </div>
					<div class="grid grid-cols-6 gap-6 p-4">
						<div class="col-span-6 sm:col-span-3">
			                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
			                <input readonly type="text" name="name" id="name" value="Jane Mbosso" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
			                <input type="text" name="contact" id="contact" value="0723565657" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="no_of_seats" class="block text-sm font-medium text-gray-700">Number of Seats</label>
			                <input readonly type="number" name="no_of_seats" id="no_of_seats" value="2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="price" class="block text-sm font-medium text-gray-700">Total Price</label>
			                <input readonly type="number" name="price" id="price" value="5000" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
												
					</div>
					<div class="flex justify-center items-center">
						<div class="flex flex-row space-x-5 text-right sm:justify-center">
	                        <button onclick="closePaymentModal()"
	                            class="w-auto h-10 px-4 py-2 text-sm font-bold text-gray-500 transition-colors duration-150 ease-linear bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-0 hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancel
	                        </button>
	                        <button
	                            class="w-20 h-auto text-xs font-bold text-white transition-colors duration-150 ease-linear scale-90 bg-red-600 border rounded-xl focus:outline-none focus:ring-0 hover:bg-red-700 hover:shadow-md focus:bg-red-300 focus:text-red-500" id="payButton">Pay
	                        </button>

	                    </div>
					</div>
				</div>        
    		</div>
    <div class="items-center block w-auto pt-10 pb-10 pl-16 bg-white rounded-lg shadow-lg md:bg-gray-800 md:pt-0 md:pb-0 bg-opacity-30 md:justify-center md:content-start md:flex grid grid-cols-2 gap-2 m-4 p-2 divide-x divide-gray-500
    ">
    	<div class="ml-2">
    		<h3>Trip Details</h3>
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    		<br>
    		<button onclick="tripModal()" class="bg-gray-800 px-3 py-1 text-gray-50 rounded hover:opacity-75 mb-6">Modify</button>
    	</div>
    	<div class="pl-4">
    		<h3>Payment Details</h3>
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    		<br>
    		<button onclick="paymentModal()" class="bg-gray-800 px-3 py-1 text-gray-50 rounded hover:opacity-75 mb-6">Confirm Payment</button>
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
<script src="{{url('/js/payment.js')}}"></script>
</body>
</html>

