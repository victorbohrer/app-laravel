@push('css')

<link href="{{ asset('assets/css/pages/header.css') }}" rel="stylesheet" type="text/css" />

@endpush

<header class="container px-44 mx-auto p-3 flex items-center gap-8">
  <img class="mr-96" src="{{asset('assets/img/home/logo-1.png')}}" alt="logo">
  <nav>
      <ul class="flex gap-6 text-white">
        <li>
          <a href="#">Comunidade Ballerini</a>
        </li>

        <li>
          <a href="#">Tutorial</a>
        </li>
        
        <li>
          <a href="#">Open Source</a>
        </li>
        
        <li>
          <a href="#">Comandos</a>
        </li>
      </ul>
  </nav>
</header>
<div class="bg-white h-px w-full"></div>