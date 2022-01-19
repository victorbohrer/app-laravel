@push('css')

<link href="{{ asset('assets/css/pages/header.css') }}" rel="stylesheet" type="text/css" />

@endpush

<div class="grid grid-cols-12 gap-4 container lg:px-44 md:px-10 sm:px-6 mx-auto p-3 items-center">
  <img class="col-span-8" src="{{asset('assets/img/home/logo-1.png')}}" alt="logo">
  <nav>
      <ul class="flex gap-12 text-white">
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
</div>
<div class="bg-white h-px w-full"></div>