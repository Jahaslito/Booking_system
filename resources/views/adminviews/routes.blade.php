<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Routes</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<section>
		<article>
    		<div id="edit_modal" class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
				<div class="bg-gray-50 p-3 rounded-lg">
					<div class="flex justify-between items-center">
						<h4 class="text-lg font-semibold">Edit Route</h4>
						<svg onclick="closeEditModal()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
					<form action="/edit_routes" method="POST">
						@csrf
					<div class="grid grid-cols-6 gap-6 p-4">
						<div class="col-span-6 sm:col-span-3">
			                <label for="source" class="block text-sm font-medium text-gray-700">Source</label>
			                <input type="text" name="source" id="edit_source"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="destination" class="block text-sm font-medium text-gray-700">Destination</label>
			                <input type="text" name="destination" id="edit_destination"   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
			                <input type="number" name="price" id="edit_price"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<input type="text" class="hide_data" name="route_id" id="route_id">			
					</div>
					
					<div class="flex justify-center items-center mb-3">
						<button class="bg-gray-800 px-3 py-1 text-gray-50 rounded hover:opacity-75">Edit</button>
					</div>
				</form>
				</div>        
    		</div>
    		<div id="add_modal" class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
				<div class="bg-gray-50 p-3 rounded-lg">
					<div class="flex justify-between items-center">
						<h4 class="text-lg font-semibold">Add Route</h4>
						<svg onclick="closeAddModal()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
					<form action="/routes" method="POST">
						@csrf
					<div class="grid grid-cols-6 gap-6 p-4">
						<div class="col-span-6 sm:col-span-3">
			                <label for="source" class="block text-sm font-medium text-gray-700">Source</label>
			                <input type="text" name="source" id="source" placeholder="Nairobi" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="destination" class="block text-sm font-medium text-gray-700">Destination</label>
			                <input type="text" name="destination" id="destination" placeholder="Kisumu" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
			                <input type="number" name="price" id="price" placeholder="2500" min="0" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>									
					</div>
					<div class="flex justify-center items-center">
						<button class="bg-gray-800 px-3 py-1 text-gray-50 rounded hover:opacity-75" type="submit">Add</button>
					</div>
				</form>
				</div>        
    		</div>
		
			<div class="box-content p-2 m-1 bg-red-600 rounded-lg ">
                <center class="text-lg cursor-default text-gray-50">Routes</center>
            </div>
			<div class="m-2">
				
				<table class="min-w-full divide-y divide-gray-200 box-border">
			          <thead class="bg-gray-50">
			            <tr>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Number
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Source
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Destination
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Price
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
						@foreach ($route as $route)
						<tr>
			              <td class="px-6 py-4 whitespace-nowrap">				
							
							
							<div class="route_id hide_data">
								{{$route->id}}
							</div>
			                <div class="flex items-center">
			                  <div class="ml-4">
			                    <div class="text-sm font-medium text-gray-900">
									{{$counter}}
			                    </div>
			                  </div>
			                </div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900 route_source">{{$route->source}}</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900 route_destination">{{$route->destination}}</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900 route_price">{{$route->price}}</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
			                <button onclick="editModal({{$counter}})" class="text-gray-800 hover:underline bg-blue-100 px-3 py-1 rounded">Edit</button>
							<button class="text-gray-800 hover:underline bg-red-100 px-3 py-1 rounded">Delete</button>
			              </td>
			            </tr>
						@php
							$counter=$counter+1;
						@endphp
						@endforeach
			           
			          </tbody>
			        </table>
					
					
			</div>	
			<button onclick="addModal()" class="absolute right-0 bottom-0 p-2 px-4 m-3 fixed bg-red-600 rounded-lg text-gray-50 hover:opacity-75">Add</button>	
		</article>
	</section>
<script src="{{url('/js/components.js')}}"></script>
</body>
</html>