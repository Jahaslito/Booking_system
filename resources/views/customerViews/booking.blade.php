<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Booking</title>
</head>

<body class="content-start w-full h-full p-px bg-gray-50">
    <div class="container w-full h-full ">
        <nav
            class="flex flex-col w-full px-6 py-2 mb-16 font-sans text-center bg-white sm:flex-row sm:text-left sm:justify-between sm:items-baseline">
            <div class="mb-2 sm:mb-0 inner">

                <a href="/home"
                    class="font-sans text-2xl font-bold no-underline text-grey-darkest hover:text-blue-dark">Logo</a><br>
                <!-- <span class="text-xs text-grey-dark">Beautiful New Tagline</span> -->

            </div>

            <div class="self-center sm:mb-0">

                <a href="#" class="px-1 ml-2 text-black no-underline text-md hover:text-blue-dark">Link1</a>
                <a href="#" class="px-1 ml-2 no-underline text-md text-grey-darker hover:text-blue-dark">Link2</a>
                <a href="#" class="px-1 ml-2 no-underline text-md text-grey-darker hover:text-blue-dark">Link3</a>

            </div>
        </nav>
        <div class="content-center w-full mb-20">
            <div class="flex flex-row justify-center w-full space-x-5">
                <div class="searchFrom">
                    <input type="text"
                        class="p-2 pl-8 bg-gray-200 border border-gray-200 rounded focus:bg-white focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent"
                        placeholder="From" value="" />
                </div>
                <div class="searchTo">
                    <input type="text"
                        class="p-2 pl-8 bg-gray-200 border border-gray-200 rounded focus:bg-white focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent"
                        placeholder="To" value="" />
                </div>
                <div class="searchDate">
                    <input type="Date"
                        class="p-2 pl-8 bg-gray-200 border border-gray-200 rounded focus:bg-white focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent"
                        placeholder="Date" />
                </div>
                <div class="searchBus">
                    <button
                        class="p-2 pl-8 text-white bg-red-600 border rounded-sm hover:shadow-lg hover:bg-red-700 focus:border-transparent">Search
                        Bus</button>
                </div>
            </div>

        </div>
        <div class="content-center w-full px-16">
            <div class="justify-center pl-16 ">
                <h1 class="text-3xl ml-96">Search Results</h1>
                <div class="flex flex-row h-auto p-8 bg-white shadow-lg">
                    <img src="{{url('/images/bus.jpg')}}" alt="Bus Image" class="w-auto h-24">
                    <div class="ml-16">
                        <h2 class="w-auto mb-4 text-2xl">Nairobi - Kisumu</h2>
                        <div class="flex flex-row mt-2 md:flex-auto md:flex-row-reverse">
                            <i class="w-6 pt-2 mx-1 text-red-600 fa fa-map-marker"></i>
                            <h3 class="text-xl text-red-600">Boarding Place</h3>
                        </div>
                        <p>CBD</p>

                    </div>
                    <div class="content-start block w-auto ml-16 ">
                        <div class="block">
                            <div class="flex flex-row mt-2 md:flex-auto md:flex-row-reverse">
                                <i class="w-6 pt-1.5 mx-1 text-red-600 fa fa-hourglass-start"></i>
                                <h4 class="text-base text-red-600">Departure Time</h4>
                            </div>
                            <p>8:00 am</p>
                        </div>
                        <div class="block pt-4">
                            <div class="flex flex-row mt-2 md:flex-auto md:flex-row-reverse">
                                <i class="w-6 pt-1.5 mx-1 fa fa-calendar text-red-600"></i>
                                <h5 class="text-base text-red-600">Departure Date</h5>
                            </div>
                            <p>23-05-2021</p>
                        </div>
                    </div>
                    <div class="content-center w-auto pt-4 ml-28 divide-y-12">
                        <h6 class="text-xl text-red-600 ">Price</h6>
                        <p class="text-xl text-green-500">KES 1000</p>
                    </div>
                    <div class="content-center pt-8 ml-12">
                        <div x-data="{ showModal : false }">

                            <button @click="showModal = !showModal"
                                class="px-4 py-2 text-sm font-bold text-white transition-colors duration-150 ease-linear scale-90 bg-red-600 border rounded-l focus:outline-none focus:ring-0 hover:bg-red-700 hover:shadow-md focus:bg-red-300 focus:text-red-500">Select
                                Seat</button>


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
                                                        value="4A">
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
                                                        value="4B">
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
                                                        value="4C">
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
                                                        value="5A">
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
                                                        value="5B">
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
                                                        value="5C">
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


                                    <div class="flex flex-row mt-5 space-x-5 text-right">
                                        <button @click="showModal = !showModal"
                                            class="h-10 px-4 py-2 text-sm font-bold text-gray-500 transition-colors duration-150 ease-linear bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-0 hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancel
                                        </button>
                                        <button
                                            class="w-auto h-10 text-xs font-bold text-white transition-colors duration-150 ease-linear scale-90 bg-red-600 border sm:px-4 sm:py-2 rounded-xl focus:outline-none focus:ring-0 hover:bg-red-700 hover:shadow-md focus:bg-red-300 focus:text-red-500">Continue
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row h-auto p-8 mt-2 bg-white shadow-lg">
                    <img src="{{url('/images/bus.jpg')}}" alt="Bus Image" class="w-auto h-24">
                    <div class="ml-16">
                        <h2 class="w-auto mb-4 text-2xl">Nairobi - Kisumu</h2>
                        <div class="flex flex-row mt-2 md:flex-auto md:flex-row-reverse">
                            <i class="w-6 pt-1.5 mx-1 fa fa-map-marker text-red-600"></i>
                            <h3 class="text-xl text-red-600">Boarding Place</h3>
                        </div>
                        <p>CBD</p>

                    </div>
                    <div class="content-start block w-auto ml-16 ">
                        <div class="block">
                            <div class="flex flex-row mt-2 md:flex-auto md:flex-row-reverse">
                                <i class="w-6 pt-1.5 mx-1 fa fa-hourglass-start text-red-600"></i>
                                <h4 class="text-base text-red-600">Departure Time</h4>
                            </div>
                            <p>8:00 am</p>
                        </div>
                        <div class="block pt-4">
                            <div class="flex flex-row mt-2 md:flex-auto md:flex-row-reverse">
                                <i class="w-6 pt-2 mx-1 text-red-600 fa fa-calendar"></i>
                                <h5 class="text-base text-red-600">Departure Date</h5>
                            </div>
                            <p>23-05-2021</p>
                        </div>
                    </div>
                    <div class="content-center w-auto pt-4 ml-28 divide-y-12">
                        <h6 class="text-xl text-red-600 ">Price</h6>
                        <p class="text-xl text-green-500">KES 1000</p>
                    </div>
                    <div class="content-center pt-8 ml-12">
                        <div x-data="{ showModal : false }">

                            <button @click="showModal = !showModal"
                                class="px-4 py-2 text-sm font-bold text-white transition-colors duration-150 ease-linear scale-90 bg-red-600 border rounded-l focus:outline-none focus:ring-0 hover:bg-red-700 hover:shadow-md focus:bg-red-300 focus:text-red-500">Select
                                Seat</button>


                            <div x-show="showModal"
                                class="fixed top-0 bottom-0 left-0 right-0 z-50 flex items-center justify-center overflow-auto text-gray-500 bg-black bg-opacity-40"
                                x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

                                <div x-show="showModal"
                                    class="w-24 h-full p-6 bg-white shadow-2xl rounded-xl sm:w-10/12"
                                    @click.away="showModal = false"
                                    x-transition:enter="transition ease duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-90 translate-y-1"
                                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                    x-transition:leave="transition ease duration-100 transform"
                                    x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 scale-90 translate-y-1">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block w-full">
                    <div class="content-center w-full px-16">
                        <h1 class="mt-12 sm:text-3xl sm:ml-80">Top Routes</h1>
                    </div>
                    <div class="block w-full space-y-12 sm:space-y-0 sm:space-x-12 sm:inline-flex">
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
                <a href="#" class="block my-3 text-sm font-medium text-gray-300 duration-700 hover:text-gray-100">
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

</body>

</html>