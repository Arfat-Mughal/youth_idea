<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
       
    </head>
    <body>
        <div class="container px-8 mx-auto">
            <nav class="flex justify-between items-center bg-black py-12">
                <div>
                    <img src={{ public_path("images\logo.png") }} width="150" alt="Youth Logo" />
                </div>
                <div class="flex items-center">
                    <ul class="flex items-center">
                        <li class="ml-3">
                            <a href="#" class="text-center px-3 py-2 text-white">Home</a>
                        </li>
                        <li class="ml-3">
                            <a href="#" class="text-center px-3 py-2 text-white">About us</a>
                        </li>
                        <li class="ml-3">
                            <a href="#" class="text-center px-3 py-2 text-white">Projects</a>
                        </li>
                        <li class="ml-3">
                            <a href="#" class="text-center px-3 py-2 text-white">Gallery</a>
                        </li>
                        <li class="ml-3">
                            <a href="#" class="text-center px-3 py-2 text-white">Blog</a>
                        </li>
                        <li class="ml-[4.5rem]">
                            <a href="#" class="text-center rounded-lg px-10 py-3 text-white bg-[#df2003] hover:opacity-80">Sign in</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div >

        </div>
    </body>
</html>
