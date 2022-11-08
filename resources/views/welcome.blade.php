<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PADU</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('img/favicon.svg')}}">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body class="leading-normal tracking-normal" style="font-family: 'Poppins', sans-serif">

  <nav class="flex items-center justify-between flex-wrap bg-light-150 p-3 px-20">
    <div class="flex items-center flex-shrink-1 text-biru mr-6 hover:text-blue-50" href="#" >
      <img src="{{ asset('img/logo.svg')}}" alt=""
        class="transform transition hover:scale-125 duration-300 ease-in-out" />
      <a href="/" class="font-bold tracking-wider text-l">
        &nbsp Pusat Aduan Masyarakat<p>&nbsp Desa Panulisan</p></a>
    </div>
    <div class="block lg:hidden">
      <button
        class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto text-center">
      <div class="text-md lg:flex-grow">
        <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-biru mr-4 hover:text-blue-50">
          Home
        </a>
        <a href="#how" class="block mt-4 lg:inline-block lg:mt-0 text-biru mr-4 hover:text-blue-50">
          Tata Cara
        </a>
      </div>
      <div>
      <button class="bg-transparent hover:bg-blue-700 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-full">
          <a href="{{ url('login')}}">Masuk</a>
      </button>
      <button class="bg-transparent hover:bg-blue-700 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-full">
      <a href="{{ url('register')}}">Daftar</a>
      </button> 
      </div>
    </div>
  </nav>

  <!-- Header -->

  <!--Hero-->
  <div class="pt-96 px-24 bg-blue-500 bg-cover bg-center ..." style="background-image: url('img/hero-bg.svg')">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-right">
      <!--Right Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left text-gray-800">
        <h1 class="my-2 text-5xl font-bold leading-tight text-white">
          Menjawab Keluhan<p> Masyarakat</p>
        </h1>
        <p class="leading-normal text-2xl mb-4 text-white">
          Untuk mereport permasalahan hari ini dilingkungan anda
        </p>
        <button
          class="mx-auto lg:mx-0 bg-blue-500 text-white font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('login')}}">Laporkan!</a>
        </button>
      </div>
      
    </div>
  </div>

  <!-- How -->
  <div id="how" class="container my-20 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
          <img alt="Tulis"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/tulis.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center ">
            <h1 class="text-lg font-bold">Tulis Pengaduan</h1>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
          <img alt="Proses"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/processing.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">Verifikasi</h1>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
          <img alt="Ditindak"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/act.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">Tindak Lanjut</h1>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
          <img alt="Selesai"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/verification.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">Selesai</h1>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
    </div>
  </div>
  <!-- Footer -->
  <footer class="text-center font-medium bg-blue-200 py-5">
    © {{ now()->year }} PADU | By
    <a href="/" class="text-blue-500" target="_blank">Desa Panulisan</a>
  </footer>
  @include('sweetalert::alert')
</body>

</html>