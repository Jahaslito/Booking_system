<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing</title>
    
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
	<section>
		<article>
			<div id="profile_modal" class=" bg-black bg-opacity-50  inset-0 hidden justify-center items-center fixed z-20">
				<div class="bg-gray-50 p-3 rounded-lg">
					<div class="flex justify-between items-center">
						<h4 class="text-lg font-semibold ">My Profile</h4>
						<svg onclick="closeProfModal()" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
						<button class="bg-gray-800 px-3 py-1 text-gray-50 rounded hover:opacity-75">Edit</button>
					</div>
				</div>        
    		</div>
			<div class="box-border p-2 m-1 bg-red-600 rounded-lg fixed inset-x-0 top-0">
                <center class="text-lg cursor-default text-gray-50">Dashboard</center>
            </div>
            <div class="flex space-x-24 justify-center items-center p-4 mt-8">
            	<div class="bg-white py-3 px-12 rounded shadow-md text-center">
            		<label class="text-xl font-semibold">67</label>
            		<p class="text-lg">Buses</p>
            	</div>
            	<div class="bg-white py-3 px-12 rounded shadow-md text-center">
            		<label class="text-xl font-semibold">103</label>
            		<p class="text-lg">Drivers</p>
            	</div>
            	<div class="bg-white py-3 px-12 rounded shadow-md text-center">
            		<label class="text-xl font-semibold">78</label>
            		<p class="text-lg">Trips</p>
            	</div>
            	<div class="bg-white py-3 px-12 rounded shadow-md text-center">
            		<label class="text-xl font-semibold">20</label>
            		<p class="text-lg">Routes</p>
            	</div>
            </div>
            <div x-data="app()" x-cloak class="px-4">
		    <div class="max-w-lg mx-auto py-10">
		      <div class="shadow p-6 rounded-lg bg-white">
		        <div class="md:flex md:justify-between md:items-center">
		          <div>
		            <h2 class="text-xl text-gray-800 font-bold leading-tight">Trip Bookings</h2>
		            <p class="mb-2 text-gray-600 text-sm">Daily Average</p>
		          </div>

		          <!-- Legends -->
		          <div class="mb-4">
		            <div class="flex items-center">
		              <div class="w-2 h-2 bg-blue-400 mr-2 rounded-full"></div>
		              <div class="text-sm text-gray-700">Bookings</div>
		            </div>
		          </div>
		        </div>

		        <!-- My problem -->
		        <div class="line my-8 relative">
		          <!-- Tooltip -->
		          <template x-if="tooltipOpen == true">
		            <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block"
		                 :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`"
		                 >
		              <div class="shadow-xs rounded-lg bg-white p-2">
		                <div class="flex items-center justify-between text-sm">
		                  <div>Bookings:</div>
		                  <div class="font-bold ml-2">
		                    <span x-html="tooltipContent"></span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </template>

		          <!-- Bar Chart -->
		          <div class="flex -mx-2 items-end mb-2">
		            <template x-for="data in chartData">

		              <div class="px-2 w-1/6">
		                <div :style="`height: ${data}px`" 
		                     class="transition ease-in duration-200 bg-blue-400 hover:bg-blue-500 relative"
		                     @mouseenter="showTooltip($event); tooltipOpen = true" 
		                     @mouseleave="hideTooltip($event)"
		                     >
		                  <div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"></div>
		                </div>
		              </div>

		            </template>
		          </div>

		          <!-- Labels -->
		          <div class="border-t border-gray-400 mx-auto" :style="`height: 1px; width: ${ 100 - 1/chartData.length*100 + 3}%`"></div>
		          <div class="flex -mx-2 items-end">
		            <template x-for="data in labels">
		              <div class="px-2 w-1/6">
		                <div class="bg-red-600 relative">
		                  <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
		                  <div x-text="data" class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm"></div>
		                </div>
		              </div>
		            </template>	
		          </div>

		        </div>

		        <!-- End of problem -->
		      </div>
		    </div>
		  </div>
			<button onclick="profModal()" class=" right-0 bottom-0 p-2 px-4 m-3 fixed bg-red-600 rounded-lg text-gray-50 hover:opacity-75">Profile</button>
		</article>
	</section>
<script src="<?php echo e(url('/js/components.js')); ?>"></script>
<script src="<?php echo e(url('/js/landing.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\Allan\Desktop\New folder\Booking_system\resources\views/adminviews/landing.blade.php ENDPATH**/ ?>