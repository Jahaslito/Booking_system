<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
</head>
<body class="bg-gray-900">
    <!-- div class="box-border p-9 border-4 pt-0"> -->
        <div class="h-14 mt-2">
            
        
        <div class="relative h-12 flex">
            <div class="p-3 text-gray-50 cursor-pointer ml-6">LOGO</div>
            <div>
                <input type="text" name="Search" placeholder="Search..." class="absolute inset-x-2/4 border-1 m-1 mt-1.5 ml-4 p-1 focus:outline-none focus:ring focus:border-blue-300 rounded-full py-2 px-5">
            </div>
            <div class="absolute right-3">
                <button class="box-content p-1 px-3 bg-red-900 m-1 mt-2 rounded-lg">Profile</button>
                <button class="box-content p-1 px-3 bg-red-900 m-1 mt-2 rounded-lg">Logout</button>                
            </div>
        </div>
        </div>
        <div class="box-border flex max-h-full ">
            <div class="w-1/5 p-3">
                <center>
                    <h1 class="text-3xl font-medium text-gray-50 cursor-default">Admin Name</h1>
                    <br>
                    <div class="rounded-full h-24 w-24 flex items-center justify-center border-4 justify-self-center overflow-hidden"><img src="{{url('/images/avatar.png')}}"></div>
                </center>  
                <br>        
                <div class="m-2 box-content p-2 my-1 "><i class="fa-regular fa-location"></i><a href="{{url('/adminviews/landing')}}" target="frame" class="text-xl text-gray-50 hover:text-red-900 cursor-pointer">DASHBOARD</a></div>

                <div class="m-2 box-content p-2 my-1 "><i class="fa-regular fa-location"></i><a href="{{url('/adminviews/routes')}}" target="frame" class="text-xl text-gray-50 hover:text-red-900 cursor-pointer">ROUTES</a></div>

                <div class="m-2 box-content p-2 my-1 "><i class="fa-regular fa-location"></i><a href="{{url('/adminviews/buses')}}" target="frame" class="text-xl text-gray-50 hover:text-red-900 cursor-pointer">BUSES</a></div>

                <div class="m-2 box-content p-2 my-1 "><i class="fa-regular fa-location"></i><a href="{{url('/adminviews/trips')}}" target="frame" class="text-xl text-gray-50 hover:text-red-900 cursor-pointer">TRIPS</a></div>

                <div class="m-2 box-content p-2 my-1 "><i class="fa-regular fa-location"></i><a href="{{url('/adminviews/drivers')}}" target="frame" class="text-xl text-gray-50 hover:text-red-900 cursor-pointer">DRIVERS</a></div>
            </div>
            <div class="relative w-4/5 mr-3 bg-gray-50 rounded-lg">                
                <main>
                  <div class="iframe">
                    <iframe src="{{url('/adminviews/landing')}}" name="frame" class="box-border rounded-lg w-full h-full relative"></iframe>
                  </div>
                </main>
                <button class="absolute right-0 bottom-0 p-2 px-4 m-3 fixed bg-red-900 rounded-lg">Add</button>
            </div>
        </div>        
    <!-- </div> -->
    

</body>
</html>