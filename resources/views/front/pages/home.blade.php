@extends('front.layout.master')

@section('title', 'Ballerini')

@section('main')
<div class="grid grid-cols-12 gap-4 container lg:px-44 md:px-10 sm:px-6 mx-auto">
    <div class="mt-24 col-span-8">
      <h1 class="text-white text-4xl mb-8">
        Balle Bot
      </h1>

      <p class="text-base text-white mb-8">Deixe a sua comunidade segura de um jeito fácil</p>

      <a href="#" class="text-[#2F2325] bg-[#ECD6C4] p-2 rounded-lg shadow-lg">
        Me adicione!
      </a>
    </div>

    <img class="col-span-4" src="{{asset('assets/img/home/ballerini-img.png')}}" alt="character ballerini">
    

    <div class="bg-white h-px w-1/5 col-span-12 mx-auto"></div>

    <div class="text col-span-12 text-center">
      <h2 class="pt-20 text-2xl text-white">
        O que ela faz por você?
      </h2>
      
      <p class="text-lg text-white">
        1. Cria um sistema de verificação capcha para novos membros garantirem que não são robôs
      </p>
  
      <p class="text-lg text-white">
        2. Possui um sistema de banimento automático para links suspeitos que forem enviados na comunidade
      </p>
  
      <p class="text-lg mb-6 text-white">
        3. Sistema de avisos e banimento manual, para pessoas administradoras utilizarem
      </p>
    </div>
</div>
    
@endsection

