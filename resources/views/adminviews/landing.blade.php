<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<section>
		<article>
			<div id="overlay" class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
				<div class="bg-gray-50 p-3 rounded-lg">
					<div class="flex justify-between items-center">
						<h4 class="text-lg font-semibold">My Profile</h4>
						<svg id="close-profile-modal" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
					<div class="grid grid-cols-6 gap-6 p-4">
						<div class="col-span-6 sm:col-span-3">
			                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
			                <input type="text" name="name" id="name" value="Jane Mbiru" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
			                <input type="email" name="email" id="email" value="janembiru@gmail.com" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
						<div class="col-span-6 sm:col-span-3">
			                <label for="number" class="block text-sm font-medium text-gray-700">Phone Number</label>
			                <input type="text" name="number" id="number" value="0709898989" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
			            </div>
												
					</div>
					<div class="flex justify-center items-center">
						<button class="bg-gray-900 px-3 py-1 text-gray-50 rounded">Edit</button>
					</div>
				</div>        
    		</div>
			<div class="box-content p-2 m-1 bg-red-900 rounded-lg ">
                <center class="text-xl cursor-default ">Dashboard</center>
            </div>
			<p>This the landing page</p>
		</article>
	</section>
<script src="{{url('/js/landing.js')}}"></script>
</body>
</html>