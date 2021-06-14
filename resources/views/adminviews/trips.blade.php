<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trips</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<section>
		<article>
			<div id="overlay" class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
				<div class="bg-gray-200">
					<div class="flex justify-between items-center">
						<h4 class="text-lg font-semibold">My Profile</h4>
						<svg id="close-profile-modal" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
					<div>
						<label>Name</label>	
						<input type="text" name="name" value="Jane Mbiru" readonly>
						<br>
						<label>Name</label>	
						<input type="text" name="name" value="Jane Mbiru" readonly>
						<br>
						<label>Name</label>	
						<input type="text" name="name" value="Jane Mbiru" readonly>
						<br>						
					</div>
					<div class="flex justify-center items-center">
						<button>Edit</button>
					</div>
				</div>        
    		</div>
    		<div id="edit_modal" class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
				<div class="bg-gray-50 p-3 rounded-lg">
					<div class="flex justify-between items-center">
						<h4 class="text-lg font-semibold">Edit Trip</h4>
						<svg onclick="closeEditModal()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
					<div class="grid grid-cols-6 gap-6 p-4">
						<div class="col-span-6 sm:col-span-3">
			                <label for="route" class="block text-sm font-medium text-gray-700">Route</label>
			                <input type="text" name="route" id="route" value="Nairobi - Kisumu" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
			                <input type="text" name="date" id="date" value="12-05-2021" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="depature" class="block text-sm font-medium text-gray-700">Depature</label>
			                <input type="text" name="depature" id="depature" value="09:00" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="arrival" class="block text-sm font-medium text-gray-700">Arrival</label>
			                <input type="text" name="arrival" id="arrival" value="01:00" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="available" class="block text-sm font-medium text-gray-700">Seats Available</label>
			                <input type="text" name="available" id="available" value="14" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="driver" class="block text-sm font-medium text-gray-700">Driver</label>
			                <input type="text" name="driver" id="driver" value="Kimani Njeru" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						
					</div>
					<div class="flex justify-center items-center mb-3">
						<button class="bg-gray-900 px-3 py-1 text-gray-50 rounded">Edit</button>
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
					<div class="grid grid-cols-6 gap-6 p-4">
						<div class="col-span-6 sm:col-span-3">
			                <label for="route" class="block text-sm font-medium text-gray-700">Route</label>
			                <input type="text" name="route" id="route" placeholder="Nairobi - Kisumu"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
			                <input type="date" name="date" id="date" placeholder="12-05-2021"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="depature" class="block text-sm font-medium text-gray-700">Depature</label>
			                <input type="time" name="depature" id="depature" placeholder="09:00"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
			            <div class="col-span-6 sm:col-span-3">
			                <label for="arrival" class="block text-sm font-medium text-gray-700">Arrival</label>
			                <input type="time" name="arrival" id="arrival" placeholder="01:00"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="driver" class="block text-sm font-medium text-gray-700">Driver</label>
			                <input type="text" name="driver" id="driver" placeholder="Kimani Njeru"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
					</div>
					<div class="flex justify-center items-center">
						<button class="bg-gray-900 px-3 py-1 text-gray-50 rounded">Add</button>
					</div>
				</div>        
    		</div>
			<div class="box-content p-2 m-1 bg-red-900 rounded-lg ">
                <center class="text-xl cursor-default ">Trips</center>
            </div>
			<div class="m-2">
				<table class="min-w-full divide-y divide-gray-200 box-border">
			          <thead class="bg-gray-50">
			            <tr>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Number
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Route
			              </th>
			              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
			                Depature
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
			            <tr>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="flex items-center">
			                  <div class="ml-4">
			                    <div class="text-sm font-medium text-gray-900">
			                      1
			                    </div>
			                  </div>
			                </div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900">Nairobi - Kisumu</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900">09:00</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900">01:00</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
			                  14
			                </span>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900">Kimani Njeru</div>
			                <div class="text-sm text-gray-500">0729832989</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
			                12-05-2021
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
			                <button onclick="editModal()" class="text-indigo-600 hover:text-indigo-900">Edit</button>
			              </td>
			            </tr>
			            <tr>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="flex items-center">
			                  <div class="ml-4">
			                    <div class="text-sm font-medium text-gray-900">
			                      2
			                    </div>
			                  </div>
			                </div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900">Nairobi - Kisumu</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900">09:00</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900">01:00</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
			                  14
			                </span>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900">Kimani Njeru</div>
			                <div class="text-sm text-gray-500">0729832989</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
			                12-05-2021
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
			                <button onclick="editModal()" class="text-indigo-600 hover:text-indigo-900">Edit</button>
			              </td>
			            </tr>
			            <tr>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="flex items-center">
			                  <div class="ml-4">
			                    <div class="text-sm font-medium text-gray-900">
			                      3
			                    </div>
			                  </div>
			                </div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900">Nairobi - Kisumu</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900">09:00</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900">01:00</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
			                  14
			                </span>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap">
			                <div class="text-sm text-gray-900">Kimani Njeru</div>
			                <div class="text-sm text-gray-500">0729832989</div>
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
			                12-05-2021
			              </td>
			              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
			                <button onclick="editModal()" class="text-indigo-600 hover:text-indigo-900">Edit</button>
			              </td>
			            </tr>

			            <!-- More people... -->
			          </tbody>
			        </table>
			</div>
			<button onclick="addModal()" class="absolute right-0 bottom-0 p-2 px-4 m-3 fixed bg-red-900 rounded-lg">Add</button>
		</article>
	</section>
<script src="{{url('/js/components.js')}}"></script>
</body>
</html>

