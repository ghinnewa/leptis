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
<nav class="bg-white fixed z-10 w-screen shadow-md">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
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
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
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
          <div class="flex  space-x-4 pr-8">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class=" hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">HOME</a>

            <a href="#about" class="hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">ABOUT</a>

            <a href="#partners" class="hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">PARTNERS</a>

            <a href="#courses" class="hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">COURSES</a>
            <a href="#contact" class="hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">CONTACT</a>
            <a href="#footer" class="hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">OPENING</a>
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
        <!-- <div class="w-auto h-screen border-2 border-red-300" id="navbar"></div> -->
        <div class="w-auto h-screen " style="background-image: url('{{ asset('img/home.png')}}');  background-position:center;" id="home">
              <div class="flex items-center justify-center lite w-auto h-screen p-0 m-0  bg-gradient-to-b from-black  to-transparent">   
                  <div id="text" class="text-white w-5/12 mr-18 pt-10" >
                      <h1 class="text-7xl " >Leptis<span class="font-thin opacity-50">Training</span></h1>
                <h2 class=" py-3 text-2xl">Solutions, Services, Equipment. </h2>
               <p class="pb-10 font-extralight">We assist our clients with purchasing and deploying the latest equipment, goods, and services mainly in the Oil & Gas sector and many other sectors by connecting them with our award winning internationally recognised partners in the United Kingdom and Europe.</p>
                      <a href="#" class="py-2 px-2  text-xl border-white border-2  opacity-50 hover:opacity-100">Our Courses</a>
                    </div>
                    <img class="w-1/3 " src="{{asset('img/logo11.png')}}" alt="" >
                </div>
          </div>
          <div class="w-auto h-screen  flex justify-between " id="about" style="background-image: url('{{ asset('img/pill.svg')}}');  background-repeat: round space; background-size: auto auto;  ">
          <img src="{{asset('img/pill100.svg')}}" alt="">
          <div class="w-3/4 flex flex-col items-center justify-center ">
              <h3 class="text-red-900 p-1 pr-0 pl-5 pt-0 text-xl uppercase" style="letter-spacing: 16px;">Who We Are</h3>
              <h1 class="text-red-900  pb-0 uppercase text-5xl">We Provide</h1>
                        <h2  class="text-red-600 pt-3 p-3 uppercase text-5xl">trainings with certified certificates</h2>
                <p class="text-lg  py-3 px-10 text-justify font-bold">Leptis Training is a subsidiary of the UK based Leptis Group. The Training Centre is based in the heart of Tripoli with state-of-the-art facilities and excellent local amenities. <br>Delegates benefit from an excellent learning environment with the latest equipment and facilities on offer ,Our training is delivered by a team of trainers and consultants with a high level of industrial experience and equipped to a high industry standard ,
          We also provide tailored on-site training at your organisation and have a worldwide network of partner training and examination providers ,And
          We pride ourselves on our high levels of professionalism and customer service as we look to continuously improve in every aspect of our business. <br>

          As an organisation we recognise the importance of developing our services to meet the constantly evolving needs of our customers. <br>

                  </p>
                    </div>
                    <img src="{{asset('img/pill100.svg')}}" alt="">
                        
                    </div>

   <div class="w-auto h-screen mt-10 pt-8 flex flex-col items-center " id="partners">
     <h1 class="text-5xl absolute font-bold mt-32 p-3 z-0 uppercase  border-2  border-r-0 border-l-0 bg-white bg-opacity-50 border-red-300 text-red-600" style="letter-spacing: 10px;" >Our Partners</h1>
     <div class="flex justify-around">
     <div  style="background-image: url('{{ asset('img/pill2.svg')}}');   background-repeat:no-repeat; background-size:fill; background-position:center " class=" w-1/6 mx-2 h-screen flex justify-center items-center" >
     <img class="w-10/12" src="{{asset('img/partner1.png')}}" alt="" >
      </div>
     <div  style="background-image: url('{{ asset('img/pill2.svg')}}');   background-repeat:no-repeat; background-size:fill; background-position:center " class="w-1/6 mx-2 h-screen flex justify-center items-center" > <img class="w-10/12" src="{{asset('img/partner2.png')}}" alt="" ></div>
     <div  style="background-image: url('{{ asset('img/pill2.svg')}}');   background-repeat:no-repeat; background-size:fill; background-position:center " class=" w-1/6 mx-2 h-screen flex justify-center items-center" > <img class="w-10/12" src="{{asset('img/partner3.png')}}" alt="" ></div>
     <div  style="background-image: url('{{ asset('img/pill2.svg')}}');   background-repeat:no-repeat; background-size:fill; background-position:center " class=" w-1/6 h-screen flex justify-center items-center" > <img class="w-10/12" src="{{asset('img/partner4.png')}}" alt="" ></div>
    </div>
   </div>

   
   <div class="w-auto  h-screen flex flex-col items-center " id="courses" >
     <h1 class="text-5xl  font-bold mt-24 p-3 ppercase  bg-white bg-opacity-50  text-red-600" style="letter-spacing: 10px;" > Our Courses</h1>
     <div id="tabs" class="h-4/6 flex w-full justify-evenly items-center ">
       <!-- Card -->
<div class="shadow-md rounded-md overflow-hidden " style=" width: 400px;">
  <img
    src="{{asset('img/ndt.png')}}"
    class=""
    alt=""
  />

  <div class="p-4 bg-white">
    <h5 class="text-xl font-semibold mb-2">NDT Training</h5>

    <p class="mb-4">
    Nondestructive testing (NDT) is any of a wide group of analysis techniques used in science and technology industry to evaluate the properties of a material
    </p>

    <a
      class="
        bg-red-500
        text-white
        active:bg-purple-600
        font-bold
        uppercase
        text-xs
        px-4
        py-2
        rounded
        shadow
        hover:shadow-md
        outline-none
        focus:outline-none
        mr-1
        mb-1
        ease-linear
        transition-all
        duration-150
      "
      href="/ndt"
    >
      view courses
</a>
  </div>
</div>
<div class="shadow-md rounded-md overflow-hidden " style=" width: 400px;">
  <img
    src="{{asset('img/corrosion.png')}}"
    class="h-1/4 w-full object-cover"
    alt=""
  />

  <div class="p-4 bg-white">
    <h5 class="text-xl font-semibold mb-2">Coating &Corrosion Training</h5>

    <p class="mb-4">
    Nondestructive testing (NDT) is any of a wide group of analysis techniques used in science and technology industry to evaluate the properties of a material
    </p>

    <button
      class="
        bg-red-500
        text-white
        active:bg-purple-600
        font-bold
        uppercase
        text-xs
        px-4
        py-2
        rounded
        shadow
        hover:shadow-md
        outline-none
        focus:outline-none
        mr-1
        mb-1
        ease-linear
        transition-all
        duration-150
      "
      type="button"
    >
      view courses
    </button>
  </div>
</div>
<!-- Card -->
     </div>
   </div>
   
     
   
   <div class="w-auto h-auto  p-10" id="contact">

          <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-200"></div>
            </div>
          </div>

          <div class="mt-10 sm:mt-0 bg">

            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="md:col-span-1 ">
                <div class="  px-4 sm:px-0 flex flex-col items-center justify-center border-2 h-full rounded-xl bg-gray-200  ">
                <img class="h-auto w-1/2 opacity-60 border-2 border-black p-1 rounded-full " src="{{asset('img/class.png')}}" alt="">
                  <h3 class="text-2xl font-medium leading-6 p-4 text-black">Personal Information</h3>
                  <p class="mt-1 text-lg px-3 text-center text-black">
                    Use a permanent address where you can receive mail.
                  </p>
                </div>
              </div>
              <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-gray-200 sm:p-6">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                          <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-red-500 focus:border-red-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                          <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-red-500 focus:border-red-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                          <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                          <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 focus:ring-red-500 focus:border-red-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                          <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select>
                        </div>

                        <div class="col-span-6">
                          <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                          <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-red-500 focus:border-red-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                          <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                          <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 focus:ring-red-500 focus:border-red-500 block w-full shadow-sm sm:text-sm p-2 border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                          <input type="text" name="region" id="region" autocomplete="address-level1" class="mt-1 focus:ring-red-500 focus:border-red-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                          <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-red-500 focus:border-red-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-300 text-right sm:px-6">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Save
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-200"></div>
            </div>
          </div>

          <div class="mt-10 sm:mt-0 bg">
            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="md:col-span-1 ">
                <div class="  px-4 sm:px-0 flex flex-col items-center justify-center border-2 h-full rounded-xl bg-gray-200  ">
                <img class="h-auto w-1/2 opacity-60 border-2 border-black p-1 rounded-full " src="{{asset('img/que.png')}}" alt="">
                  <h3 class="text-2xl font-medium leading-6 p-4 text-black">Personal Information</h3>
                  <p class="mt-1 text-lg px-3 text-center text-black">
                    Use a permanent address where you can receive mail.
                  </p>
                </div>
              </div>
              <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-gray-200 sm:p-6">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                          <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-red-500 focus:border-red-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                          <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-red-500 focus:border-red-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                          <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                          <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 focus:ring-red-500 focus:border-red-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                          <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select>
                        </div>

                        <div class="col-span-6">
                          <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                          <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-red-500 focus:border-red-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                          <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                          <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 focus:ring-red-500 focus:border-red-500 block w-full shadow-sm sm:text-sm p-2 border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                          <input type="text" name="region" id="region" autocomplete="address-level1" class="mt-1 focus:ring-red-500 focus:border-red-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                          <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-red-500 focus:border-red-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-300 text-right sm:px-6">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Save
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

            </div>
    </div>

   <div class="w-auto h-screen border-2 border-red-300 flex flex-col justify-end" id="footer">
     <!-- Required font awesome -->
     <div class=" p-0 m-0 w-full h-1/4 bg-black"></div>
     <div class="flex justify-around  w-full h-1/3 p-0 ">
       <img src="{{asset('img/hour.svg')}}" alt="">
       <div class="flex flex-col justify-center items-center">
         <h1 class="text-3xl uppercase p-2 text-red-600  ">opening</h1>
         <h3 class="text-7xl " > 09:00 am - 09:00 pm</h3>
       </div>
       <img src="{{asset('img/hour.svg')}}" alt="">

     </div>
<link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
/>

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
          CATEGORIES
        </h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >First Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >Second Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >Third Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >Fourth Link</a
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
          CATEGORIES
        </h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >First Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >Second Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >Third Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >Fourth Link</a
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
          CATEGORIES
        </h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >First Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >Second Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >Third Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >Fourth Link</a
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
          CATEGORIES
        </h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >First Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >Second Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >Third Link</a
            >
          </li>
          <li>
            <a href="" class="text-gray-50 hover:text-gray-800"
              >Fourth Link</a
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
      <span
        class="
          inline-flex
          sm:ml-auto sm:mt-0
          mt-2
          justify-center
          sm:justify-start
        "
      >
        <a href="" class="text-white">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="ml-3 text-white">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="ml-3 text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="" class="ml-3 text-white">
          <i class="fab fa-youtube"></i>
        </a>
        <a href="" class="ml-3 text-white">
          <i class="fab fa-instagram"></i>
        </a>
      </span>
    </div>
  </div>
</footer>
   </div>
  
</body>
</html>