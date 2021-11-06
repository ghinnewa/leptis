<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
    <style>@font-face {
 font-family:Futural;
 src: url('{{asset('fonts/FUTURAL.TTF')}}');
 }
 </style>
<body style="font-family:futural" >
<div class="relative bg-white dark:bg-gray-800">
    <div class="flex flex-col sm:flex-row sm:justify-around">
        <div class="w-72 h-screen">
            <nav class="mt-10 px-6 ">
                <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-600 dark:text-gray-400 rounded-lg " href="#">
                    <span class="mx-4 text-lg font-normal">
                        Element
                    </span>
                    <span class="flex-grow text-right">
                    </span>
                </a>
                <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-800 dark:text-gray-100 rounded-lg bg-gray-100 dark:bg-gray-600" href="#">
                    <span class="mx-4 text-lg font-normal">
                        Form
                    </span>
                    <span class="flex-grow text-right">
                    </span>
                </a>
                <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-600 dark:text-gray-400 rounded-lg " href="#">
                    <span class="mx-4 text-lg font-normal">
                        Commerce
                    </span>
                    <span class="flex-grow text-right">
                    </span>
                </a>
                <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-600 dark:text-gray-400 rounded-lg " href="#">
                    <span class="mx-4 text-lg font-normal">
                        Navigation
                    </span>
                    <span class="flex-grow text-right">
                    </span>
                </a>
            </nav>
        </div>
    </div>
</div>

</body>
</html>