<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Leptis Training</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('img/logo.png')}}"/>
</head>
    <style>@font-face {
 font-family:Futural;
 src: url('{{asset('fonts/FUTURAL.TTF')}}');
 }
 </style>
<body style="font-family:futural" >

<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-white fixed z-10 w-screen invisible sm:visible shadow-md ">
  <div class="w-7xl mx-auto px-2 sm:px-6 lg:px-8">
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
            <a href="#" class=" hover:text-red-600 px-3 py-2 rounded-md text-md font-medium" aria-current="page">HOME</a>

            <a href="#about" class="hover:text-red-600 px-3 py-2 rounded-md text-md font-medium">ABOUT</a>

            <a href="#partners" class="hover:text-red-600 px-3 py-2 rounded-md text-md font-medium">PARTNERS</a>

            <a href="#courses" class="hover:text-red-600 px-3 py-2 rounded-md text-md font-medium">COURSES</a>
            <a href="#contact" class="hover:text-red-600 px-3 py-2 rounded-md text-md font-medium">CONTACT</a>
           
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
          <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
 
    <div class="numbertext">1 / 3</div>
    
    <div class="w-auto min-h-screen " style="background-image: url('{{ asset('img/home.png')}}');  background-position:center ; background-repeat: no-repeat;
  background-size: cover;" id="home">
              <div class="flex-col-reverse  sm:flex-row   flex items-center justify-center lite sm:w-auto sm:h-screen p-0 m-0  bg-gradient-to-b from-black  to-transparent ">   
                  <div id="text" class="text-white w-auto sm:w-5/12 mr-18 sm:pt-10 pt:4 flex flex-col justify-center items-center sm:items-start sm:flex" >
                      <h1 class="sm:text-7xl text-5xl sm:text-left text-center" >Leptis<span class="font-thin opacity-50">Training</span></h1>
                <h2 class=" py-3 text-2xl sm:text-left text-center">Excellence, Integrity  Innovation, Student Focus
. </h2>
               <p class="pb-10 sm:p-0 sm:text-left text-center p-2 visible font-extralight">Our vision is to transform the learning experience in a rapidly advancing world, identifying and addressing critical issues related to the education of professionals, and using technology to broaden and support learning opportunities.</p>
                      <a href="#courses" class="py-2 mb-10 sm:mt-6 px-2 text-xl border-white border-2  opacity-50 hover:opacity-100">Our Courses</a>
                    </div>
                    <img class="sm:w-1/3 w-5/6 mr-20 sm:mr-0 " src="{{asset('img/logo11.png')}}" alt="" >
                </div>
          </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <div class="w-auto min-h-screen " style="background-image: url('{{ asset('img/ndt.png')}}');  background-position:center ; background-repeat: no-repeat;
  background-size: cover;" id="home">
              <div class="flex-col-reverse  sm:flex-row   flex items-center justify-center lite sm:w-auto sm:h-screen p-0 m-0  bg-gradient-to-b from-black  to-transparent ">   
                  <div id="text" class="text-white w-auto sm:w-5/12 mr-18 sm:pt-10 pt:4 flex flex-col justify-center items-center sm:items-start sm:flex" >
                      <h1 class="sm:text-7xl text-5xl sm:text-left text-center" >Leptis<span class="font-thin opacity-50">Training</span></h1>
                <h2 class=" py-3 text-2xl sm:text-left text-center">Excellence, Integrity  Innovation, Student Focus
. </h2>
               <p class="pb-10 sm:p-0 sm:text-left text-center p-2 visible font-extralight">Our vision is to transform the learning experience in a rapidly advancing world, identifying and addressing critical issues related to the education of professionals, and using technology to broaden and support learning opportunities.</p>
                      <a href="#courses" class="py-2 mb-10 sm:mt-6 px-2 text-xl border-white border-2  opacity-50 hover:opacity-100">Our Courses</a>
                    </div>
                    <img class="sm:w-1/3 w-5/6 mr-20 sm:mr-0 " src="{{asset('img/logo11.png')}}" alt="" >
                </div>
          </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <div class="w-auto min-h-screen " style="background-image: url('{{ asset('img/corrosion.png')}}');  background-position:center ; background-repeat: no-repeat;
  background-size: cover;" id="home">
              <div class="flex-col-reverse  sm:flex-row   flex items-center justify-center lite sm:w-auto sm:h-screen p-0 m-0  bg-gradient-to-b from-black  to-transparent ">   
                  <div id="text" class="text-white w-auto sm:w-5/12 mr-18 sm:pt-10 pt:4 flex flex-col justify-center items-center sm:items-start sm:flex" >
                      <h1 class="sm:text-7xl text-5xl sm:text-left text-center" >Leptis<span class="font-thin opacity-50">Training</span></h1>
                <h2 class=" py-3 text-2xl sm:text-left text-center">Excellence, Integrity  Innovation, Student Focus
. </h2>
               <p class="pb-10 sm:p-0 sm:text-left text-center p-2 visible font-extralight">Our vision is to transform the learning experience in a rapidly advancing world, identifying and addressing critical issues related to the education of professionals, and using technology to broaden and support learning opportunities.</p>
                      <a href="#courses" class="py-2 mb-10 sm:mt-6 px-2 text-xl border-white border-2  opacity-50 hover:opacity-100">Our Courses</a>
                    </div>
                    <img class="sm:w-1/3 w-5/6 mr-20 sm:mr-0 " src="{{asset('img/logo11.png')}}" alt="" >
                </div>
          </div>
  </div><div class="absolute bottom-0 w-full"><div class="arrow bounce w-full flex justify-center items-center ">
  <a class="fa fa-chevron-down fa-3x sm:visible invisible text-white " href="#about"></a>
</div></div> 
 
  <!-- Next and previous buttons -->
  <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
</div>
<!-- <br> -->

<!-- The dots/circles -->
<!-- <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> -->


        <!-- <div class="w-auto h-screen border-2 border-red-300" id="navbar"></div> -->
        
          <div class="w-auto h-auto sm:min-h-screen flex justify-between bg-opacity-10" id="about" style="background-image: url('{{asset('img/pill.svg')}}'); 
           background-repeat: round space; background-size: auto auto;  ">
          <img class="invisible w-0  sm:w-1/12 sm:visible" src="{{asset('img/pill100.svg')}}" alt="">
          <div class="w-3/4 flex flex-col py-10 sm:py-0 items-center justify-center ">
              <h3 class="text-red-900 p-1 pr-0 pl-5 pt-0  text-sm sm:text-xl uppercase" style="letter-spacing: 16px;">Who We Are</h3>
              <h1 class="text-red-900  pb-0 uppercase text-xl sm:text-5xl">We Provide</h1>
                        <h2  class="text-red-600 pt-3 p-3 text-center  uppercase text-xl sm:text-5xl">trainings with certified certificates</h2>
                <p class="text-base sm:text-lg px-2  py-3 sm:px-10 text-justify ">Leptis Training is a subsidiary of the UK based Leptis Group. The Training Centre is based in the heart of Tripoli with state-of-the-art facilities and excellent local amenities. <br>Delegates benefit from an excellent learning environment with the latest equipment and facilities on offer ,Our training is delivered by a team of trainers and consultants with a high level of industrial experience and equipped to a high industry standard ,
         <spanb class="sm:visible invisible sm:block hidden" > We also provide tailored on-site training at your organisation and have a worldwide network of partner training and examination providers ,And
          We pride ourselves on our high levels of professionalism and customer service as we look to continuously improve in every aspect of our business.</span> <br>

          As an organisation we recognise the importance of developing our services to meet the constantly evolving needs of our customers. <br>

                 <div class="mx-6 flex flex-col  sm:flex-row flex-wrap ">
                   <div class="sm:w-1/2 py-2 sm:px-4    border-red-400" > 
                     <h1 class="text-xl text-red-500 font-bold">
                     Vision:
                     </h1> 
                     <p>Our vision is to transform the continuous learning experience in a rapidly advancing world, identifying and addressing critical issues related to the education of professionals, and using technology to broaden and support learning opportunities.
                     </p>
                    </div>
                   <div class="sm:w-1/2 py-2 sm:px-4   border-red-400" > 
                     <h1 class="text-xl text-red-500 font-bold">
                     Mission Statement: 
                     </h1> 
                     <p>We fulfill our mission by preparing competent, committed , and reflective professionals as we engage in outstanding, innovative<br> And impactful teaching, and meaningful outreach.
                     </p>
                    </div>
                   <div class="sm:w-1/2 py-2 sm:px-4    border-red-400" > 
                     <h1 class="text-xl text-red-500 font-bold">
                     Student Focus:
                     </h1> 
                     <p>

We are committed to fostering the professional and personal growth of all students and our fellow colleagues by promoting lifelong learning and leadership development. 


</p>
                    </div>
                    
                   <div class="sm:w-1/2 py-2 sm:px-4   border-red-400" > 
                     <h1 class="text-xl text-red-500 font-bold" >
                     Excellence
                     </h1> 
                     <p>We strive for excellence in all our teaching practices. We commit to continuous self-improvement to achieve excellence in all our endeavors

                     </p>
                    </div>
                    
                   <div class="sm:w-1/2 py-2 sm:px-4   border-red-400" > 
                     <h1 class="text-xl text-red-500 font-bold">
                     Integrity
                     </h1> 
                     <p>We’re honest, transparent, accountable, and committed to doing what’s best for our students and our society. 

                     </p>
                    </div>
                    
                   <div class="sm:w-1/2 py-2 sm:px-4   border-red-400" > 
                     <h1 class="text-xl text-red-500 font-bold">
                     Innovation
                     </h1> 
                     <p>We are committed to innovation in our teaching, and outreach to our communities.

                     </p>
                    </div>
                    
                   <div class="sm:w-1/2 py-2 sm:px-4   border-red-400" > 
                     <h1 class="text-xl text-red-500 font-bold">
                     Values:
                     </h1> 
                    
                     <p>Our values drive our decisions and activities.
                     </p>
                    </div>
                    
                 </div>

               
                    </div>
                    
                    <img class="w-0 sm:w-1/12 h-auto invisible  sm:visible" src="{{asset('img/pill100.svg')}}" alt="">
                        
                    </div>
          

   <div id="partners" class="flex flex-col  border-red-400 items-center" >
     <h1 class="text-3xl sm:text-5xl font-bold sm:mt-24 mt-5 p-3 ppercase  bg-white bg-opacity-50  text-red-600" style="letter-spacing: 10px;">Our Partners</h1>
     <div class="flex  flex-col sm:flex-row sm:p-16 p-6  border-blue-400">
       <div class="justify-between flex flex-col sm:w-1/4 p-4 m-4 shadow-xl bg-white rounded-2xl  border-red-400 hover:shadow-2xl">
       <img src="{{asset('img/partner1.png')}} " alt="" class=" py-10">
       <a href="https://www.imeche.org/
"  class=" 
  bg-red-500   text-white  hover:bg-red-700  active:bg-purple-600   font-bold
   w-full    text-center   uppercase   text-xs   px-4   py-2   rounded   shadow   hover:shadow-md   outline-none   focus:outline-none   mr-1   mb-1   ease-linear   transition-all   duration-150 ">learn more</a>
       </div>
       <div class="flex flex-col sm:w-1/4 p-4 m-4 shadow-xl bg-white rounded-2xl justify-between  border-red-400 hover:shadow-2xl">
       <img src="{{asset('img/partner2.png')}}" alt="" class="py-10">
       <a href="https://www.icorr.org/
"  class="
  bg-red-500   text-white  hover:bg-red-700  active:bg-purple-600   font-bold
   w-full    text-center   uppercase   text-xs   px-4   py-2   rounded   shadow   hover:shadow-md   outline-none   focus:outline-none   mr-1   mb-1   ease-linear   transition-all   duration-150 ">learn more</a>
       </div>
       <div class="flex flex-col sm:w-1/4 p-4 m-4 shadow-xl bg-white rounded-2xl justify-between  border-red-400 hover:shadow-2xl">
       <img src="{{asset('img/partner3.png')}}" alt="" class="py-10">
       <a href=" https://www.icats-training.org"  class="
  bg-red-500   text-white  hover:bg-red-700  active:bg-purple-600   font-bold
   w-full    text-center   uppercase   text-xs   px-4   py-2   rounded   shadow   hover:shadow-md   outline-none   focus:outline-none   mr-1   mb-1   ease-linear   transition-all   duration-150 ">learn more</a>
       </div>
       <div class="flex flex-col sm:w-1/4 p-4 m-4 shadow-xl bg-white rounded-2xl justify-center  border-red-400 hover:shadow-2xl">
       <img src="{{asset('img/partner4.png')}}" alt="" class=" py-5">
       <a href=" https://www.bindt.org/"  class="
  bg-red-500   text-white  hover:bg-red-700  active:bg-purple-600   font-bold
   w-full    text-center   uppercase   text-xs   px-4   py-2   rounded   shadow   hover:shadow-md   outline-none   focus:outline-none   mr-1   mb-1   ease-linear   transition-all   duration-150 ">learn more</a>
       </div>

     </div>

   </div>
   
   <div class="w-auto lg:max-h-screen flex flex-col items-center " id="courses" >
     <h1 class="text-3xl sm:text-5xl font-bold sm:mt-24 mt-0 p-3 ppercase  bg-white bg-opacity-50  text-red-600" style="letter-spacing: 10px;" > Our Courses</h1>
     <div id="tabs" class="lg:pb-16 h-4/6 flex w-full sm:flex-row flex-col justify-evenly items-center ">
       <!-- Card -->
<div class="shadow-md rounded-md overflow-hidden w-11/12  sm:w-1/3 m-3">
  <img
    src="{{asset('img/ndt.png')}}"
    class="h-1/4 w-full object-cover"
    alt=""
  />

  <div class="p-4 bg-white">
    <h5 class="text-xl font-semibold mb-2">NDT Training</h5>

    <p class="mb-4">
    Nondestructive testing (NDT) is any of a wide group of analysis techniques used in science and technology industry to evaluate the properties of a material
    </p>

    <a
      class="
  bg-red-500   text-white   active:bg-purple-600   font-bold
   w-full    text-center   uppercase   text-xs   px-4   py-2   rounded   shadow   hover:shadow-md   outline-none   focus:outline-none   mr-1   mb-1   ease-linear   transition-all   duration-150 "
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
        w-full
        text-center
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


         

            <div class="flex sm:flex-row flex-col justify-around border-green-600  items-center ">
              <div class="sm:w-1/2 w-auto h-full  border-green-600"> 
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
<div class=" sm:w-1/2 w-full   bg-gray-100 p-10  rounded-md">
    
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
        <label for="file">Please upload your document</label>
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
    <!-- <div
      class="w-64 pl-10 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left"
    > -->
      
      <div class="sm:w-1/5 w-auto flex flex-col  p-4 px-2 justify-center items-center rounded-lg">
      <img class="h-3/4 w-2/3" src="{{asset('img/logofull.png')}}" alt="">
      <img class="h-3/4 w-2/3 mt-10" src="{{asset('img/partner1.png')}} " alt="">
      </div>  
     
     
    <!-- </div> -->
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
              >Google Maps Location</a
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
              >Google Maps Locations
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
              >Libya Office Phone Number: <br>
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
          href="https://shift.com.ly/"
          class="text-gray-50 ml-1 hover:text-black"
          target="_blank"
          >Powered by Shift Co.
          </a
        >
      </p>
     
    </div>
  </div>
</footer>
   </div>
   <h1 class="fixed right-24 bottom-8 bg-white bg-opacity-30 p-2 rounded-lg text-black-600">Chat with us now</h1>
   <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=165f9822-9c14-4f93-97b5-8d71f795a07f"> </script><!-- End of leptistraining Zendesk Widget script -->
<script>var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}</script> 
</body>
</html>