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
<nav class="bg-white fixed z-10 w-screen invisible sm:visible shadow-md">
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
       
          <img class="hidden lg:block h-12 w-auto" src="{{asset('img/logofull.png')}}" alt="">
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
  <!-- <div class="sm:hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1"> -->
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <!-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a> -->
<!-- 
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
              </div>
            </div> -->
          </nav>
        <!-- <div class="w-auto h-screen border-2 border-red-300" id="navbar"></div> -->
        <div class="w-auto min-h-screen " style="background-image: url('{{ asset('img/home.png')}}');  background-position:center ; background-repeat: no-repeat;
  background-size: cover;" id="home">
              <div class="flex-col-reverse  sm:flex-row   flex items-center justify-center lite sm:w-auto sm:h-screen p-0 m-0  bg-gradient-to-b from-black  to-transparent ">   
                  <div id="text" class="text-white w-auto sm:w-5/12 mr-18 sm:pt-10 pt:4 flex flex-col justify-center items-center sm:items-start sm:flex" >
                      <h1 class="sm:text-7xl text-5xl sm:text-left text-center" >Leptis<span class="font-thin opacity-50">Training</span></h1>
                <h2 class=" py-3 text-2xl sm:text-left text-center">Solutions, Services, Equipment. </h2>
               <p class="pb-10 sm:p-0 sm:text-left text-center p-2 visible font-extralight">We assist our clients with purchasing and deploying the latest equipment, goods, and services mainly in the Oil & Gas sector and many other sectors by connecting them with our award winning internationally recognised partners in the United Kingdom and Europe.</p>
                      <a href="#courses" class="py-2 mb-10 sm:mt-6 px-2 text-xl border-white border-2  opacity-50 hover:opacity-100">Our Courses</a>
                    </div>
                    <img class="sm:w-1/3 w-5/6 mr-20 sm:mr-0 " src="{{asset('img/logo11.png')}}" alt="" >
                </div>
          </div>
          <div class="w-auto h-auto sm:h-screen  flex justify-between " id="about" style="background-image: url('{{ asset('img/pill.svg')}}');  background-repeat: round space; background-size: auto auto;  ">
          <img class="invisible w-0  sm:w-auto sm:visible" src="{{asset('img/pill100.svg')}}" alt="">
          <div class="w-3/4 flex flex-col py-10 sm:py-0 items-center justify-center ">
              <h3 class="text-red-900 p-1 pr-0 pl-5 pt-0  text-sm sm:text-xl uppercase" style="letter-spacing: 16px;">Who We Are</h3>
              <h1 class="text-red-900  pb-0 uppercase text-xl sm:text-5xl">We Provide</h1>
                        <h2  class="text-red-600 pt-3 p-3 text-center  uppercase text-xl sm:text-5xl">trainings with certified certificates</h2>
                <p class="text-base sm:text-lg px-2  py-3 sm:px-10 text-justify font-bold">Leptis Training is a subsidiary of the UK based Leptis Group. The Training Centre is based in the heart of Tripoli with state-of-the-art facilities and excellent local amenities. <br>Delegates benefit from an excellent learning environment with the latest equipment and facilities on offer ,Our training is delivered by a team of trainers and consultants with a high level of industrial experience and equipped to a high industry standard ,
         <spanb class="sm:visible invisible sm:block hidden" > We also provide tailored on-site training at your organisation and have a worldwide network of partner training and examination providers ,And
          We pride ourselves on our high levels of professionalism and customer service as we look to continuously improve in every aspect of our business.</span> <br>

          As an organisation we recognise the importance of developing our services to meet the constantly evolving needs of our customers. <br>

                  </p>
                    </div>
                    <img class="w-0 sm:w-auto invisible sm:visible" src="{{asset('img/pill100.svg')}}" alt="">
                        
                    </div>

   <div class="w-auto   mt-10 pt-8 flex flex-col items-center h-screen sm:h-auto" id="partners" style="height: 90vh;">
     <h1 class="sm:text-5xl text-3xl absolute font-bold sm:mt-36 sm:my-0 my-20 p-3 z-0 uppercase  border-2  border-r-0 border-l-0 bg-white bg-opacity-50 border-red-300 text-red-600" style="letter-spacing: 10px;" >Our Partners</h1>
     <div class=" flex flex-col sm:h-screen sm:flex-row sm:py-0 h-full flex-wrap justify-center items-center " id="partner">
     <div  style="background-image: url('{{ asset('img/pill2.svg')}}');   background-repeat:no-repeat; background-size:fill; background-position:center " class="w-1/3 sm:w-1/6 my-3 mx-2  h-56 sm:h-screen flex justify-center items-center" >
     <img class="w-10/12" src="{{asset('img/partner1.png')}}" alt="" >
      </div>
     <div  style="background-image: url('{{ asset('img/pill2.svg')}}');   background-repeat:no-repeat; background-size:fill; background-position:center " class="w-1/3 sm:w-1/6 my-3 mx-2 h-56 sm:h-screen flex justify-center items-center" > <img class="w-10/12" src="{{asset('img/partner2.png')}}" alt="" ></div>
     <div  style="background-image: url('{{ asset('img/pill2.svg')}}');   background-repeat:no-repeat; background-size:fill; background-position:center " class="w-1/3 sm:w-1/6 my-3 mx-2 h-56 sm:h-screen flex justify-center items-center" > <img class="w-10/12" src="{{asset('img/partner3.png')}}" alt="" ></div>
     <div  style="background-image: url('{{ asset('img/pill2.svg')}}');   background-repeat:no-repeat; background-size:fill; background-position:center " class=" w-1/3 sm:w-1/6 my-3 h-56 sm:h-screen flex justify-center items-center" > <img class="w-10/12" src="{{asset('img/partner4.png')}}" alt="" ></div>
    </div>
   </div>

   
   <div class="w-auto  min-h-screen flex flex-col items-center " id="courses" >
     <h1 class="text-3xl sm:text-5xl font-bold sm:mt-24 mt-0 p-3 ppercase  bg-white bg-opacity-50  text-red-600" style="letter-spacing: 10px;" > Our Courses</h1>
     <div id="tabs" class="h-4/6 flex w-full sm:flex-row flex-col justify-evenly items-center ">
       <!-- Card -->
<div class="shadow-md rounded-md overflow-hidden w-11/12 sm:w-1/3 m-3">
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
<div class="shadow-md rounded-md overflow-hidden w-11/12 sm:w-1/3 m-3" >
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

    <a href="/CC"
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
     
    >
      view courses
</a>
  </div>
</div>
<!-- Card -->
     </div>
   </div>
   
     
   
   <div class="w-auto h-auto  sm:p-10" id="contact">

          <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-200"></div>
            </div>
          </div>

         

            <div class="flex sm:flex-row flex-col justify-around border-green-600  items-center ">
              <div class="sm:w-1/2 w-auto border-green-600 "> 
                <div class=" sm:p-12 m-3 p-3 py-5 sm:m-10  sm:px-0 flex  flex-col items-center justify-center  h-full rounded-xl bg-gray-100  ">
                <img class="h-auto  w-1/3 opacity-60 border-4 border-black p-1 rounded-full " src="{{asset('img/class.png')}}" alt="">
                  <h3 class="text-2xl font-medium leading-6 p-4 text-black">To Register</h3>
                  <p class="mt-1 text-lg px-6 text-center text-black">
                  Send us the name of the course you want
                  </p>
                  
                  <!-- <a href="http://simplybooking.com/" class=" bg-red-500 rounded-md text-white px-6 py-2 my-6">register now!</a> -->
                </div>
                <div class=" sm:p-12 m-3 p-3 py-5 sm:m-10  sm:px-0 flex  flex-col items-center justify-center  h-full rounded-xl bg-gray-100 ">
                  <img class="h-auto w-1/3 opacity-60 border-4 border-black p-1 rounded-full " src="{{asset('img/que.png')}}" alt="">
                  <h3 class="text-2xl font-medium leading-6 p-4 text-black">For inquiries</h3>
                  <p class="mt-1 text-lg px-6 text-center text-black">
                  Send us all your questions and comments
                  </p>
                <!-- <a href="https://www.icorr.org/correx/" class=" bg-red-500 rounded-md text-white px-6 py-2 my-6">connect with us</a> -->
                </div>
              </div>
              <!-- component -->
<!-- This is an example component -->
<div class="max-w-lg sm:w-2/3 w-11/12 mx-10 bg-gray-100 p-10  rounded-md">
    
<form action="send" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="mb-6">
            <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required="">
        </div>
        <div class="mb-6">
            <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Your name</label>
            <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
        </div>
        <div class="mb-6">
            <label for="phone" class="text-sm font-medium text-gray-900 block mb-2">Your phone</label>
            <input type="phone" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
        </div>
        <div class="mb-6">
            <label for="companyname" class="text-sm font-medium text-gray-900 block mb-2">Your company name</label>
            <input type="companyname" name="companyname" id="companyname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
        </div>
        <div class="mb-6">
            <label for="position" class="text-sm font-medium text-gray-900 block mb-2">Your position</label>
            <input type="position" name="position" id="position" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
        </div>
        <div class="mb-6">
            <label for="course" class="text-sm font-medium text-gray-900 block mb-2">course name / message</label>
            <input type="course" name="course" id="course" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
        </div>
        <div class="mb-1">
        <label for="file">add your CV:</label>
  <input type="file" id="file" name="file" required="">
      
      </div>
        <div class="flex items-start mb-6">
        </div>
        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
    </form>

    <!-- <p class="mt-5">We will receive your request to contact us and we will try to respond to you as soon as possible ... Thank you</p> -->
</div>

<script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
              
            
            </div>
           

            
    </div>

   <div class="w-auto min-h-screen sm:h-screen flex flex-col justify-end" id="footer">
     <!-- Required font awesome -->
     <div class=" p-0 m-0 w-full h-1/4 bg-black"></div>
     <div class="flex justify-around  w-full h-1/3 p-0 ">
       <img class='w-0 sm:w-auto' src="{{asset('img/hour.svg')}}" alt="">
       <div class="flex flex-col justify-center items-center">
         <h1 class="text-3xl uppercase p-2 text-red-600  ">opening</h1>
         <h3 class="text-3xl sm:text-7xl " > 09:00 am - 05:00 pm</h3>
       </div>
       <img class='w-0 sm:w-auto' src="{{asset('img/hour.svg')}}" alt="">

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
            <a href="https://www.facebook.com/Leptis-Training-Libya-109154421577282" class="text-red-500 hover:text-red-800"
              ><i class="fab fa-facebook-f"></i> <span class="text-red-50"> - Facebook</span></a
            >
          </li>
          <li>
            <a href="https://www.linkedin.com/company/leptis-training/" class="text-red-500 hover:text-red-800"
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
   </div>
  
   <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=165f9822-9c14-4f93-97b5-8d71f795a07f"> </script><!-- End of leptistraining Zendesk Widget script -->
</body>
</html>