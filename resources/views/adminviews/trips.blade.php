<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Trips</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<section>
		<article>
    		<div id="edit_modal" class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
				<div class="bg-gray-50 p-3 rounded-lg">
					<div class="flex justify-between items-center">
						<h4 class="text-lg font-semibold">Edit Trip</h4>
						<svg onclick="closeEditModal()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
					<form action="/edit_trips" method="POST">
					@csrf
					<div class="grid grid-cols-6 gap-6 p-4">
					@php
							$route_list= App\Models\route::all();
						@endphp	
						<div class="col-span-6 sm:col-span-3">
			                <label for="route_id" class="block text-sm font-medium text-gray-700">Route</label>
			                <select name="route_id" id="route_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
								@foreach ($route_list as $route)
								<option value="{{$route->id}}" id="route{{$route->id}}">{{$route->source. " - ". $route->destination}}</option>
								@endforeach								
							</select>
							{{-- <input type="text" name="route_id" id="route_id" value="" class="hide_data"> --}}
							<input type="text" name="trip_id" id="trip_id" value="" class="hide_data">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
			                <input type="text" name="date" id="edit_date" value="12-05-2021" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="departure" class="block text-sm font-medium text-gray-700">departure</label>
			                <input type="text" name="departure" id="edit_departure" value="09:00" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="arrival" class="block text-sm font-medium text-gray-700">Arrival</label>
			                <input type="text" name="arrival" id="edit_arrival" value="01:00" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="available" class="block text-sm font-medium text-gray-700">Seats Available</label>
			                <input type="text" name="available" id="edit_available" value="14" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						@php
							$driver_list= App\Models\driver::all();
						@endphp	
						<div class="col-span-6 sm:col-span-3">
			                <label for="driver" class="block text-sm font-medium text-gray-700">Driver</label>
							<select name="driver_id" id="driver_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
							@foreach ($driver_list as $driver)
							<option value="{{$driver->id}}" id="driver{{$driver->id}}">{{$driver->name}}</option>
							@endforeach
							</select>
			                {{--<input type="text" name="driver_id" id="driver_id" value="" class="hide_data">--}}
							<input type="text" name="trip_id" id="trip_id" value="" class="hide_data">
			            </div>
						@php
							$bus_list= App\Models\bus::all();
						@endphp	
						<div class="col-span-6 sm:col-span-3">
			                <label for="bus" class="block text-sm font-medium text-gray-700">Bus</label>
							<select name="bus_id" id="bus_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
							@foreach ($bus_list as $bus)
							<option value="{{$bus->id}}" id="bus{{$bus->id}}">{{$bus->number_plate}}</option>
							@endforeach
							</select>
			                {{--<input type="text" name="bus_id" id="bus_id" value="" class="hide_data">--}}
							<input type="text" name="trip_id" id="trip_id" value="" class="hide_data">

			            </div>
						
					</div>
					<div class="flex justify-center items-center mb-3">
						<button class="bg-gray-800 px-3 py-1 text-gray-50 rounded hover:opacity-75">Edit</button>
					</div>
				</div>        
    		</div>
    		<div id="add_modal" class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
				<div class="bg-gray-50 p-3 rounded-lg">
					<div class="flex justify-between items-center">
						<h4 class="text-lg font-semibold">Add Trip</h4>
						<svg onclick="closeAddModal()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
					<form action="/trips" method="POST">
					<div class="grid grid-cols-6 gap-6 p-4">
						<div class="col-span-6 sm:col-span-3">
			                <label for="route" class="block text-sm font-medium text-gray-700">Route</label>
							<select name="route_id" id="route_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
								@foreach ($route_list as $route)
								<option value="{{$route->id}}" id="route{{$route->id}}">{{$route->source. " - ". $route->destination}}</option>
								@endforeach								
							</select>
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
			                <input type="date" name="date" id="date" placeholder="12-05-2021"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="departure" class="block text-sm font-medium text-gray-700">departure</label>
			                <input type="time" name="departure" id="departure" placeholder="09:00"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="arrival" class="block text-sm font-medium text-gray-700">Arrival</label>
			                <input type="time" name="arrival" id="arrival" placeholder="01:00"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="driver" class="block text-sm font-medium text-gray-700">Driver</label>
							<select name="driver_id" id="driver_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
							@foreach ($driver_list as $driver)
							<option value="{{$driver->id}}" id="driver{{$driver->id}}">{{$driver->name}}</option>
							@endforeach
							</select>
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="bus" class="block text-sm font-medium text-gray-700">Bus</label>
							<select name="bus_id" id="bus_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
							@foreach ($bus_list as $bus)
							<option value="{{$bus->id}}" id="bus{{$bus->id}}">{{$bus->number_plate}}</option>
							@endforeach
							</select>
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="seats_available" class="block text-sm font-medium text-gray-700">Seats Available</label>
			                <input type="text" name="available" id="available" placeholder="30"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
					</div>
					<div class="flex justify-center items-center">
						<button class="bg-gray-800 px-3 py-1 text-gray-50 rounded hover:opacity-75">Add</button>
					</div>
					</form>
				</div>        
    		</div>
			<div class="box-content p-2 m-1 bg-red-600 rounded-lg ">
                <center class="text-lg cursor-default text-gray-50">Trips</center>
            </div>
			<div class="m-2">
				<table class="min-w-full divide-y divide-gray-200 box-border">
			          <thead class="bg-gray-50">
			            <tr>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Number
			              </th>
						  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Bus
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Route
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                departure
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Arrival
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Seats Available
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Driver
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Date
			              </th>
			              <th scope="col" class="relative px-6 py-3">
			                <span class="sr-only">Edit</span>
			              </th>
			            </tr>
			          </thead>
			          <tbody class="bg-white divide-y divide-gray-200">
						  @php
						  $counter=1
						  @endphp
					  @foreach ($trip as $trip)
			            <tr>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="flex items-center">
			                  <div class="ml-4">
			                    <div class="text-sm font-medium text-gray-900">
			                      {{ $counter }}
			                    </div>
								<div class="hide_data trip_id">{{ $trip->id }}</div>
			                  </div>
			                </div>
			              </td>
						  @php
						  $bus=App\Models\bus::find($trip->bus_id)
						  @endphp
						  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 trip_bus_plate">
			               {{$bus->number_plate}}
			              </td>
						  @php
							  $route= App\Models\route::find($trip->route_id); 
						  @endphp
			              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 trip_route_id">
						  {{ $route->source." - ".$route->destination}}
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900 trip_departure">{{$trip->departure}}</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900 trip_arrival">{{$trip->arrival}}</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap trip_capacity">
			                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-gray-800">
			                  {{$trip->seats_available}}
			                </span>
			              </td>
						  @php
						  $driver= App\Models\driver::find($trip->driver_id)
						  @endphp
			              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 trip_driver_name">
							  {{$driver->name}}
						  </td>
			              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 trip_date">
			                {{$trip->date}}
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
			                <button onclick="tripEditModal({{$counter}})" class="text-gray-800 hover:underline bg-blue-100 px-3 py-1 rounded">Edit</button>
							<button onclick="deleteTrip({{$counter}})" class="text-gray-800 hover:underline bg-red-100 px-3 py-1 rounded">Delete</button>
			              </td>
			            </tr>
						@php
						$counter=$counter+1;
						@endphp
						@endforeach
			           

			            <!-- More people... -->
			          </tbody>
			        </table>
			</div>
			<button onclick="addModal()" class="absolute right-0 bottom-0 p-2 px-4 m-3 fixed bg-red-600 rounded-lg text-gray-50 hover:opacity-75">Add</button>
		</article>
	</section>
<script src="{{url('/js/components.js')}}"></script>
</body>
</html>

