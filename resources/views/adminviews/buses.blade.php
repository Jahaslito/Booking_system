<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Buses</title>
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
						<h4 class="text-lg font-semibold">Edit Bus</h4>
						<svg onclick="closeEditModal()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
					<form action="/edit_buses" method="POST">
						@csrf
					<div class="grid grid-cols-6 gap-6 p-4">
						<div class="col-span-6 sm:col-span-3">
			                <label for="plate" class="block text-sm font-medium text-gray-700">Number Plate</label>
			                <input type="text" name="plate" id="edit_plate" value="KBC 345T" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity</label>
			                <input type="text" name="capacity" id="edit_capacity" value="33" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="model" class="block text-sm font-medium text-gray-700">Model</label>
			                <input type="text" name="model" id="edit_model" value="Scania" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
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
							<input type="text" name="bus_id" id="bus_id" value="" class="hide_data">
			            </div>
					</div>
					<div class="flex justify-center items-center">
						<button class="bg-gray-800 px-3 py-1 text-gray-50 rounded hover:opacity-75">Edit</button>
					</div>
					</form>
				</div>
    		</div>
    		<div id="add_modal" class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
				<div class="bg-gray-50 p-3 rounded-lg">
					<div class="flex justify-between items-center">
						<h4 class="text-lg font-semibold">Add Bus</h4>
						<svg onclick="closeAddModal()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
					<form action="/buses" method="POST">
					@csrf
					<div class="grid grid-cols-6 gap-6 p-4">
						<div class="col-span-6 sm:col-span-3">
			                <label for="plate" class="block text-sm font-medium text-gray-700">Number Plate</label>
			                <input type="text" name="plate"  placeholder="KBC 345T" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity</label>
			                <input type="number" min="0" name="capacity"  placeholder="33" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="model" class="block text-sm font-medium text-gray-700">Model</label>
			                <input type="text" name="model"  placeholder="Scania" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>	
							

						<div class="col-span-6 sm:col-span-3">
			                <label for="plate" class="block text-sm font-medium text-gray-700">Route</label>
							<select name="route_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
							@foreach ($route_list as $route)
							<option value="{{$route->id}}">{{$route->source. " - ". $route->destination}}</option>
							@endforeach								
							</select>
			            </div>
					</div>
					<div class="flex justify-center items-center">
						<button class="bg-gray-800 px-3 py-1 text-gray-50 rounded hover:opacity-75" type="submit">Add</button>
					</div>
				</form>
				</div>				
    		</div>
			<div class="box-border p-2 m-1 bg-red-600 rounded-lg">
                <center class="text-lg cursor-default text-gray-50">Buses</center>
            </div>
			<div class="m-2">
				<table class="min-w-full divide-y divide-gray-200 box-border">
			          <thead class="bg-gray-50">
			            <tr>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Number
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Number Plate
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Capacity
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Model
			              </th>
						  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Route
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
						@foreach ($bus as $bus)
			            <tr>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="flex items-center">
			                  <div class="ml-4">
			                    <div class="text-sm font-medium text-gray-900 ">
			                      {{ $counter }}
			                    </div>
								<div class="hide_data bus_id">{{ $bus->id }}</div>
			                  </div>
			                </div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900 bus_plate">{{ $bus->number_plate }}</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-gray-800 bus_capacity"> {{ $bus->capacity }}</span>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 bus_model">  {{ $bus->model }}</td>
						  @php
							  $route= App\Models\route::find($bus->route_id); 
						  @endphp
						  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
			                {{ $route->source." - ".$route->destination}}
			              </td>
						  <div class="hide_data route_id">{{$bus->route_id}}</div>
			              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-semibold">
			                <button onclick="busEditModal({{$counter}})" class="text-gray-800 hover:underline bg-blue-100 px-3 py-1 rounded">Edit</button>
							<button onclick="deleteBus({{$counter}})" class="text-gray-800 hover:underline bg-red-100 px-3 py-1 rounded">Delete</button>
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
