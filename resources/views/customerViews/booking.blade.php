<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <title>Booking</title>
</head>

<body class="content-start w-full h-full p-px bg-gray-50">
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
    <div class="container content-center w-full h-full ">
        <nav
            class="flex flex-col w-full px-6 py-2 mb-6 font-sans text-center bg-white sm:flex-row sm:text-left sm:justify-center sm:items-baseline">

            <div class="self-center font-mono no-underline sm:mb-0">

                <p class="italic">Efficiently fast, your safest option </p>

            </div>
        </nav>

{{--        <div class="uhh">--}}
{{--        @if(isset($details))--}}
{{--            <p> The Search results for your query <b> {{ $query }} </b> are :</p>--}}
{{--            <h2>Sample User details</h2>--}}
{{--            <table class="table table-striped">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>Name</th>--}}
{{--                    <th>Email</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($details as $user)--}}
{{--                    <tr>--}}
{{--                        <td>{{$row1->source}}</td>--}}
{{--                        <td>{{$row2->destination}}</td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        @endif--}}
{{--    </div>--}}

        <div class="justify-center w-auto h-auto mb-20">



            <div class="items-center block w-auto pt-10 pb-10 pl-16 bg-gray-800 rounded-lg shadow-lg md:bg-gray-800 md:h-16 md:pt-0 md:pb-0 bg-opacity-30 md:justify-center md:content-start ">

                <div class="px-6 py-2 text-left">
                    <p class="text-xl text-white md:text-2xl">Book >> Pay >> Board</p>
                 </div>
{{--                    <form method="get" action="/booking" role="search">--}}
{{--                        <div class="content-center block w-auto space-y-5 sm:h-full sm:w-full md:justify-evenly sm:space-y-6 md:space-y-0 md:flex md:flex-row">--}}
{{--                    <div class=" searchFrom">--}}
{{--                            <select name="" class="p-2 pl-8 bg-white border border-gray-200 rounded focus:bg-white focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent"--}}
{{--                                placeholder="From">--}}
{{--                            <option>From</option>--}}

{{--                            @foreach($fromData as $row1)--}}
{{--                                    <option name="searchSource" value="{{$row1->id}}">{{$row1->source}}</option>--}}

{{--                            @endforeach--}}
{{--                        </select>--}}

{{--                    </div>--}}
{{--                    <div class="searchTo">--}}
{{--                        <select name="" select name="" class="p-2 pl-8 bg-white border border-gray-200 rounded focus:bg-white focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent"--}}
{{--                                placeholder="To">--}}
{{--                            <option>To</option>--}}
{{--                            @foreach($toData as $row2)--}}
{{--                                <option name="searchDestination" value="{{$row2->id}}">{{$row2->destination}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}

{{--                    </div>--}}

{{--                    <div class="searchDate">--}}
{{--                        <input type="Date"--}}
{{--                        class="p-2 pl-8 bg-white border border-gray-200 rounded focus:bg-white focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent"--}}
{{--                        placeholder="Date" id="datefield"/>--}}
{{--                            <script>--}}
{{--                                var today = new Date();--}}
{{--                                var dd = today.getDate();--}}
{{--                                var mm = today.getMonth()+1; //January is 0!--}}
{{--                                var yyyy = today.getFullYear();--}}
{{--                                if(dd<10){--}}
{{--                                        dd='0'+dd--}}
{{--                                    }--}}
{{--                                    if(mm<10){--}}
{{--                                        mm='0'+mm--}}
{{--                                    }--}}

{{--                                today = yyyy+'-'+mm+'-'+dd;--}}
{{--                                document.getElementById("datefield").setAttribute("min", today);--}}
{{--                        </script>--}}
{{--                    </div>--}}
{{--                    <div class="justify-center searchBus">--}}

{{--                        <button class="p-2 pl-8 text-white bg-red-600 border rounded-sm hover:shadow-lg hover:bg-red-700 focus:border-transparent">Search Bus</button>--}}

{{--                    </div>--}}
{{--                            </form>--}}

                <form method="get" action="{{ route('searchTrip')}}">
                    <div class="content-center block w-auto space-y-5 sm:h-full sm:w-full md:justify-evenly sm:space-y-6 md:space-y-0 md:flex md:flex-row">--}}

                        <div class=" searchFrom">
                        <input type="Text" placeholder="From" style="padding: 10px;" name="source" id="source">
                        </div>

                        <div class=" searchTo">
                            <input type="Text" placeholder="To" style="padding: 10px;" name="destination" id="destination">
                        </div>

                        <div class="justify-center searchBus">

                        <button class="p-2 pl-8 text-white bg-red-600 border rounded-sm hover:shadow-lg hover:bg-red-700 focus:border-transparent">Search Bus</button>

                        </div>
                    </div>

                </form>
                </div>
            </div>

        </div>
        <div class="content-start w-auto h-auto px-0 sm:px-0 md:px-16 ">
            <div class="justify-center sm:px-0 md:px-16">
                <div class="w-auto text-center md:content-center">
                    <h1 class="mt-12 text-2xl sm:text-3xl ">Trips Available</h1>
                </div>
                @foreach($triproutes as $triproute)

                <form method="post" action="">

                <div class="block w-auto h-auto p-8 space-y-4 bg-white shadow-lg sm:flex sm:flex-row sm:space-y-0">
                    <img src="{{url('/images/bus.jpg')}} " alt="Bus Image" class="hidden w-auto sm:block sm:h-24">
                    <div class="sm:ml-8 md:ml-16">
                        <h2  class="w-auto mb-4 text-xl sm:text-xl md:text-2xl">{{$triproute->source}} - {{$triproute->destination}}</h2>
                        <div class="flex flex-row mt-2 md:flex-auto md:flex-row-reverse">
                            <i class="w-6 pt-2 mx-1 text-red-600 fa fa-map-marker"></i>
                            <h3 class="text-red-600 sm:text-sm md:text-xl">Boarding Place</h3>
                        </div>
                        <p name="boarding_place"> {{$triproute->boarding_place}}</p>


                    </div>
                    <div class="content-start block w-auto sm:ml-8 md:ml-16 ">
                        <div class="block">
                            <div class="flex flex-row md:mt-2 md:flex-auto md:flex-row-reverse">
                                <i class="w-6 pt-1.5 mx-1 text-red-600 fa fa-hourglass-start"></i>
                                <h4 class="text-base text-red-600 sm:text-sm md:text-xl">Departure Time</h4>
                            </div>
                            <p>{{$triproute->departure}}</p>
                        </div>
                        <div class="block pt-4">
                            <div class="flex flex-row md:mt-2 md:flex-auto md:flex-row-reverse">
                                <i class="w-6 pt-1.5 mx-1 fa fa-calendar text-red-600"></i>
                                <h5 class="text-base text-red-600 sm:text-sm md:text-xl">Departure Date</h5>
                            </div>
                            <p>{{$triproute->date}}</p>
                        </div>
                    </div>
                    <div class="content-center w-auto pt-4 sm:ml-10 md:ml-28 divide-y-12">
                        <h6 class="text-xl text-red-600 ">Price</h6>
                        <p class="text-xl text-green-500">KES {{$triproute->price}}</p>
                    </div>
                </form>

                    {{ session()->put('source',$triproute->source)}}
                    {{ session()->put('destination',$triproute->destination)}}
                    {{ session()->put('boarding_place',$triproute->boarding_place)}}
                    {{ session()->put('date',$triproute->date)}}
                    {{ session()->put('departure',$triproute->departure)}}
                    {{ session()->put('price',$triproute->price)}}



                <?php
//                session_start();
//                    if(isset($triproute->source)){
//                        $_SESSION["source"] = $triproute->source;
//
//                    }
//                    if(isset($triproute->destination)){
//                        $_SESSION["destination"] = ($triproute->destination);
//                    }
//                    if(isset($triproute->boarding_place)){
//                        $_SESSION["boarding_place"] = ($triproute->boarding_place);
//                    }
//                    if(isset($triproute->departure)){
//                        $_SESSION["departure"] = ($triproute->departure);
//                    }
//                    if(isset($triproute->date)){
//                        $_SESSION["date"] = ($triproute->date);
//                    }
//                    if(isset($triproute->price)){
//                        $_SESSION["price"] = ($triproute->price);
//                    }
                ?>

                    <div class="content-center pt-8 ml-12">
                        <div x-data="{ showModal : false }">


                            <form action="/selectSeat" method="get">

                            <button class="px-4 py-2 text-sm font-bold text-white transition-colors duration-150 ease-linear scale-90 bg-red-600 border rounded-l focus:outline-none focus:ring-0 hover:bg-red-700 hover:shadow-md focus:bg-red-300 focus:text-red-500">Select
                                Seat</button>
                            </form>


                            <div x-show="showModal"
                                class="fixed top-0 bottom-0 left-0 right-0 z-50 flex items-center justify-center overflow-auto text-gray-500 bg-black bg-opacity-40"
                                x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

                                <div x-show="showModal"
                                    class="w-auto h-full p-6 bg-white shadow-2xl rounded-xl sm:w-10/12"
                                    @click.away="showModal = false"
                                    x-transition:enter="transition ease duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-90 translate-y-1"
                                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                    x-transition:leave="transition ease duration-100 transform"
                                    x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 scale-90 translate-y-1">

                                    <span class="block mb-3 text-2xl font-bold">Select Seat</span>
                                    <div class="w-full justify-items-center">
                                        <div class="block p-2 pb-4 border-4 border-gray-400 rounded-md ">
                                            <div class="flex flex-row p-2 mt-2">
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="CD">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <i class="fas fa-steering-wheel"></i>
                                            </div>

                                            <div class="flex flex-row p-2 ">
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="1A">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="1B">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="1C">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="flex flex-row p-2 ">
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="2A">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="2B">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="2C">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="flex flex-row p-2 ">
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="3A">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="3B">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="3C">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>

                                            </div>




                                            <div class="flex flex-row p-2 ">
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="6A">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="6B">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="6C">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="flex flex-row p-2 ">
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="7A">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="7B">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="7C">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="flex flex-row p-2 ">
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="8A">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="8B">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <input type="button"
                                                        class="w-8 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 focus:bg-red-600 focus:text-gray-100 "
                                                        value="8C">
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>

                                                </div>


                                            </div>

                                        </div>
                                    </div>

                                    <div class="w-full justify-items-center ">
                                        <div class="block p-2 pb-4">
                                            <div class="flex flex-row p-2 ">
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <div
                                                        class="w-8 h-6 font-bold text-gray-500 border-0 rounded-sm bg-gray-50 rounded-t-0"
                                                        value=""></div>
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <div
                                                        class="w-8 h-6 font-bold text-gray-500 bg-red-600 border-0 rounded-sm rounded-t-0"
                                                        value=""></div>
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>
                                                <div class="w-8"></div>
                                                <div class="w-8"></div>
                                                <div
                                                    class="block w-10 text-gray-300 bg-transparent border-4 border-t-0 border-gray-400 border-solid rounded-sm focus:outline-none focus:ring-0 ">

                                                    <div
                                                        class="w-8 h-6 font-bold text-gray-500 bg-gray-400 border-0 rounded-sm rounded-t-0"
                                                        value=""></div>
                                                    <div
                                                        class="w-6 ml-1 border-4 border-t-0 border-l-0 border-r-0 border-gray-400 border-solid rounded-sm">
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="flex flex-row-reverse justify-between">
                                                <div>Occupied</div>
                                                <div>Selected</div>
                                                <div>Available</div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach


                </div>
                <div class="block w-full">
                    <div class="content-center w-full text-center sm:px-16">
                        <h1 class="mt-12 text-2xl sm:text-3xl ">Top Routes</h1>
                    </div>
                    <div class="block w-full pl-3 space-y-12 sm:pl-0 md:justify-center md:space-x-auto sm:space-y-0 sm:space-x-12 sm:inline-flex">
                        <div class="relative text-center cursor-pointer hover:opacity-25">
                            <img src="{{url('/images/Mombasa.jpg')}}" class="shadow-xl rounded-xl" alt="">
                            <div class="text-xl font-semibold">Nairobi - Mombasa</div>
                        </div>
                        <div class="relative text-center cursor-pointer hover:opacity-25">
                            <img src="{{url('/images/Nakuru.jpg')}}" class="shadow-xl rounded-xl" alt="">
                            <div class="text-xl font-semibold">Nairobi - Nakuru</div>
                        </div>
                        <div class="relative text-center cursor-pointer hover:opacity-25">
                            <img src="{{url('/images/Eldoret.jpg')}}" class="shadow-xl rounded-xl" alt="">
                            <div class="text-xl font-semibold">Nairobi - Eldoret</div>
                        </div>
                    </div>
                </div>
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
