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

<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-white z-10 w-full  p-0 m-0 invisible sm:visible  shadow-md">
  <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">
    <div class="relative  flex  items-center  h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="border-white border-2 flex-1 flex items-center  justify-between">
        <div class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-8 w-auto" src="" alt="Workflow">
          <img class="hidden lg:block h-12 w-auto" src="{{asset('img/logofull.png')}}" alt="Workflow">
        </div>
        <div class="hidden  sm:block sm:ml-6 ">
          <div class="flex  space-x-4 ">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/#" class=" hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">HOME</a>

            <a href="/#about" class="hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">ABOUT</a>

            <a href="/#partners" class="hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">PARTNERS</a>

            <a href="/#courses" class="hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">COURSES</a>
            <a href="/#contact" class="hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">CONTACT</a>
            <a href="/#footer" class="hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">OPENING</a>
          </div>
        </div>
      </div>
      
        

        <!-- Profile dropdown -->
        
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
              </div>
            </div>
          </nav>
          
          <div class=" pt-10">
    <!-- component -->
<!-- This is an example component -->
<div class="max-w-lg mx-12">
    <div class="inline-flex shadow-sm rounded-md mb-5" role="group">
        <a href="/#courses" class="rounded-l-lg border border-gray-200 bg-white text-sm font-medium px-4 py-2 text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
          < Topics
</a>
        <a href="/ndt" class="border-t border-b border-gray-200 bg-white text-sm font-medium px-4 py-2 text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
          << Trainings
</a>
        <a href="/CCcourses/{{$course->topic_id}}" class="rounded-r-md border border-gray-200 bg-white text-sm font-medium px-4 py-2 text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
         <<< Courses
</a>
    </div>
   
</div>
</div>

          <div>
            <!-- Container -->
<div class="container my-16 mx-auto p-4 md:p-0">
  
  <!-- Card wrapper -->
  <div class="shadow-lg  flex flex-wrap w-full lg:w-4/5 mx-auto">
    
    <!-- Card image -->
    <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative" style="background-image:url('{{ asset('img/ndt.png')}}')">
      <div class="absolute text-xl">
        <i class="fa fa-heart text-white hover:text-red-light ml-4 mt-4 cursor-pointer"></i>
      </div>
    </div>
    <!-- ./Card image -->
    
    <!-- Card body -->
    <div class="bg-white w-full   md:w-2/3">
      <!-- Card body - outer wrapper -->
      <div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-ml-6 relative">
        <!-- Card body - inner wrapper -->
        <div class="bg-white shadow-inner lg:h-full p-6 flex-col -my-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap">
          <!-- Card title and subtitle -->
          <div class="w-full lg:w-1/5 lg:border-right lg:border-solid text-center md:text-left">
            <h3>{{$course->title}}</h3>
            <p class="mb-0 mt-3 text-grey-dark text-sm italic"></p>
            <hr class="w-1/4 md:ml-0 mt-4  border lg:hidden">
          </div>
          <!-- ./Card title and subtitle -->
          
          <!-- Card description -->
          <div class="w-full lg:w-4/5 lg:px-3">
            <p class="text-md mt-4 lg:mt-0 text-justify md:text-left text-sm">
            {{$course->about}}
            </p>
            <p class="text-md mt-4 lg:mt-0 text-justify md:text-left text-sm">
           <ul style="list-style-type:disc"> {!! $course->content !!} </ul>
            </p>
          </div> 
          <!-- ./Card description -->
          
          <!-- Call to action button -->
          <div class="w-full lg:w-1/5 mt-16 lg:mt-0 lg:px-4 text-center md:text-left">
            <button class="bg-white hover:bg-grey-darker hover:text-white border my-4 border-solid border-grey w-1/3 lg:w-full py-2">Register now</button>
          </div>
          <!-- ./Call to action button -->
        </div>
        <!-- ./Card body - inner wrapper -->
      </div>
      <!-- ./Card body - outer wrapper -->
    </div>
    <!-- ./Card body -->
  </div>
  <!-- ./Card wrapper -->
</div>
<!-- ./Container -->
          </div>
          <footer class="text-gray-50 body-font  bg-black">
  <div
    class="
      container
      px-5
      py-20
      mx-auto
      flex
      md:items-center
      lg:items-start
      md:flex-row md:flex-nowrap
      flex-wrap flex-col
    "
  >
    <div
      class="w-64 pl-10 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left"
    >
      <a
        href=""
        class="
          flex
          title-font
          font-medium
          items-center
          md:justify-start
          justify-center 
          text-gray-100
        "
      >
      <img class="h-2/4 w-1/2" src="{{asset('img/logofull.png')}}" alt="">
        
      </a>
      <p class="mt-2 text-sm text-white">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi,
        quam?
      </p>
    </div>
    <div
      class="
        flex-grow flex flex-wrap
        md:pl-20
        -mb-10
        md:mt-0
        mt-10
        md:text-left
        text-center
      "
    >
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2
          class="
            title-font
            font-medium
            text-gray-100
            tracking-widest
            text-sm
            mb-3
          "
        >
        Libya office address :
        </h2>
        <nav class="list-none mb-10">
          <li>
            
           
            <h1 class="text-gray-50 "
              >Noufeelen, Tripoli, Libya</h1
            >
            <a href="https://goo.gl/maps/A31Toqe7j8GUHKNi7" class="text-red-500 hover:text-red-800"
              >Google maps pin</a
            >
          </li>
          
         
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2
          class="
            title-font
            font-medium
            text-gray-100
            tracking-widest
            text-sm
            mb-3
          "
        >
        Headquarters:
        </h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-50 "
              >Imperial Cour
2, Exchange Quay <br>
Manchester <br>
M5 3EB <br>
United Kingdom <br> </a
            >
            <a href="https://maps.app.goo.gl/8a8q55esXuEgGQvy7" class="text-red-500 hover:text-red-800"
              >Google maps pins
            </a>
          
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2
          class="
            title-font
            font-medium
            text-gray-100
            tracking-widest
            text-sm
            mb-3
          "
        >
          Contact
        </h2>
        <nav class="list-none mb-10">
          <li>
            <h1  class="text-gray-50 "
              >HQ's Phone number: <br>
+441 61 4572 146</h1
            >
          </li>
          <li>
            <h1 class="text-gray-50 "
              >Libya Office Phone number: <br>
+218 91 0000 000</h1
            >
          </li>
          
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2
          class="
            title-font
            font-medium
            text-gray-100
            tracking-widest
            text-sm
            mb-3
          "
        >
         Social media
        </h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-red-500 hover:text-red-800"
              ><i class="fab fa-facebook-f"></i> <span class="text-red-50"> - Facebook</span></a
            >
          </li>
          <li>
            <a href="" class="text-red-500 hover:text-red-800"
              > <i class="fab fa-linkedin-in"></i><span class="text-red-50"> - Linkedin</span></a
            >
          </li>
         
        </nav>
      </div>
    </div>
  </div>
  <div class="bg-red-500 ">
    <div
      class="
        container
        mx-auto
        py-3
        px-5
        flex flex-wrap flex-col
        sm:flex-row
      "
    >
      <p class="text-white text-sm text-center sm:text-left">
        © 2021 Copyright
        <a
          href="https://www.tailwind-elements.com/"
          class="text-gray-50 ml-1"
          target="_blank"
          ></a
        >
      </p>
     
    </div>
  </div>
</footer>
          </body>