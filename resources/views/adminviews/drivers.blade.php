<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Drivers</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<section>
		<article>

{{-- EDIT Modal --}}
    		<div id="edit_modal" class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
				<div class="bg-gray-50 p-3 rounded-lg">
					<div class="flex justify-between items-center">
						<h4 class="text-lg font-semibold">Edit Driver</h4>
						<svg onclick="closeEditModal()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
					<form action="/edit_drivers" method="POST">
					@csrf
					<div class="grid grid-cols-6 gap-6 p-4">
						<div class="col-span-6 sm:col-span-3">
			                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
			                <input type="text" name="name" id="edit_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
			                <input type="text" name="phone_number" id="edit_phone_number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="licence" class="block text-sm font-medium text-gray-700">Driver's Licence</label>
			                <input type="text" name="licence" id="edit_licence" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>	
						<input type="text" class="hide_data" name="user_id" id="user_id">	
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
						<h4 class="text-lg font-semibold">Add Driver</h4>
						<svg onclick="closeAddModal()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>



{{-- START OF ADD MODAL --}}
			<form action="/drivers" method="POST">
				@csrf
			
				<div class="form-group">
					<div class="grid grid-cols-6 gap-6 p-4">
						<div class="col-span-6 sm:col-span-3">
			                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
			                <input type="text" name="name" placeholder="Barry " class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Numbera</label>
			                <input type="text" name="phone_number"  placeholder="0712345678" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="licence" class="block text-sm font-medium text-gray-700">Driver's Licence</label>
			                <input type="text" name="driver_licence"  placeholder="KE56F65" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>					
					</div>
					<div class="flex justify-center items-center">
						<button type="submit" class="bg-gray-800 px-3 py-1 text-gray-50 rounded hover:opacity-75">Add</button>
					</div>
				</div>  
			</div>
			</form>
				
				{{-- END OF ADD MODAL --}}



    		</div>
			<div class="box-content p-2 m-1 bg-red-600 rounded-lg ">
                <center class="text-lg cursor-default text-gray-50">Drivers</center>
            </div>
			
			<div class="m-2">
				<table class="min-w-full divide-y divide-gray-200 box-border">
			          <thead class="bg-gray-50">
			            <tr>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Number
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Name
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Phone Number
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Licence
			              </th>
			              <th scope="col" class="relative px-6 py-3">
			                <span class="sr-only">Edit</span>
			              </th>
			            </tr>
			          </thead>
			          <tbody class="bg-white divide-y divide-gray-200">
					  @php
					  $counterdriver=1
					  @endphp
						  @foreach ($driver as $driver)							  
						
			            <tr>
			              <td class="px-6 py-4 whitespace-nowrap">
						  <div class="user_id hide_data">
						  {{$driver->id}}
						  </div>
			                <div class="flex items-center">
			                  <div class="ml-4">
			                    <div class="text-sm font-medium text-gray-900">{{$counterdriver}}</div>
			                  </div>
			                </div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900 driver_name">{{$driver->name}}</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 driver_phone_number">{{$driver->phone_number}}</td>
			              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 driver_licence">{{$driver->driver_licence}}</td>
			              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
			                <button onclick="editDriverModal({{$counterdriver}})" class="text-gray-800 hover:underline bg-blue-100 px-3 py-1 rounded">Edit</button>
							<button onClick="deleteDriver({{$counterdriver}})" class="text-gray-800 hover:underline bg-red-100 px-3 py-1 rounded">Delete</button>
			              </td>
			            </tr>
						@php
						$counterdriver=$counterdriver+1;
						@endphp
													
						@endforeach
			            <!-- More people... -->
			          </tbody>
			        </table>

			</div>
			<button onclick="addModal()" class="right-0 bottom-0 p-2 px-4 m-3 fixed bg-red-600 rounded-lg text-gray-50 hover:opacity-75">Add</button>
			
		</article>
	</section>
<script src="{{url('/js/components.js')}}"></script>
</body>
</html>